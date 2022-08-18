"use strict"

//Short-form
document.addEventListener('DOMContentLoaded', function () {
	const shortForm = document.getElementById('shortForm');
	shortForm.addEventListener('submit', formSend);

	async function formSend(e) {
		e.preventDefault();

		let error = formValidate(shortForm);

		if (error === 0) {

		} else {
			alert("Будь ласка, перевірте коректність даних!");
		}
	}

	function formValidate(form) {
		let error = 0;
		let formReq = document.querySelectorAll('._req');

		for (let index = 0; index < formReq.length; index++) {
			const input = formReq[index];
			formRemoveError(input);

			if (input.classList.contains('_email')) {
				if (emailTest(input)) {
					formAddError(input);
					error++;
				}
			} else if (input.classList.contains('_tg')) {
				if (tgTest(input)) {
					formAddError(input);
					error++;
				}
			} else {
				if (input.value === '') {
				formAddError(input);
				error++;
				}
			}
		}
		return error;
	}
	function formAddError(input) {
		input.parentElement.classList.add('_error');
		input.classList.add('_error');
	}
	function formRemoveError(input) {
		input.parentElement.classList.remove('_error');
		input.classList.remove('_error');
	}
	//email test
	function emailTest(input) {
		return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
	}
	//Telegram test
	function tgTest(input) {
		return !/^@[\w-]/.test(input.value);
	}
});

//Pay-form
document.addEventListener('DOMContentLoaded', function () {
	const payForm = document.getElementById('payForm');
	payForm.addEventListener('submit', formSend);

	async function formSend(e) {
		e.preventDefault();

		let error = formValidate(payForm);

		if (error === 0) {

		} else {
			alert("Будь ласка, перевірте коректність даних!");
		}
	}

	function formValidate(form) {
		let error = 0;
		let formReq = document.querySelectorAll('._reqPay');

		for (let index = 0; index < formReq.length; index++) {
			const input = formReq[index];
			formRemoveError(input);

			if (input.classList.contains('_emailPay')) {
				if (emailTest(input)) {
					formAddError(input);
					error++;
				}
			} else if (input.classList.contains('_tgPay')) {
				if (tgTest(input)) {
					formAddError(input);
					error++;
				}
			} else {
				if (input.value === '') {
				formAddError(input);
				error++;
				}
			}
		}
		return error;
	}
	function formAddError(input) {
		input.parentElement.classList.add('_error');
		input.classList.add('_error');
	}
	function formRemoveError(input) {
		input.parentElement.classList.remove('_error');
		input.classList.remove('_error');
	}
	//email test
	function emailTest(input) {
		return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
	}
	//Telegram test
	function tgTest(input) {
		return !/^@[\w-]/.test(input.value);
	}
});