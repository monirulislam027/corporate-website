<?php


if (!isset($_GET['page'])) {
    require_once './public/index.php';
} else if (isset($_GET['page']) && $_GET['page'] == 'index' || $_GET['page'] == 'home') {
    require_once './public/index.php';
} else if (isset($_GET['page']) && $_GET['page'] == 'about-us') {
    require_once './public/about-us.php';
} else if (isset($_GET['page']) && $_GET['page'] == 'team') {
    require_once './public/team.php';
} else if (isset($_GET['page']) && $_GET['page'] == 'testimonial') {
    require_once './public/testimonial.php';
} else if (isset($_GET['page']) && $_GET['page'] == 'services') {
    require_once './public/services.php';
} else if (isset($_GET['page']) && $_GET['page'] == 'portfolio') {
    require_once './public/portfolio.php';
} else if (isset($_GET['page']) && $_GET['page'] == 'contact') {
    require_once './public/contact.php';
} else {
    require_once './public/not-found.php';
}

