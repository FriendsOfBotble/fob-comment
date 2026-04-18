document.addEventListener('DOMContentLoaded', () => {
    const $ = window.jQuery || window.$

    if (!$) {
        console.error('fob-comment: jQuery is required')
        return
    }

    let isReplying = false
    let originalFormParent = null
    let originalFormNextSibling = null
    let originalFormTitle = ''
    let originalFormAction = ''

    const setCookie = (name, value, expiresDate) => {
        const currentDate = new Date()
        currentDate.setDate(currentDate.getDate() + expiresDate)
        value = encodeURIComponent(value) + (expiresDate == null ? '' : '; expires=' + currentDate.toUTCString())
        document.cookie = `fob-comment-${name}=${value}; path=/`
    }

    const getCookie = (name) => {
        const arr = document.cookie.match(new RegExp(`(^| )fob-comment-${name}=([^;]*)(;|$)`))

        if (arr != null) {
            return decodeURIComponent(arr[2])
        }

        return null
    }

    const deleteCookie = (name) => {
        document.cookie = `fob-comment-${name}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/`
    }

    $(document)
        .find('.fob-comment-form input')
        .each((index, input) => {
            const name = $(input).prop('name')
            const cookieValue = getCookie(name)

            if (cookieValue && cookieValue !== 'null') {
                if (name === 'cookie_consent') {
                    $(input).prop('checked', true)
                } else {
                    $(input).val($(input).val() || cookieValue)
                }
            }
        })

    const resetRecaptcha = () => {
        if (typeof window.grecaptcha === 'undefined' || typeof window.grecaptcha.render !== 'function') {
            return
        }

        $(document).find('.fob-comment-form .g-recaptcha').each((_, el) => {
            if (!el.id) {
                return
            }

            try {
                el.innerHTML = ''
                window.grecaptcha.render(el.id)
            } catch (error) {
                try {
                    window.grecaptcha.reset()
                } catch (resetError) {
                    // silently ignore — captcha may not be ready yet
                }
            }
        })
    }

    const storeOriginalFormState = (form) => {
        originalFormParent = form[0].parentNode
        originalFormNextSibling = form[0].nextSibling
        originalFormTitle = form.find('.fob-comment-form-title span').text()
        originalFormAction = form.find('form').prop('action')
    }

    const restoreFormToOriginalPosition = () => {
        const form = $(document).find('.fob-comment-form-section')

        if (!form.length || !originalFormParent) {
            return
        }

        if (originalFormNextSibling && originalFormNextSibling.parentNode === originalFormParent) {
            originalFormParent.insertBefore(form[0], originalFormNextSibling)
        } else {
            originalFormParent.appendChild(form[0])
        }

        form.find('.fob-comment-form-title span').text(originalFormTitle)
        form.find('.fob-comment-form-title .cancel-comment-reply-link').remove()
        form.find('form').prop('action', originalFormAction)

        resetRecaptcha()

        isReplying = false
    }

    const fetchComments = (url = fobComment.listUrl) => {
        // Guard: if a reply form is currently docked inside the list, move it back
        // to its original position before the list HTML is replaced — otherwise the
        // form DOM (and its reCAPTCHA iframe) gets destroyed by the innerHTML swap.
        if (isReplying) {
            restoreFormToOriginalPosition()
        }

        const $commentListSection = $(document).find('.fob-comment-list-section')
        const $loading = $commentListSection.find('.fob-comment-list-loading')
        const $content = $commentListSection.find('.fob-comment-list-content')

        $loading.show()
        $content.hide()

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: ({ error, data, message }) => {
                $loading.hide()

                if (window?.Theme !== undefined && error) {
                    Theme.showError(message)
                    $commentListSection.hide()

                    return
                }

                const { title, html, comments } = data

                if (comments.total < 1) {
                    $commentListSection.hide()
                } else {
                    $commentListSection.show()
                    $content.show()
                    $(document).find('.fob-comment-list-title').text(title)
                    $(document).find('.fob-comment-list-wrapper').html(html)
                }
            },
            error: () => {
                $loading.hide()
                $commentListSection.hide()
            },
        })
    }

    $(document)
        .on('submit', '.fob-comment-form', (e) => {
            e.stopPropagation()
            e.preventDefault()

            const form = $(e.currentTarget)
            const submitButton = form.find('button[type="submit"], input[type="submit"]')

            // Prevent double submission
            if (form.data('submitting')) {
                return
            }

            if (typeof $.fn.validate !== 'undefined') {
                if (!$('.fob-comment-form').valid()) {
                    return
                }
            }

            const formData = new FormData(form[0])
            const cookieConsentsCheckbox = form.find('input[type="checkbox"][name="cookie_consent"]')
            const saveToCookie = cookieConsentsCheckbox.length > 0 && cookieConsentsCheckbox.is(':checked')

            // Set loading state
            form.data('submitting', true)
            const originalButtonText = submitButton.text() || submitButton.val()
            submitButton.prop('disabled', true).addClass('fob-btn-loading')

            if (submitButton.is('button')) {
                submitButton.html('<svg class="fob-spinner" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle style="opacity: 0.25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path style="opacity: 0.75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>' + originalButtonText)
            }

            const resetButton = () => {
                form.data('submitting', false)
                submitButton.prop('disabled', false).removeClass('fob-btn-loading')
                if (submitButton.is('button')) {
                    submitButton.text(originalButtonText)
                }
            }

            $.ajax({
                url: form.prop('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: ({ error, message }) => {
                    resetButton()

                    if (window?.Theme !== undefined) {
                        if (error) {
                            Theme.showError(message)

                            return
                        }

                        Theme.showSuccess(message)
                    }

                    if (saveToCookie) {
                        setCookie('name', formData.get('name'), 365)
                        setCookie('email', formData.get('email'), 365)
                        setCookie('website', formData.get('website'), 365)
                        setCookie('cookie_consent', 1, 365)

                        form.find('textarea[name="content"]').val('')
                    } else {
                        form[0].reset()

                        deleteCookie('name')
                        deleteCookie('email')
                        deleteCookie('website')
                        deleteCookie('cookie_consent')
                    }

                    // Move form back to its original position BEFORE fetchComments() re-renders
                    // the list (which would otherwise destroy the form DOM sitting inside the list).
                    if (isReplying) {
                        restoreFormToOriginalPosition()
                    } else {
                        resetRecaptcha()
                    }

                    fetchComments()
                },
                error: (error) => {
                    resetButton()

                    if (window?.Theme !== undefined) {
                        Theme.handleError(error)
                    }

                    resetRecaptcha()
                },
            })
        })
        .on('click', '.fob-comment-pagination a', (e) => {
            e.preventDefault()

            const url = e.currentTarget.href

            if (url) {
                fetchComments(url)

                $('html, body').animate({
                    scrollTop: $('.fob-comment-list-section').offset().top,
                })
            }
        })
        .on('click', '.fob-comment-item-reply', (e) => {
            e.preventDefault()

            const currentTarget = $(e.currentTarget)
            const form = $(document).find('.fob-comment-form-section')

            if (!form.length) {
                return
            }

            if (!isReplying) {
                storeOriginalFormState(form)
            }

            // jQuery .after() moves the element if it already exists in the DOM,
            // preserving data/events and the reCAPTCHA iframe inside.
            currentTarget.closest('.fob-comment-item').after(form)

            form.find('.fob-comment-form-title span').text(currentTarget.data('reply-to'))
            form.find('.fob-comment-form-title .cancel-comment-reply-link').remove()
            form.find('.fob-comment-form-title').append(
                `<a href="#" class="cancel-comment-reply-link" rel="nofollow">${currentTarget.data('cancel-reply')}</a>`
            )
            form.find('form').prop('action', currentTarget.prop('href'))

            resetRecaptcha()

            isReplying = true
        })
        .on('click', '.cancel-comment-reply-link', (e) => {
            e.preventDefault()

            restoreFormToOriginalPosition()
        })
        .on('click', '.fob-comment-item-delete', (e) => {
            e.preventDefault()

            const currentTarget = $(e.currentTarget)
            const confirmMessage = currentTarget.data('confirm')

            if (!confirm(confirmMessage)) {
                return
            }

            $.ajax({
                url: currentTarget.attr('href'),
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': fobComment.csrfToken,
                },
                dataType: 'json',
                success: ({ error, message }) => {
                    if (window?.Theme !== undefined) {
                        if (error) {
                            Theme.showError(message)
                            return
                        }
                        Theme.showSuccess(message)
                    }
                    fetchComments()
                },
                error: (error) => {
                    if (window?.Theme !== undefined) {
                        Theme.handleError(error)
                    }
                },
            })
        })

    fetchComments()
})
