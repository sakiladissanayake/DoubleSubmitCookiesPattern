function validateUser() {
    var username = document.forms["loginForm"]["username"].value;
    var password = document.forms["loginForm"]["password"].value;

    if(username == "user" || password == "user") {
        return true;
    } else {
        alert("Wrong Credentials!!!");
        return false;
    }
}