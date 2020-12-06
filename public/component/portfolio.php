<?php

$work_menus = $site->work_menus();
$work_items = $site->work_items();

?>


<div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php while ($menu = $work_menus->fetch_assoc()) { ?>

                <li data-filter=".<?= $menu['slug'] ?>"><?= $menu['name'] ?></li>

            <?php } ?>

        </ul>
    </div>
</div>

<div class="row portfolio-container">


    <?php
    if ($work_items->num_rows > 0){
        while ($item = $work_items->fetch_assoc()){

            ?>


            <div class="col-lg-4 col-md-6 portfolio-item <?= $item['slug'] ?>">
                <div class="portfolio-wrap">
                    <img src="uploads/works/<?= $item['image'] ?>" class="img-fluid"
                         alt="<?= $item['title'] ?>">
                    <div class="portfolio-info">
                        <h4><?= $item['title'] ?></h4>
                        <p><?= $item['name'] ?></p>

                    </div>
                </div>
            </div>

        <?php }
    } ?>


</div>