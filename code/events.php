<?php
namespace ish;
    require_once 'vendor/autoload.php';
    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7\Request;

    class Events {
        static function getUpcomingEvents() {
            try{
                $client = new Client();
                $response = $client->request('GET', AppSettings::WebApiServiceUrl . '/api/calendar');

                return json_decode($response->getBody(), false);
            }
            catch(\Exception $e) {
//                echo "<div style='color:red'>ERROR loiading events!</div>";
                $errors = array(new EventError());
                return $errors;
            }

        }
    }

    class EventError {
        public $FormattedStartDate = "";
        public $FormattedTimeDuration = "";
        public $Title = "Events information temporarily unavailable";
        public $DescriptionLines = array();
        public $RegistrationAllowed = false;
    }
?>