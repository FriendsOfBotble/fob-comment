document.addEventListener('DOMContentLoaded', function () {
    const getComments = async () => {
        const response = await fetch(fobComment.listUrl, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
            },
        })

        const data = await response.json()

        const { title, html } = data.data

        document.querySelector('.fob-comment-list-title').textContent = title
        document.querySelector('.fob-comment-list-wrapper').innerHTML = html
    }

    getComments()

    document.querySelector('.fob-comment-form').addEventListener('submit', async (event) => {
        event.preventDefault()

        const form = event.target
        const formData = new FormData(form)

        const response = await fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
            },
        })

        if (!response.ok) {
            return
        }

        const data = await response.json()

        form.reset()

        getComments()
    })
})
