<?php
$team = $site->team_members();
?>

<div class="row">

    <?php

    if ($team->num_rows > 0) {
        while ($member = $team->fetch_assoc()) {
            ?>
            <div class="col-lg-6 my-3">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="uploads/team/<?= $member['image'] ?>" class="img-fluid"
                                          alt="<?= $member['name'] ?>"></div>
                    <div class="member-info">
                        <h4><?= $member['name'] ?></h4>
                        <span><?= $member['role'] ?></span>
                        <p><?= $member['short_desc'] ?></p>
                        <div class="social">
                            <?= $member['twitter'] != '' ? '<a href="' . $member['twitter'] . '"><i class="ri-twitter-fill"></i></a>' : '' ?>
                            <?= $member['facebook'] != '' ? '<a href="' . $member['facebook'] . '"><i class="ri-facebook-fill"></i></a>' : '' ?>
                            <?= $member['instagram'] != '' ? '<a href="' . $member['instagram'] . '"><i class="ri-instagram-fill"></i></a>' : '' ?>
                            <?= $member['linkedIn'] != '' ? '<a href="' . $member['linkedIn'] . '"><i class="ri-linkedin-fill"></i></a>' : '' ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    } ?>


</div>