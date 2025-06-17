document.addEventListener('DOMContentLoaded', () => {
    const reviewForm = document.getElementById('reviewForm');

    if (reviewForm) {
        const showError = (input, message) => {
            let errorElem = input.parentElement.querySelector('.error-message');
            if (!errorElem) {
            errorElem = document.createElement('div');
            errorElem.className = 'error-message';
            errorElem.style.color = 'red';
            errorElem.style.fontSize = '0.9em';
            input.parentElement.appendChild(errorElem);
            }
            errorElem.textContent = message;
        };

        const clearErrors = () => {
            document.querySelectorAll('.error-message').forEach(elem => elem.remove());
        };

        reviewForm.addEventListener('submit', function(event) {
            event.preventDefault();
            clearErrors();

            const firstName = document.getElementById('firstName');
            const lastName = document.getElementById('lastName');
            const email = document.getElementById('email');
            const message = document.getElementById('message');

            let isValid = true;

            if (firstName.value.trim() === '') {
            isValid = false;
            showError(firstName, 'Please enter your first name.');
            firstName.focus();
            } else if (lastName.value.trim() === '') {
            isValid = false;
            showError(lastName, 'Please enter your last name.');
            lastName.focus();
            } else if (email.value.trim() === '' || !validateEmail(email.value)) {
            isValid = false;
            showError(email, 'Please enter a valid email address.');
            email.focus();
            } else if (message.value.trim() === '') {
            isValid = false;
            showError(message, 'Please enter your message.');
            message.focus();
            }

            if (isValid) {
            // Aquí puedes enviar los datos o mostrar un mensaje de éxito en la página
            const successMsg = document.createElement('div');
            successMsg.textContent = 'Thank you for your review!';
            successMsg.style.color = 'green';
            successMsg.style.marginTop = '1em';
            reviewForm.parentElement.insertBefore(successMsg, reviewForm);
            reviewForm.reset();
            setTimeout(() => successMsg.remove(), 4000);
            }
        });
    }

    // Función auxiliar para validar formato de email (básica)
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
});