function validatedForm() {
    var name = document.getElementById("name");
    var nameError = document.getElementById("nameError");
    var email = document.getElementById("email");
    var emailError = document.getElementById("emailError");
    var message = document.getElementById("message");
    var messageError = document.getElementById("messageError");
    var errorFlagged = 0;


    if (name.value.length == 0) {
        nameError.style.display = 'block';
        errorFlagged++;
    } else {
        nameError.style.display = 'none';
    }

    if (email.value.length == 0 || checkValidEmail(email) == false) {
        emailError.style.display = 'block';
        errorFlagged++;
    } else {
        emailError.style.display = 'none';
    }

    if (message.value.length == 0) {
        messageError.style.display = 'block';
        errorFlagged++;
    } else {
        messageError.style.display = 'none';
    }

    if (errorFlagged == 0) {
        return true;
    } else {
        return false;
    }
}

function checkValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value);
}