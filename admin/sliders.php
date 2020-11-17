<?php require_once 'inc/header.php' ?>
<?php

use App\Classes\Sliders;

$slider = new Sliders();
$result = $slider->index();

?>

    <div class="row justify-content-between">

        <div> <h3>Manage Sliders</h3> </div>
        <div>
            <a href="add%20slider.php" class="btn btn-primary ">Add New Slider</a>
        </div>

    </div>
    <hr>


    <div class="table-responsive">
        <table class="table table-bordered" id="datatable">

            <thead>
                <tr>
                    <th>NO.</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Image</th>
                    <th>Time Limit</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sr = 1;
                while ($row1 = $result->fetch_assoc()){

                ?>
                    <tr>
                        <td><?= $sr ?></td>
                        <td><?= $row1['title'] ?></td>
                        <td><?= $row1['sub_title'] ?></td>
                        <td><img class=" image-preview" src="<?= $slider->base_url.'uploads/sliders/'. $row1['image'] ?>" alt="<?= $row1['title'] ?>"></td>
                        <td><?= $row1['start_date'].' - '.$row1['end_date'] ?></td>
                        <td><?= $row1['status'] == 1 ?'<span class="text-success">Active</span>':'<span class="text-danger">Inactive</span>' ?></td>
                        <td>a</td>
                    </tr>
                <?php
                    $sr++;
                }
                ?>
            </tbody>
        </table>
    </div>


<?php require_once 'inc/footer.php' ?>

