<?php
require 'model/CharacterManager.php';

    class HomeController{

        function home(){
            

            $characters = new CharacterManager;
            $chars = $characters->client();
            if($chars->getStatusCode() == 200){
                $body = $chars->getBody()->getContents();
                $data = json_decode($body, true);
            }else{
                echo"erreur lors de la connexion à l'api";
            }
            require "view/HomeView.php";

        }

        function download($id, $name, $ki, $maxKi, $race, $gender, $affiliation){
            $characters = new CharacterManager;
            $downloading = $characters->pdf($id, $name, $ki, $maxKi, $race, $gender, $affiliation);


        }
    }

