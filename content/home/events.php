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
        foreach($events as $event) { ?>
            <li>
                <div class="event__content">
                    <div class="event__date">
                        <?php echo $event->FormattedStartDate ?>
                    </div>
                    <div class="event__info">
                        <h3><?php echo $event->Title ?></h3>
                        <div class="event__time">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <?php echo $event->FormattedTimeDuration ?>
                        </div>
                        <div class="event__description">
                            <?php foreach($event->DescriptionLines as $descriptionLine) { ?>
                                <p><?php echo $descriptionLine ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="event__commands">
                        <a class="inverse-button" href="#register">Register</a>
                    </div>
                </div>
            </li>
        <?php
        }
        ?>
        <!--<li>
            <div class="event__content">
                <div class="event__date">
                    Thu, Feb 10
                </div>
                <div class="event__info">
                    <h3>After School Art Classes with Andrea Newland</h3>
                    <div class="event__time">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        4.00PM – 5.30PM
                    </div>
                    <div class="event__description">
                        $50/person for series of three lessons.  Each class will have a different project including painting, sewing, and sculpture.
                    </div>
                </div>
                <div class="event__commands">
                    <a class="inverse-button" href="#register">Register</a>
                </div>
            </div>
        </li>
        <li>
            <div class="event__content">
                <div class="event__date">
                    Wed, Feb 15
                </div>
                <div class="event__info">
                    <h3>Acrylic Painting Class with Andrea Newland</h3>
                    <div class="event__time">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        6.30PM – 8.00PM
                    </div>
                    <div class="event__description">
                        $50 for 3 class series for adults and teens.  Beginners and people who want to brush up on rusty techniques are encouraged to join the class.  
                        Andrea's instruction style is fun and full of positive encouragement.                
                    </div>
                </div>
                <div class="event__commands">
                    <a class="inverse-button" href="#register">Register</a>
                </div>
            </div>
        </li>
        <li>
            <div class="event__content">
                <div class="event__date">
                    Fri, Feb 17
                </div>
                <div class="event__info">
                    <h3>After School Art Classes with Andrea Newland</h3>
                    <div class="event__time">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        4.00PM – 5.30PM
                    </div>
                    <div class="event__description">
                        $50/person for series of three lessons.  Each class will have a different project including painting, sewing, and sculpture.
                    </div>
                </div>
                <div class="event__commands">
                    <a class="inverse-button" href="#register">Register</a>
                </div>
            </div>
        </li>
        <li>
            <div class="event__content">
                <div class="event__date">
                    Tue, Feb 21
                </div>
                <div class="event__info">
                    <h3>American Girl Doll Shoe Organizer</h3>
                    <div class="event__time">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        10.00AM – 12.00PM
                    </div>
                    <div class="event__description">
                        Sew a mini shoe organizer with clear vinyl pockets for your doll's shoes.
                        Some experience using a sewing machine is required.
                        $20/person
                        Class size limited to 5.                    
                    </div>
                </div>
                <div class="event__commands">
                    <a class="inverse-button" href="#register">Register</a>
                </div>
            </div>
        </li>-->
    </ul>
</section>
