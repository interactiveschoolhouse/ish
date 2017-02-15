<?php
    require 'vendor/autoload.php';
    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7\Request;

    $client = new Client();
   
    $response = $client->request('GET','http://services.interactiveschoolhouse.com/api/calendar');
    
    echo $response->getBody();
    echo "<div>";
    echo $response->getStatusCode();
    echo "</div>";
    echo "<div>";
    echo $response->getHeader('content-type');
    echo "</div>";

    $data = json_decode($response->getBody(), false);
    //echo $data[0]->Title;
    echo "<div>";
    var_dump($data);
    echo "</div>";

    foreach ($data as $event) {
        printf("<div>%s</div>", $event->Title);
        printf("<div>%s</div>", $event->Description);
    }

    echo "<div>";
    echo $data[0]->Title;
    echo $data[0]->Description;
    echo "</div>";
?>