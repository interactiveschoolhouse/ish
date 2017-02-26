<?php $pageTitle="Contact Us" ?>
<?php 
    require "/code/startup.php";
    require "/code/ContactUsForm.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php require "/controls/head.php" ?>
<body class="body-wrapper version3">
  <div class="main-wrapper">
    <?php require "/controls/header.php" ?>
    <section class="top-content">
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
            <?php
            $contactForm = new \ish\ContactUsForm();

            if (\ish\ContactUsForm::isRequestForMe()) {
                $submitResult = $contactForm->submitForm();
            }
            else { 
                $submitResult = new \ish\ContactUsResult();
            }
            ?>

            <?php if($submitResult->isSubmitted()){ ?>
                <div class="contact-us__thank-you">
                    Thank you for your request, we will be in touch.
                </div>
            <?php } else { ?>
                <form method="post" class="site-form">
                    <input type="hidden" name="formid" value="contactUs">
                    <div class="form__field field--half-width">
                        <input name="name" placeholder="Name" value="<?php echo \ish\ContactUsForm::getPostValue('name'); ?>"></input>
                        <div class="form__field-icon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <div class="form__field field--half-width">
                        <input name="address" placeholder="Address" value="<?php echo \ish\ContactUsForm::getPostValue('address'); ?>"></input>
                        <div class="form__field-icon">
                            <i class="fa fa-map-o"></i>
                        </div>
                    </div>
                    <div class="form__field field--half-width">
                        <input name="town" placeholder="Town" value="<?php echo \ish\ContactUsForm::getPostValue('town'); ?>"></input>
                        <div class="form__field-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                    </div>
                    <div class="form__field field--half-width">
                        <input name="phone" placeholder="Phone" value="<?php echo \ish\ContactUsForm::getPostValue('phone'); ?>"></input>
                        <div class="form__field-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <div class="form__field">
                        <input name="email" placeholder="Email" value="<?php echo \ish\ContactUsForm::getPostValue('email'); ?>"></input>
                        <div class="form__field-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="form__field">
                        <textarea name="comments" placeholder="Comments"><?php echo \ish\ContactUsForm::getPostValue('comments')?></textarea>
                        <div class="form__field-icon">
                            <i class="fa fa-comments"></i>
                        </div>
                    </div>
                    <div class="form__actions">
                        <button type="submit">Send Message</button>
                    </div>
                </form>

            <?php } ?>

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