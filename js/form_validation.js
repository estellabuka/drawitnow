"use strict"

//Short-form
document.addEventListener('DOMContentLoaded', function () {
	const shortForm = document.getElementById('shortForm');
	shortForm.addEventListener('submit', formSend);

	async function formSend(e) {
		e.preventDefault();

		let error = formValidate(shortForm);

        let formData = new FormData(shortForm);
        formData.append('image', formImage.files[0]);

		if (error === 0) {
            const formBox = document.querySelector('#shortFormBox');
            const activeModal = document.querySelector('.is-active');
			const overlay = document.querySelector('.overlay');
            formBox.classList.add('_sending');
			activeModal.classList.remove('is-active');
			overlay.classList.remove('overlay');
            let response = await fetch('sendmail.php', {
                method: 'POST',
                body: formData
            });
            if (response.ok) {
                let result = await response.json();
                alert(result.message);
                formPreview.innerHTML = '';
                shortForm.reset();
                formBox.classList.remove('_sending');
            } else {
                alert("Помилка! Не вдалося відправити форму");
                formBox.classList.remove('_sending');
            }
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

        let formData = new FormData(payForm);
        formData.append('image', formImage.files[0]);

		if (error === 0) {
            const formBox = document.querySelector('#payFormBox');
			const activeModal = document.querySelector('.is-active');
			const overlay = document.querySelector('.overlay');
            formBox.classList.add('_sending');
			activeModal.classList.remove('is-active');
			overlay.classList.remove('overlay');
            let response = await fetch('sendmail_pay.php', {
                method: 'POST',
                body: formData
            });
            if (response.ok) {
                let result = await response.json();
                alert(result.message);
                formPreview.innerHTML = '';
                payForm.reset();
                formBox.classList.remove('_sending');
            } else {
                alert("Помилка! Не вдалося відправити форму");
                formBox.classList.remove('_sending');
            }
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

    //formPreview
    const formImage = document.getElementById('formImage');
    const formPreview = document.getElementById('formPreview');

    formImage.addEventListener('change', () => {
        uploadFile(formImage.files[0]);
    });

    function uploadFile(file) {
        if (!['image/jpeg', 'image/png', 'image/gif'].includes(file.type)) {
            alert('Завантажити можна лише зображення');
            formImage.value = '';
            return;
        }
        if (file.size > 2 * 1024 * 1024) {
            alert('Розмір файлу не повинен перевищувати 2МБ');
            return;
        }

        var reader = new FileReader();
        reader.onload = function (e) {
            formPreview.innerHTML = `<img src ="${e.target.result}" alt="screenshot">`;
        };
        reader.onerror = function (e) {
            alert('Неможливо відобразити фото');
        };
        reader.readAsDataURL(file);
    }
});