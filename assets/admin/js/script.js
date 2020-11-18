$(document).ready(function () {

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
        format:"dd M yyyy",
        autoclose: true ,
        todayHighlight: true
    });

    // create form
    $('#create-form').on('submit' , function (event) {


        if ($('#create-form')[0].checkValidity()){

            event.preventDefault();


            if ($('#title').val() == ''){
                $('#title').addClass('is-invalid');
            }else {
                $('#title').removeClass('is-invalid');
            }

            if ($('#sub_title').val() == ''){
                $('#sub_title').addClass('is-invalid');
            }else {
                $('#sub_title').removeClass('is-invalid');
            }

            if ($('#start_date').val() == ''){
                $('#start_date').addClass('is-invalid');
            }else {
                $('#start_date').removeClass('is-invalid');
            }

            if ($('#end_date').val() == ''){
                $('#end_date').addClass('is-invalid');
            }else {
                $('#end_date').removeClass('is-invalid');
            }

            if ($('#url').val() == ''){
                $('#url').addClass('is-invalid');
            }else {
                $('#url').removeClass('is-invalid');
            }

            let formData = new FormData(this);
            formData.append('action' , $(this).data('url'));

            if ($('#title').val() != '' && $('#sub_title').val() != ''  && $('#start_date').val() != ''   && $('#end_date').val() != ''   && $('#url').val() != '' ){
                $('.loader').show();
                $.ajax({
                    url:'http://dcw.test/admin/inc/action.php' ,
                    method:'post' ,
                    processData: false,
                    contentType:false,
                    dataType:'json',
                    data: formData,
                    success: function (response) {

                        if (! response.error){
                            $('#create-form')[0].reset();
                            toastr.success(response.message , {timeOut: 3000});
                            setTimeout(function () {
                                window.location = 'sliders.php'

                            } , 3500);
                        }else {
                            toastr.error(response.message)
                        }
                        $('.loader').hide();
                    }
                });

            }
        }

    })


    //  slider active
    $('.slider_active').on('click' , function () {

        let id = $(this).data('url-id');
        $('.loader').show();
        $.ajax({
            url:'http://dcw.test/admin/inc/action.php' ,
            method:'post' ,
            data: { 'id':id , 'action': 'slider-active' },
            success: function (response) {
                $('.loader').hide();
                if (! response.error){
                    toastr.success(response.message , {timeOut: 3000});
                    setTimeout(function () {
                        location.reload();
                    } , 3500);
                }else {
                    toastr.error(response.message)
                }

            }
        });


    });

    //  slider inactive
    $('.slider_inactive').on('click',function () {

        let id = $(this).data('url-id');
        $('.loader').show();
        $.ajax({
            url:'http://dcw.test/admin/inc/action.php' ,
            method:'post' ,
            data: { 'id':id , 'action': 'slider-inactive' },
            success: function (response) {
                $('.loader').hide();
                if (! response.error){
                    toastr.success(response.message , {timeOut: 1000});
                    setTimeout(function () {
                       location.reload();
                    } , 1300);
                }else {
                    toastr.error(response.message)
                }

            }
        });


    });

//    remove slider
    $('.remove_slider').on('click' ,function () {

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

                let id = $(this).data('url-id');

                $('.loader').show();
                $.ajax({
                    url:'http://dcw.test/admin/inc/action.php' ,
                    method:'post' ,
                    data: { 'id':id , 'action': 'slider-delete' },
                    success: function (response) {
                        $('.loader').hide();
                        if (! response.error){
                            Swal.fire(
                                'Deleted!',
                                response.message,
                                'success'
                            )
                            $('.remove-row-' + id).hide();
                        }else {
                            Swal.fire(
                                'Deleted!',
                                response.message,
                                'error'
                            )
                        }

                    }
                });
            }
        })








    })

});

// image preview

function imagePreview(file , targetBlock){

    if (file.files && file.files[0]){
        const reader = new FileReader();
        reader.onload = function (event) {
            $(targetBlock).attr('src' , event.target.result)
        }
        reader.readAsDataURL(file.files[0]);
    }

}
