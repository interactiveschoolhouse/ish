<?php
namespace ish;
    class Events {
        static function getUpcomingEvents() {
            try{
                $client = new \GuzzleHttp\Client();
                $response = $client->request('GET', AppSettings::WebApiServiceUrl . '/api/calendar');

                return json_decode($response->getBody(), false);
            }
            catch(\Exception $e) {
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