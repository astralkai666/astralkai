function initHome() {
    document.querySelector('#landing').style.display = 'none'
    document.querySelector('#home').style.display = 'block'
}



const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach((tab) => {
	tab.addEventListener('click', () => {
		const target = document.querySelector(tab.dataset.tabTarget)

		tabContents.forEach(tabContent => {
			tabContent.classList.remove('active')
		})

		tabs.forEach(tab => {
			tab.classList.remove('active')
		})

		tab.classList.add('active')
		target.classList.add('active')
	})
})


const btnSubmit = document.querySelector('#submit')

btnSubmit.addEventListener('click', onSubmit)

function onSubmit(e) {

	e.preventDefault()

	const name = document.querySelector('#name')
	const email = document.querySelector('#email')
	const subject = document.querySelector('#subject')
	const msg = document.querySelector('#msg')
	const log = document.querySelector('#log')


	if(name.value === '' || email.value === '' || subject.value === '' || msg.value === '') {

		// scroll to top!
		log.style.display = 'block'
		log.classList.add('log-err')
		log.innerText = 'All fields required!'

		setTimeout(() => {
			log.style.display = 'none'
			log.classList.remove('log-err')
		}, 3000)

	} else {

		const nameToken = 'name='+name.value
		const emailToken = 'email='+email.value
		const subjectToken = 'subject='+subject.value
		const msgToken = 'msg='+msg.value
		const xhr = new XMLHttpRequest()

		xhr.open('post', './index.php', true)
		xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

		xhr.onload = function() {

			if(this.status == 200) {

				const stamp = new Date()

				console.warn('New Email Received:')
				console.log(`From: ${email.value}`)
				console.log(`Subject: ${subject.value}`)
				console.log(`Message: ${msg.value}`)
				console.log(stamp)
				console.log('')

				log.style.display = 'block'
				log.classList.add('log-success')
				log.innerText = 'Email submitted!'

				setTimeout(() => {
					log.style.display = 'none'
					log.classList.remove('log-success')
				}, 3000)

				name.value = ''
				email.value = ''
				subject.value = ''
				msg.value = ''

			} else if(this.status != 200) {

				log.style.display = 'block'
				log.classList.add('bg-secondary')
				log.style.color = '#ffffff'
				log.innerText = 'Email Submission Failed!'

				setTimeout(() => {

					log.style.display = 'none'
					log.classList.remove('bg-secondary')

				}, 3000)
			}
		}

		xhr.send(nameToken, emailToken, subjectToken, msgToken)
	}
}