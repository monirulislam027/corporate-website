$(document).ready(function () {
    
    const siteUrl = "http://dcw.test/";
    const loginFormBox = $('#login-form-box');
    const registerFormBox = $('#register-form-box');
    const forgetFormBox = $('#forgotten-password-form-box');

    $('#showSignUpForm').click(function () {
        loginFormBox.hide();
        forgetFormBox.hide();
        registerFormBox.show();
    });
    $('.showLoginForm').click(function () {
        forgetFormBox.hide();
        registerFormBox.hide();
        loginFormBox.show();
    });
    $('#showForgotForm').click(function () {
        registerFormBox.hide();
        loginFormBox.hide();
        forgetFormBox.show();
    });

    const loginForm = $('#login-form');
    const registerForm = $('#register-form');
    const forgetForm = $('#forgotten-password-form');


//       register form

    $('#registerUser').click(function (e) {

        if (registerForm[0].checkValidity()){
            e.preventDefault();
            $('#registerUser').html("loading.....").attr('disabled' , true);

            if ($('#name').val() == ''){
                $('#name').addClass('is-invalid');
            }else {
                $('#name').removeClass('is-invalid');
            }

            if ($('#r_email').val() == ''){
                $('#r_email').addClass('is-invalid');
            }else {
                $('#r_email').removeClass('is-invalid');
            }

            if ($('#r_password').val() == ''){
                $('#r_password').addClass('is-invalid');
            }else {
                $('#r_password').removeClass('is-invalid');
            }

            if ($('#c_password').val() == ''){
                $('#c_password').addClass('is-invalid');
            }else {
                $('#c_password').removeClass('is-invalid');
            }

            if($('#r_password').val() != '' && $('#c_password').val() != '' && $('#r_password').val() !== $('#c_password').val() ){
                $('#confirm_invalid').removeClass('d-none');
            }else {
                $('#confirm_invalid').addClass('d-none');
            }

            if ($('#r_password').val() === $('#c_password').val()){
                if ($('#r_email').val() != '' && $('#name').val() != ''){
                    $.ajax({
                        url:siteUrl+ 'admin/action.php',
                        method:'post' ,
                        data: registerForm.serialize() + '&action=register',
                        success:function (response) {
                            console.log(response)
                        }
                    });
                }
            }

            setTimeout(function () {
                $('#registerUser').html("Register").attr('disabled' , false);
            } , 2000)
        }

    });

    
});