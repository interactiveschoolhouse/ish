<?php
namespace ish;
    require_once 'vendor/autoload.php';
    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7\Request;

    class Events {
        static function getUpcomingEvents() {
            $client = new Client();
        
            $response = $client->request('GET', AppSettings::WebApiServiceUrl . '/api/calendar');

            return json_decode($response->getBody(), false);
        }
    }
?>