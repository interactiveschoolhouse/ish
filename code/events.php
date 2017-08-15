<?php
namespace ish;
    class Events {
        static function getEvent($id) {
            try{
                $client = new \GuzzleHttp\Client();
                $response = $client->request('GET', AppSettings::WebApiServiceUrl . '/api/calendar/' . $id,
                    [ 
                        'headers'  => ['api-key' => AppSettings::ApiKey] 
                    ]);

                return json_decode($response->getBody(), false);
            }
            catch(\Exception $e) {
                $errors = array(new EventError());
                return $errors;
            }

        }

        static function getUpcomingEvents() {
            try{
                $client = new \GuzzleHttp\Client();
                $response = $client->request('GET', AppSettings::WebApiServiceUrl . '/api/calendar',
                    [ 
                        'headers'  => ['api-key' => AppSettings::ApiKey] 
                    ]);

                return json_decode($response->getBody(), false);
            }
            catch(\Exception $e) {
                $errors = array(new EventError());
                return $errors;
            }

        }

        static function getEventsSummary() {
            try{
                $client = new \GuzzleHttp\Client();
                $response = $client->request('GET', AppSettings::WebApiServiceUrl . '/api/calendar/filtered?numToTake=32&registerEventsOnly=false',
                    [ 
                        'headers'  => ['api-key' => AppSettings::ApiKey] 
                    ]);

                return json_decode($response->getBody(), false);
            }
            catch(\Exception $e) {
                $errors = array(new EventError());
                return $errors;
            }
        }

        static function getWorkshopEventsSummary() {
            try{
                $client = new \GuzzleHttp\Client();
                $response = $client->request('GET', AppSettings::WebApiServiceUrl . '/api/calendar/filtered?numToTake=32&registerEventsOnly=true',
                    [ 
                        'headers'  => ['api-key' => AppSettings::ApiKey] 
                    ]);

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