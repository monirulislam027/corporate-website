$(document).ready(function () {

    const baseUrl = 'http://dcw.test';
    //toaster message option
    toastr.options = {
        "newestOnTop": true,
        "progressBar": true,
        "onclick": null,
        "timeOut": "3000"
    }

    // data table
    $('#datatable').dataTable();
    // date picker
    $('.datepicker').datepicker({
        format: "dd M yyyy",
        autoclose: true,
        todayHighlight: true
    });

    // create form
    $('#slider-form').on('submit', function (event) {


        if ($('#slider-form')[0].checkValidity()) {

            event.preventDefault();


            if ($('#title').val() == '') {
                $('#title').addClass('is-invalid');
            } else {
                $('#title').removeClass('is-invalid');
            }

            if ($('#sub_title').val() == '') {
                $('#sub_title').addClass('is-invalid');
            } else {
                $('#sub_title').removeClass('is-invalid');
            }

            if ($('#start_date').val() == '') {
                $('#start_date').addClass('is-invalid');
            } else {
                $('#start_date').removeClass('is-invalid');
            }

            if ($('#end_date').val() == '') {
                $('#end_date').addClass('is-invalid');
            } else {
                $('#end_date').removeClass('is-invalid');
            }

            if ($('#url').val() == '') {
                $('#url').addClass('is-invalid');
            } else {
                $('#url').removeClass('is-invalid');
            }

            let formData = new FormData(this);
            formData.append('action', $(this).data('url'));

            if ($('#title').val() != '' && $('#sub_title').val() !== '' && $('#start_date').val() !== '' && $('#end_date').val() != '' && $('#url').val() != '') {
                $('.loader').show();
                $.ajax({
                    url: 'http://dcw.test/admin/inc/action.php',
                    method: 'post',
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    data: formData,
                    success: function (response) {
                        $('.loader').hide();
                        if (!response.error) {
                            toastr.success(response.message, {timeOut: 3000});
                            setTimeout(function () {
                                window.location = 'sliders.php'

                            }, 3500);
                        } else {
                            toastr.error(response.message)
                        }

                    }
                });

            }
        }

    });

//    remove slider
    $('.remove_item').on('click', function () {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                let action = $(this).data('action');
                let id = $(this).data('url-id');
                // $('.loader').show();
                $.ajax({
                    url: 'http://dcw.test/admin/inc/action.php',
                    method: 'post',
                    data: {'id': id, action: action},
                    success: function (response) {
                        $('.loader').hide();
                        if (!response.error) {
                            Swal.fire(
                                'Deleted!',
                                response.message,
                                'success'
                            )
                            console.log('.remove-row-' + id);
                            $('#remove-row-' + id ).remove();
                        } else {

                            Swal.fire(
                                'Error!',
                                response.message,
                                'error'
                            )
                        }

                    }
                });
            }
        })


    });


    $('body').on('change', '.toggle-button', function () {

        $('.loader').show();
        let status = $(this).prop('checked') ? 1 : 0;
        let id = $(this).data('id');
        let action = $(this).data('action');

        $.ajax({
            url: 'http://dcw.test/admin/inc/action.php',
            method: 'post',
            data: {id: id, status: status, action: action},
            success: function (response) {
                $('.loader').hide();

            }
        });

    });


//    works menu form

    // create form
    $('#works-menu-form').on('submit', function (event) {


        if ($('#works-menu-form')[0].checkValidity()) {

            event.preventDefault();

            let action = $(this).data('url');

            $('.loader').show();
            $.ajax({
                url: 'http://dcw.test/admin/inc/action.php',
                method: 'post',
                data: $('#works-menu-form').serialize() + '&action=' + action,
                success: function (response) {
                    $('.loader').hide();
                    if (!response.error) {

                        Swal.fire({
                            title: 'Successful!',
                            text: response.message,
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Go Back'
                        }).then((result) => {

                            if (result.isConfirmed) {
                                window.location = 'works-menu.php';
                            }

                        });
                    } else {
                        toastr.error(response.message)
                    }

                }
            });


        }
    });

    /*
    form with image
     */
    // create form
    $('#image-form').on('submit', function (event) {


        if ($('#image-form')[0].checkValidity()) {

            event.preventDefault();
            let formData = new FormData(this);
            formData.append('action', $(this).data('url'));

            $('.loader').show();
            $.ajax({
                url: 'http://dcw.test/admin/inc/action.php',
                method: 'post',
                processData: false,
                contentType: false,
                dataType: 'json',
                data: formData,
                success: function (response) {
                    $('.loader').hide();
                    if (!response.error) {

                        Swal.fire({
                            title: 'Successful!',
                            text: response.message,
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Go Back'
                        }).then((result) => {

                            if (result.isConfirmed) {
                                window.location = response.r_url;
                            }

                        });


                    } else {
                        toastr.error(response.message)
                    }

                },
                error: function (response) {
                    $('.loader').hide();
                    console.log('error');
                }
            });

        }


    });


//    jquery end
});

// image preview

function imagePreview(file, targetBlock) {

    if (file.files && file.files[0]) {
        const reader = new FileReader();
        reader.onload = function (event) {
            $(targetBlock).attr('src', event.target.result)
        }
        reader.readAsDataURL(file.files[0]);
    }

}
