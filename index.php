<?php
    require 'vendor/autoload.php';
    require 'controller/HomeController.php';

    Kint::$enabled_mode = false;
    Kint::dump($GLOBALS);

    try {
        if (isset($_GET['page'])) {

            $page = $_GET['page'];

            switch ($page) {
                case 'download':
                    if (isset($_GET['id'],$_GET['name'],$_GET['ki'],$_GET['maxKi'],$_GET['race'],$_GET['gender'],$_GET['affiliation'])){
                    $id = $_GET['id'];
                    $name = $_GET['name'];
                    $ki = $_GET['ki'];
                    $maxKi = $_GET['maxKi'];
                    $race = $_GET['race'];
                    $gender = $_GET['gender'];
                    $affiliation = $_GET['affiliation'];

                    $downloader = new HomeController();
                    $download = $downloader->download($id, $name, $ki, $maxKi, $race, $gender, $affiliation);
                    } else{
                        throw new Exception("erreur lors de l'export des données");
                    }

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