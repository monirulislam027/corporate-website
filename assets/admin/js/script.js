$(document).ready(function () {
    $('#datatable').dataTable();


    // date picker
    $('.datepicker').datepicker({
        format:"yyyy-mm-dd",
        autoclose: true ,
        todayHighlight: true
    });

    $('#create-form').on('submit' , function (event) {
        event.preventDefault();
        $('.loader').show();

        let formData = new FormData(this);
        formData.append('action' , $(this).data('url'));

        $.ajax({
            url:'http://dcw.test/admin/inc/action.php' ,
            method:'post' ,
            processData: false,
            contentType:false,
            dataType:'json',
            data: formData,
            success: function (response) {
                console.log('pl');
                $('.loader').hide();
            },
            error:function () {
                console.log('error');
                $('.loader').hide();
            }
        });

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
