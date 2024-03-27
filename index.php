<?php

require 'controller/HomeController.php';

if (isset($_GET['page'])) {

    $page = $_GET['page'];

    switch ($page) {
        case 'home':
            $home = new HomeController();
            $test = $home->home();
        break;
    }

}