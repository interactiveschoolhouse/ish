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
                <li class="quick-contact__item item--1">
                    <div class="quick-contact__icon">
                        <span>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="quick-contact__info">
                        <h3>Address:</h3>
                        <div>Interactive School House, LLC</div>
                        <div>2055 Main Street</div>
                        <div>Three Rivers, MA 01080</div>
                    </div>
                </li>
                <li class="quick-contact__item item--2">
                    <div class="quick-contact__icon">
                        <span>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="quick-contact__info">
                        <h3>Phone:</h3>
                        <div>
                            <a href="tel:<?php echo CONTACT_TELEPHONE_RAW ?>"><?php echo CONTACT_TELEPHONE_DISPLAY ?></a>
                        </div>
                    </div>
                </li>
                <li class="quick-contact__item item--3">
                    <div class="quick-contact__icon">
                        <span>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="quick-contact__info">
                        <h3>Email:</h3>
                        <div>
                            <a href="mailto:<?php echo CONTACT_EMAIL ?>"><?php echo CONTACT_EMAIL ?></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    
    <section class="mapArea">
      <div id="map"></div>
    </section>

    <section class="bottom-content">
        <div class="container">
            <form method="post" class="site-form">
                <div class="form__field field--half-width">
                    <input name="name" placeholder="Name"></input>
                </div>
                <div class="form__field field--half-width">
                    <input name="address" placeholder="Address"></input>
                </div>
                <div class="form__field field--half-width">
                    <input name="town" placeholder="Town"></input>
                </div>
                <div class="form__field field--half-width">
                    <input name="phone" placeholder="Phone"></input>
                </div>
                <div class="form__field">
                    <input name="email" placeholder="Email"></input>
                </div>
                <div class="form__field">
                    <textarea name="comments" placeholder="Comments"></textarea>
                </div>
            </form>
        </div>
    </section>

    <?php require "/controls/footer.php" ?>
  </div>
  <div class="scrolling">
    <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>
    
  <?php require "/controls/jsLibraries.php" ?>

  <script src="/plugins/google-custom-map/google-map.js"></script>
  <?php require "/controls/googleMaps.php" ?>

</body>