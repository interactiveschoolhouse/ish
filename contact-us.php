<?php $pageTitle="Contact Us" ?>
<?php require "/code/startup.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php require "/controls/head.php" ?>
<body class="body-wrapper version3">
  <div class="main-wrapper">
    <?php require "/controls/header.php" ?>
    <section class="mainContent">
        <div class="container">
            <ul class="quick-contact__container">
                <li class="quick-contact__item">
                    <div class="quick-contact__icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="quick-contact__info">
                        <h3>Address:</h3>
                        <div>Interactive School House, LLC</div>
                        <div>2055 Main Street</div>
                        <div>Three Rivers, MA 01080</div>
                    </div>
                </li>
                <li class="quick-contact__item">
                    <div class="quick-contact__icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="quick-contact__info">
                        <h3>Phone:</h3>
                        <div>
                            <a href="tel:<?php echo CONTACT_TELEPHONE_RAW ?>"><strong><?php echo CONTACT_TELEPHONE_DISPLAY ?></strong></a>
                        </div>
                    </div>
                </li>
                <li class="quick-contact__item">
                    <div class="quick-contact__icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="quick-contact__info">
                        <h3>Email:</h3>
                        <div>
                            <a href="mailto:<?php echo CONTACT_EMAIL ?>"><strong><?php echo CONTACT_EMAIL ?></strong></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <?php require "/controls/footer.php" ?>
  </div>
  <div class="scrolling">
    <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>
    
  <?php require "/controls/jsLibraries.php" ?>
</body>