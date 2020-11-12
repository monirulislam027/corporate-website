$(document).ready(function () {
    
    
    const loginForm = $('#login-form-box');
    const registerForm = $('#register-form-box');
    const forgetForm = $('#forgotten-password-form-box');

    $('#showSignUpForm').click(function () {
        loginForm.hide();
        forgetForm.hide();
        registerForm.show();
    });

    $('.showLoginForm').click(function () {
        forgetForm.hide();
        registerForm.hide();
        loginForm.show();
    });


    $('#showForgotForm').click(function () {
        registerForm.hide();
        loginForm.hide();
        forgetForm.show();
    });

    
    
});