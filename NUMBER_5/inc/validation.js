/*
Проверяет вводимые данные, если данные введены не верено
Выводит ошибку и блокирует кнопку отправить
*/

function validation_name() {
    var form = document.getElementById("form");
    var name = document.getElementById("name").value;
    var text_name = document.getElementById("text_name");
    var pattern_name = /^[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{0,}\s[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{1,}(\s[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{1,})?$/;
    if (name.match(pattern_name)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text_name.innerHTML = "";
        text_name.style.color = "#0b00ab";
        document.getElementById("sub").disabled=false;
    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text_name.innerHTML = "Please Enter Valid Name";
        text_name.style.color = "#000000";
        document.getElementById("sub").disabled=true;
    }
}

function validation_number() {
    var form = document.getElementById("form");
    var number = document.getElementById("number").value;
    var text_number = document.getElementById("text_number");
    var pattern_number = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;
    if (number.match(pattern_number)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text_number.innerHTML = "";
        text_number.style.color = "#0b00ab";
        document.getElementById("sub").disabled=false;

    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text_number.innerHTML = "Please Enter Valid Number";
        text_name.style.color = "#000000";
        document.getElementById("sub").disabled=true;
    }
}

function validation_email() {
    var form = document.getElementById("form");
    var email = document.getElementById("email").value;
    var text_email = document.getElementById("text_email");
    var pattern_email = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (email.match(pattern_email)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text_email.innerHTML = "Your Email Address in Valid.";
        text_email.style.color = "#0b00ab";
        document.getElementById("sub").disabled=false;
    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text_email.innerHTML = "Please Enter Valid Email Address";
        text_email.style.color = "#000000";
        document.getElementById("sub").disabled=true;
    }
}

