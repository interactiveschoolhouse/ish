<?php
echo 'openssl: ',  extension_loaded  ('openssl') ? 'yes':'no', "\n";

phpinfo();

require_once "vendor/autoload.php";

$api_key = "AIzaSyCOZ0S51CJtGD_U5955_X76l7Gh0Byhw98";
$client = new Google_Client();
$client->setDeveloperKey($api_key);
$service = new Google_Service_Calendar($client);
$calendarId = "va4gtek39plv0k88b449bngvo0@group.calendar.google.com";
$optParams = array(
  'maxResults' => 4,
  'orderBy' => 'startTime',
  'singleEvents' => TRUE,
  'timeMin' => date('c'),
);
$results = $service->events->listEvents($calendarId, $optParams);

if (count($results->getItems()) == 0) {
  echo "No upcoming events found.\n";
} else {
  echo "<div>Upcoming events:</div>";
  foreach ($results->getItems() as $event) {
    $start = $event->start->dateTime;
    if (empty($start)) {
      $start = $event->start->date;
    }
    printf("<div>%s (%s)</div>", $event->getSummary(), $start);
  }
}

?>