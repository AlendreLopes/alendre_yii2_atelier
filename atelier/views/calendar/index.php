<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
use Google\Client;
use Google\Service\Calendar;
?>
<br>
<br>

<br>
<br>

<div class="container text-center">
    <div class="container">
        <h1>Google Calendar</h1>
        <br>
        <?php
            // Print the next 10 events on the user's calendar.
            try{
                $calendarId = 'primary';
                $optParams = array(
                    'maxResults' => 10,
                    'orderBy' => 'startTime',
                    'singleEvents' => true,
                    'timeMin' => date('c'),
                );
                $results = $service->events->listEvents($calendarId, $optParams);
                $events = $results->getItems();

                if (empty($events)) {
                    print "No upcoming events found.\n";
                } else {
                    print "Upcoming events:\n";
                    foreach ($events as $event) {
                        $start = $event->start->dateTime;
                        if (empty($start)) {
                            $start = $event->start->date;
                        }
                        printf("%s (%s)\n", $event->getSummary(), $start);
                    }
                }
            }
            catch(Exception $e) {
                // TODO(developer) - handle error appropriately
                echo 'Message: ' .$e->getMessage();
            }
        ?>
    </div>
</div>