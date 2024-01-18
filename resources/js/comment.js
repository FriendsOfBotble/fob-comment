document.addEventListener('DOMContentLoaded', function () {
    let isReplying = false
    let originalForm = ''

    const setCookie = (name, value, expriesDate) => {
        const exdate = new Date()
        exdate.setDate(exdate.getDate() + expriesDate)
        value = encodeURIComponent(value) + (expriesDate == null ? '' : '; expires=' + exdate.toUTCString())
        document.cookie = `fob-comment-${name}=${value}; path=/`
    }

    const getCookie = (name) => {
        const arr = document.cookie.match(new RegExp(`(^| )fob-comment-${name}=([^;]*)(;|$)`))

        if (arr != null) {
            return decodeURIComponent(arr[2])
        }

        return null
    }

    ['name', 'email', 'website', 'cookie_consent'].forEach((name) => {
        if (getCookie(name)) {
            document.querySelector(`input[name="${name}"]`).value = getCookie(name)
        }
    })

    const deleteCookie = (name) => {
        document.cookie = `fob-comment-${name}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/`
    }

    const fetchComments = (url = fobComment.listUrl) => {
        fetch(url, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (window?.Theme !== undefined && data.error) {
                    Theme.showError(data.message)

                    return
                }

                const { title, html, comments } = data.data

                const commentListSection = document.querySelector('.fob-comment-list-section')

                if (comments.total < 1) {
                    commentListSection.style.display = 'none'

                    return
                }

                commentListSection.style.display = 'block'
                document.querySelector('.fob-comment-list-title').textContent = title
                document.querySelector('.fob-comment-list-wrapper').innerHTML = html
            })
    }

    const handleCommentSubmit = (event) => {
        event.stopPropagation()
        event.preventDefault()

        if (typeof $ !== 'undefined' && typeof $.fn.validate !== 'undefined') {
            if (!$('.fob-comment-form').valid()) {
                return
            }
        }

        const form = event.target
        const formData = new FormData(form)

        const cookieConsentsCheckbox = form.querySelector('input[type="checkbox"][name="cookie_consent"]')
        const saveToCookie = cookieConsentsCheckbox ? cookieConsentsCheckbox.checked : false

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (window?.Theme !== undefined) {
                    if (data.errors) {
                        Theme.handleValidationError(data.errors)

                        return
                    }

                    if (data.error) {
                        Theme.showError(data.message)

                        return
                    }

                    Theme.showSuccess(data.message)
                }

                if (saveToCookie) {
                    setCookie('name', formData.get('name'), 365)
                    setCookie('email', formData.get('email'), 365)
                    setCookie('website', formData.get('website'), 365)
                    setCookie('cookie_consent', 1, 365)

                    form.querySelector('textarea[name="content"]').value = ''
                } else {
                    form.reset()

                    deleteCookie('name')
                    deleteCookie('email')
                    deleteCookie('website')
                    deleteCookie('cookie_consent')
                }

                fetchComments()

                if (isReplying) {
                    isReplying = false

                    document
                        .querySelector('.fob-comment-list-section')
                        .parentNode.insertBefore(
                            originalForm,
                            document.querySelector('.fob-comment-list-section').nextSibling
                        )
                }
            })
    }

    const handleCommentListClick = (event) => {
        const target = event.target

        if (target.closest('.fob-comment-pagination')) {
            event.preventDefault()

            const url = target.href

            if (url) {
                fetchComments(url)

                document.querySelector('.fob-comment-list-section').scrollIntoView({
                    behavior: 'smooth',
                })
            }
        }

        if (target.classList.contains('fob-comment-item-reply')) {
            event.preventDefault()

            const replyForm = document.querySelector('.fob-comment-form-section')

            if (replyForm) {
                replyForm.remove()
            }

            if (!isReplying) {
                originalForm = replyForm.cloneNode(true)
            }

            const commentItem = target.closest('.fob-comment-item')

            commentItem.parentNode.insertBefore(replyForm, commentItem.nextSibling)

            replyForm.querySelector('.fob-comment-form-title').textContent = target.dataset.replyTo

            const cancelReplyLink = document.createElement('a')
            cancelReplyLink.id = 'cancel-comment-reply-link'
            cancelReplyLink.href = '#'
            cancelReplyLink.rel = 'nofollow'
            cancelReplyLink.textContent = target.dataset.cancelReply
            replyForm.querySelector('.fob-comment-form-title').appendChild(cancelReplyLink)

            replyForm.querySelector('form').setAttribute('action', target.href)

            isReplying = true

            document.querySelector('.fob-comment-form').addEventListener('submit', handleCommentSubmit)
        }

        if (target.id === 'cancel-comment-reply-link') {
            event.preventDefault()

            isReplying = false

            const replyForm = document.querySelector('.fob-comment-form-section')

            if (replyForm) {
                replyForm.remove()
            }

            document
                .querySelector('.fob-comment-list-section')
                .parentNode.insertBefore(originalForm, document.querySelector('.fob-comment-list-section').nextSibling)
        }
    }

    fetchComments()

    document.querySelector('.fob-comment-form').addEventListener('submit', handleCommentSubmit)

    document.querySelector('.fob-comment-list-section').addEventListener('click', handleCommentListClick)
})
