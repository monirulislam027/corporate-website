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
                    $('#registerUser').html("loading.....").attr('disabled' , true);
                    $.ajax({
                        url:siteUrl+ 'admin/action.php',
                        method:'post' ,
                        data: registerForm.serialize() + '&action=register',
                        success:function (response) {

                            if (response=='ok'){
                                window.location = 'index.php';
                            }else{
                                $('#registerUser').html("Register").attr('disabled' , false);
                                $('#register-response-message').html(response);
                            }

                        } ,
                        error: function (response) {
                            console.log('Something went wrong!');

                        }
                    });
                }
            }
        }

    });


    $('#signInBtn').click(function (e) {
        if (loginForm[0].checkValidity()) {
            e.preventDefault();

            if ($('#loginEmail').val() == ''){
                $('#loginEmail').addClass('is-invalid');
            }else{
                $('#loginEmail').removeClass('is-invalid');
            }

            if ($('#loginPassword').val() == ''){
                $('#loginPassword').addClass('is-invalid');
            }else{
                $('#loginPassword').removeClass('is-invalid');
            }

            if ($('#loginEmail').val() != '' && $('#loginPassword').val() != ''){
                $('#signInBtn').html("Processing.....").attr('disabled' , true);
                $.ajax({
                    url:siteUrl+ 'admin/action.php',
                    method:'post' ,
                    data: loginForm.serialize() + '&action=login',
                    success:function (response) {
                        if (response=='ok'){
                            window.location = 'index.php';
                        }else{
                            $('#signInBtn').html("Sign In").attr('disabled' , false);
                            $('#login-response-message').html(response);
                        }

                    } ,
                    error: function (response) {
                        console.log('Something went wrong!');

                    }
                });
            }
        }
    });


    $('#resetPasswordBtn').click(function (e) {
       if ($('#forgotten-password-form')[0].checkValidity()){
           e.preventDefault();
           $('#resetPasswordBtn').html("Processing....").attr('disabled' , true);
           if ($('#resetEmail').val() == ''){
               $('#resetEmail').addClass('is-invalid');
               $('#resetPasswordBtn').html("Reset Password").attr('disabled' , false);
           }else{
               $('#resetEmail').removeClass('is-invalid');

               $.ajax({
                   url:siteUrl+ 'admin/action.php',
                   method:'post' ,
                   data: $('#forgotten-password-form').serialize() + '&action=reset-password',
                   success:function (response) {
                       $('#resetPasswordBtn').html("Reset Password").attr('disabled' , false);
                        $('#resetPasswordResponse').html(response);
                   } ,
                   error: function (response) {
                       console.log('Something went wrong!');

                   }
               });
           }





       }

    });


    $('#setNewPasswordBtn').click(function (e) {
        if ($('#new-password-form')[0].checkValidity()){
            e.preventDefault();

            if ($('#new_password').val() ==  ''){
                $('#new_password').addClass('is-invalid');
            }else {
                $('#new_password').removeClass('is-invalid');
            }

            if ($('#new_confirm_password').val() ==  ''){
                $('#new_confirm_password').addClass('is-invalid');

            }else {
                $('#new_confirm_password').removeClass('is-invalid');
            }

            if ($('#new_password').val() !=  '' && $('#new_confirm_password').val() !=  '' ){
                if ($('#new_password').val() !== $('#new_confirm_password').val()){
                    $('#password_error').removeClass('d-none');
                }else {

                    $('#password_error').addClass('d-none');

                    $('#setNewPasswordBtn').html("Processing....").attr('disabled' , true);

                    $.ajax({
                        url:siteUrl+ 'admin/action.php',
                        method:'post' ,
                        data: $('#new-password-form').serialize() + '&action=update-password',
                        success:function (response) {
                            $('#setNewPasswordBtn').html("Reset Password").attr('disabled' , false);
                            if (response == 'ok'){
                                $('#resetPasswordResponse').html(response);
                                // window.location = 'index.php'
                            }else {
                                $('#resetPasswordResponse').html(response);
                            }

                        } ,
                        error: function (response) {
                            console.log('Something went wrong!');

                        }
                    });

                }
            }

        }

    });


});