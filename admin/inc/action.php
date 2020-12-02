<?php

header('content-type:application/json');

require_once '../../vendor/autoload.php';

use App\Classes\Sliders;
use App\Classes\Works;

$sliders = new Sliders();
$works = new Works();

$data = ['error' => false];


if (isset($_POST['action']) && $_POST['action'] == 'save-slider') {

    if (isset($_POST['title']) && isset($_POST['sub_title']) && isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['url']) && isset($_POST['status']) && !empty($_FILES['image']['name'])) {

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
        $imageExe = explode('.', $imageName);
        $imageExe = end($imageExe);

        $imageNameToStore = uniqid() . rand(111111, 999999) . '.' . $imageExe;

        $save = $sliders->save_slider($title, $sub_title, $start_date, $end_date, $url, $status, $imageNameToStore);
        if ($save) {
            move_uploaded_file($image['tmp_name'], '../../uploads/sliders/' . $imageNameToStore);
            $data['message'] = 'Slider Save Success';

        } else {
            $data['error'] = true;
            $data['message'] = 'Slider Save failed';
        }
    } else {

        $data['error'] = true;

        $title = $_POST['title'];
        $sub_title = $_POST['sub_title'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $url = $_POST['url'];
        $status = $_POST['status'];
        $image = $_FILES['image'];

        if ($title == '') {
            $data['message'] = $sliders->slider_error_message('title');
        } elseif ($sub_title == '') {
            $data['message'] = $sliders->slider_error_message('sub title');
        } elseif ($start_date == '') {
            $data['message'] = $sliders->slider_error_message('start date');
        } elseif ($end_date == '') {
            $data['message'] = $sliders->slider_error_message('end date');
        } elseif ($url == '') {
            $data['message'] = $sliders->slider_error_message('url');
        } elseif (empty($_FILES['image']['name'])) {
            $data['message'] = 'Please select a image!';
        } elseif ($status == '') {
            $data['message'] = $sliders->slider_error_message('status');
        } else {
            $data['message'] = 'Something Went Wrong!';
        }
    }

    echo json_encode($data);

}

if (isset($_POST['action']) && $_POST['action'] == 'slider-delete') {


    $id = (int)($_POST['id']);

    $slider = $sliders->slider($id);
    $result = $sliders->slider_delete($id);

    if ($result) {

        $slider_row = $slider->fetch_assoc();

        unlink('../../uploads/sliders/' . $slider_row['image']);

        $data['message'] = 'Slider deleted successfully!';

    } else {
        $data['error'] = 'true';
        $data['message'] = 'Slider deleted failed!';
    }

    echo json_encode($data);

}

if (isset($_POST['action']) && $_POST['action'] == 'update-slider') {

    if (isset($_POST['slider_data']) && isset($_POST['title']) && isset($_POST['sub_title']) && isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['url']) && isset($_POST['status'])) {

        $title = $_POST['title'];
        $sub_title = $_POST['sub_title'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $url = $_POST['url'];
        $status = $_POST['status'];

//        slider id
        $id = base64_decode($_POST['slider_data']);
        $id = (int)($id);

        if ($sliders->slider_find($id)) {

            // slider update with id;

            if ($_FILES['image']['name']) {

                $image = $_FILES['image'];

                $imageName = $image['name'];
                /** @var  $imageExe */
                $imageExe = explode('.', $imageName);
                $imageExe = end($imageExe);

                $image_name = uniqid() . rand(111111, 999999) . '.' . $imageExe;

                $old_image_file = '../../uploads/sliders/' . $sliders->slider_find($id)['image'];
                file_exists($old_image_file) ? unlink($old_image_file):false;
            }
            else{
                $image_name = $sliders->slider_find($id)['image'];
            }

            $update = $sliders->slider_update($title, $sub_title, $start_date, $end_date, $url, $status, $image_name ,  $id);

            if ($update) {
                $data['message'] = 'Slider updated successfully!';
                $_FILES['image']['name'] ? move_uploaded_file($image['tmp_name'], '../../uploads/sliders/' . $image_name):null;

            } else {
                $data['error'] = 'true';
                $data['message'] = 'Slider updated failed!';
            }

        }

        echo json_encode($data);

//        images upload


    } else {

        $data['error'] = true;

        $title = $_POST['title'];
        $sub_title = $_POST['sub_title'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $url = $_POST['url'];
        $status = $_POST['status'];
        $image = $_FILES['image'];

        if ($title == '') {
            $data['message'] = $sliders->slider_error_message('title');
        } elseif ($sub_title == '') {
            $data['message'] = $sliders->slider_error_message('sub title');
        } elseif ($start_date == '') {
            $data['message'] = $sliders->slider_error_message('start date');
        } elseif ($end_date == '') {
            $data['message'] = $sliders->slider_error_message('end date');
        } elseif ($url == '') {
            $data['message'] = $sliders->slider_error_message('url');
        } elseif ($status == '') {
            $data['message'] = $sliders->slider_error_message('status');
        } else {
            $data['message'] = 'Something Went Wrong!';
        }
    }

    echo json_encode($data);


}


// slider update
if (isset($_POST['action']) && $_POST['action'] == 'slider-status-change') {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $status_update = $sliders->slider_status_update($id , $status);

    if ($status_update) {
        $data['message'] = 'Status updated successfully!';
    } else {
        $data['error'] = 'true';
        $data['message'] = 'Status updated failed!';
    }
    echo json_encode($data);

}

if (isset($_POST['action']) && $_POST['action'] == 'add-work-menu') {

    if (isset($_POST['name']) && $_POST['name'] != '' && isset($_POST['status']) ){
        $name = $_POST['name'];
        $status = $_POST['status'];


        $add_menu = $works->save_menu($name , $status);


        if ($add_menu) {
            $data['message'] = 'Works added successfully!';
        } else {
            $data['error'] = 'true';
            $data['message'] = 'Works added failed!';
        }
    }else{
        $data['error'] = 'true';
        $data['message'] = $works->error_message('name');
    }

    echo json_encode($data);

}

// work menu status update
if (isset($_POST['action']) && $_POST['action'] == 'works-menu-status') {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $status_update = $works->works_status_update($id , $status);

    if ($status_update) {
        $data['message'] = 'Status updated successfully!';
    } else {
        $data['error'] = 'true';
        $data['message'] = 'Status updated failed!';
    }
    echo json_encode($data);

}

// work menu update
if (isset($_POST['action']) && $_POST['action'] == 'update-work-menu'){


    if (isset($_POST['name']) && $_POST['name'] != '' && isset($_POST['status']) && isset($_POST['menu_id']) ){
        $name = $_POST['name'];
        $status = $_POST['status'];

        $id = $_POST['menu_id'];
        $id = base64_decode($id);
        $id = (int)$id;

        $add_menu = $works->work_menu_update($name , $status ,$id);


        if ($add_menu) {
            $data['message'] = 'Works updated successfully!';
        } else {
            $data['error'] = 'true';
            $data['message'] = 'Works updated failed!';
        }
    }else{
        $data['error'] = 'true';
        $data['message'] = $works->error_message('name');
    }

    echo json_encode($data);

}

if (isset($_POST['action']) && $_POST['action'] == 'works-menu-delete') {

    $id = (int) $_POST['id'];

    $delete = $works->works_menu_delete($id);

    if ($delete) {
        $data['message'] = 'Slider deleted successfully!';
    } else {
        $data['error'] = 'true';
        $data['message'] = 'Slider deleted failed!';
    }

    echo json_encode($data);

}