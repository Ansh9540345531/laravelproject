
// Header footer script
$(function () {
    $("#header").load("header.html");
    $("#footer").load("footer.html");
});

// toggle password
function togglepassword() {
    var x = document.getElementById('password')
    if (x.type === 'password') {
        x.type = 'text'
    } else {
        x.type = 'password'
    }
}

// login tooglepassword
function loginpassword() {
    const y = document.getElementById('mypassword')
    if (y.type === 'password') {
        y.type = 'text'
    } else {
        y.type = 'password'
    }
}

function submithandler(e) {
    e.preventDefault()
}

// copy text
function copytext() {
    var copyText = document.getElementById('myInput')

    copyText.select()
    copyText.setSelectionRange(0, 99999)

    navigator.clipboard.writeText(copyText.value)

    alert('Copied the text: ' + copyText.value)
}


// onload script   
function login() {
    document.getElementById("login_container").style.display = "none";
}
function logincontainer() {
    document.getElementById("login_container").style.display = "block";
}