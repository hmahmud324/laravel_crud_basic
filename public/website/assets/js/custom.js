
function fadeOutValidationMessages() {

    const validationMessages = document.querySelectorAll('.error-msg');

    validationMessages.forEach(function (message) {
        setTimeout(function () {
            message.style.opacity = '0';
        }, 10000);
    });
}


document.addEventListener('DOMContentLoaded', function () {
    fadeOutValidationMessages();
});
