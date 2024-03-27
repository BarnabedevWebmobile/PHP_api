<?php 

    use GuzzleHttp\Client;
    use Dompdf\Dompdf;
    class CharacterManager{
        function client(){

            try{
                $client = new Client();
                $response = $client->request('GET', 'https://dragonball-api.com/api/characters',['query'=> ['lang'=> 'fr','limit'=> '100']]);
            }
            catch(ClientException $e){
                echo 'error at : '. $e;
            }
            if($response->getStatusCode() == 200){
                return $response;
            }else{
                echo "erreur lors de la connexion à l'api";
            }
        }
        function pdf($id, $name, $ki, $maxKi, $race, $gender, $affiliation){
            try{

                $html = '<p>' .$id.'<p><h1>'.$name.'<h1> <br/> <ul style="font-size:16px;"> <li>'.$ki.'</li> <li> '.$maxKi.'</li>
                <li> '.$race.'</li><li>'.$gender.'</li> <li> '.$affiliation.' </li> </ul>';
                $dompdf = new Dompdf();
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream();
            }
            catch(ClientException $e){
                echo ''. $e;
            }
        }
    }