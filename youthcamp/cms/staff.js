function validateForm() {
    if(document.loginForm.username.value== "") {
        alert("Please enter your username.")
        return false;
    }
    if(document.loginForm.password.value== "") {
        alert("Please enter your password.")
        return false;
    }
}