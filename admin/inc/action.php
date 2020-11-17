<?php

header('content-type:application/json');

require_once '../../vendor/autoload.php';

use App\Classes\Sliders;

$sliders = new Sliders();

$data= [ 'error' => false ];


if (isset($_POST['action']) && $_POST['action'] == 'save-slider'){

    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $url = $_POST['url'];
    $status = $_POST['status'];


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

    echo json_encode($data);
}