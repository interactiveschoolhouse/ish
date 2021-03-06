<?php require "/code/events.php" ?>

<section class="events-container">
    <div class="sectionTitle section-title">
        <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Our Events</span>
            <span class="shape shape-right bg-color-4"></span>
        </h2>        
    </div>
    <ul class="two-column__list">
        <?php
        $events = \ish\Events::getUpcomingEvents();

        foreach($events as $event) { 
            $htmlDescription = "";
            ?>
            <li>
                <div class="event__content">
                    <div class="event__date">
                        <?php echo $event->FormattedStartDate ?>
                    </div>
                    <div class="event__info">
                        <h3><?php echo $event->Title ?></h3>
                        <div class="event__time">
                            <?php if (!empty($event->FormattedTimeDuration)) { ?>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <?php echo $event->FormattedTimeDuration ?>
                            <?php } ?>
                        </div>
                        <div class="event__description">
                            <?php foreach($event->DescriptionLines as $descriptionLine) { 
                                $htmlDescription .= "<p>" . htmlentities($descriptionLine) . "</p>";
                            }
                            echo $htmlDescription;
                            ?>
                        </div>
                    </div>
                    <div class="event__commands">
                        <?php if ($event->RegistrationAllowed) { ?>
                            <form method="post" Action="/register.php">
                                <input type="hidden" name="eventId" value="<?php echo $event->Id ?>"/>
                                <button class="inverse-button" type="submit">Register</button>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>
</section>
