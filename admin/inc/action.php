<?php

header('content-type:application/json');

require_once '../../vendor/autoload.php';

use App\Classes\Sliders;

$sliders = new Sliders();

$data= [ 'error' => false ];


if (isset($_POST['action']) && $_POST['action'] == 'save-slider'){



    if(isset($_POST['title']) && isset($_POST['sub_title']) && isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['url']) && isset($_POST['status']) && !empty($_FILES['image']['name'])){

        $title = $_POST['title'];
        $sub_title = $_POST['sub_title'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $url = $_POST['url'];
        $status = $_POST['status'];

//        images upload
        $image = $_FILES['image'];

        $imageName = $image['name'];
        /** @var  $imageExe */
        $imageExe = explode('.' , $imageName);
        $imageExe = end($imageExe);

        $imageNameToStore = uniqid().rand(111111, 999999).'.'.$imageExe;

        $save = $sliders->save_slider($title , $sub_title , $start_date , $end_date , $url , $status , $imageNameToStore);
        if ($save){
            move_uploaded_file($image['tmp_name'] , '../../uploads/sliders/'.$imageNameToStore);
            $data['message'] = 'Slider Save Success';

        }else{
            $data['error'] = true;
            $data['message'] = 'Slider Save failed';
        }
    }else{

        $data['error'] = true;

        $title = $_POST['title'];
        $sub_title = $_POST['sub_title'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $url = $_POST['url'];
        $status = $_POST['status'];
        $image = $_FILES['image'];

        if ($title == ''){
            $data['message'] = $sliders->slider_error_message('title');
        }elseif($sub_title == ''){
            $data['message'] = $sliders->slider_error_message('sub title');
        }elseif($start_date == ''){
            $data['message'] = $sliders->slider_error_message('start date');
        }elseif($end_date == ''){
            $data['message'] = $sliders->slider_error_message('end date');
        }elseif($url == ''){
            $data['message'] = $sliders->slider_error_message('url');
        }elseif(empty($_FILES['image']['name'])){
            $data['message'] = 'Please select a image!';
        }elseif($status == ''){
            $data['message'] = $sliders->slider_error_message('status');
        }else{
            $data['message'] = 'Something Went Wrong!';
        }
    }

    echo json_encode($data);

}