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
        format:"dd MM yyyy",
        autoclose: true ,
        todayHighlight: true
    });

    $('#create-form').on('submit' , function (event) {


        // if ($('#create-form')[0].checkValidity()){

            event.preventDefault();

            //
            // if ($('#title').val() == ''){
            //     $('#title').addClass('is-invalid');
            // }else {
            //     $('#title').removeClass('is-invalid');
            // }
            //
            // if ($('#sub_title').val() == ''){
            //     $('#sub_title').addClass('is-invalid');
            // }else {
            //     $('#sub_title').removeClass('is-invalid');
            // }
            //
            // if ($('#start_date').val() == ''){
            //     $('#start_date').addClass('is-invalid');
            // }else {
            //     $('#start_date').removeClass('is-invalid');
            // }
            //
            // if ($('#end_date').val() == ''){
            //     $('#end_date').addClass('is-invalid');
            // }else {
            //     $('#end_date').removeClass('is-invalid');
            // }
            //
            // if ($('#url').val() == ''){
            //     $('#url').addClass('is-invalid');
            // }else {
            //     $('#url').removeClass('is-invalid');
            // }

            let formData = new FormData(this);
            formData.append('action' , $(this).data('url'));

            // if ($('#title').val() != '' && $('#sub_title').val() != ''  && $('#start_date').val() != ''   && $('#end_date').val() != ''   && $('#url').val() != '' ){
            //     $('.loader').show();
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
                            toastr.success(response.message , {timeOut: 3000})
                            setTimeout(function () {
                                window.location = 'sliders.php'

                            } , 3500);
                        }else {
                            toastr.error(response.message)
                            console.log(response);
                        }
                        $('.loader').hide();
                    }
                });

        //     }
        //
        //
        // }






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
