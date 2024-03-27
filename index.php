<?php

    require 'controller/HomeController.php';

    try {
        if (isset($_GET['page'])) {

            $page = $_GET['page'];

            switch ($page) {
                case '':

                break;
                default:
                    $home = new HomeController();
                    $test = $home->home();
                break;
            }
        }
        else {
            $home = new HomeController();
            $test = $home->home();
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }