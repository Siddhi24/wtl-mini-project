function validateForm() {
    var username = document.forms[0]["username"].value;
    var email = document.forms[0]["email"].value;
    var password = document.forms[0]["password"].value;
    var confirm_password = document.forms[0]["confirm_password"].value;

    if (username == "") {
        alert("Please enter your username.");
        return false;
    }

    if (username.length < 5 && username.length > 8)
    {
        alert("Username must be between 6-8 characters, Please Try Again");
    }

    // function name1() {
    //     var x = document.getElementById("username");
    //     if ((x.value < 5) || (x.value > 8))
    //     {
    //       alert("Value should be greater than 5 and less than 8");
    //     }
    //   }

    if (email == "") {
        alert("Please enter your email.");
        return false;
    }

    if (password == "") {
        alert("Please enter your password.");
        return false;
    }

    if(password.value.length <=8 && password.value.length >=12)
    {
        alert("Password length should be between 8-12 characters.")
    }

    if (confirm_password == "") {
        alert("Please confirm your password.");
        return false;
    }

    if (password != confirm_password) {
        alert("Passwords do not match.");
        return false;
    }

    alert("Registration Successful!");
    return true;
}
