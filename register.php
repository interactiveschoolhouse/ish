<?php 
    $pageTitle="Register";
    require "/code/startup.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php require "/controls/head.php" ?>
<body class="body-wrapper version3">
  <div class="main-wrapper">
    <?php require "/controls/header.php" ?>
    <section class="top-content">
        <div class="container">
            <fieldset>
                <legend>Class Registration</legend>
                    <form id="registrationForm" class="site-form" method="post">

                        <div class="form__field">
                            <h3 class="register-event__title">
                                <?php echo \ish\HttpRequest::form('eventName'); ?>
                            </h3>
                            <div class="register-event__summary">
                                <?php 
                                $pipedEventSummary = \ish\HttpRequest::form('eventDescription');
                                echo "<input type='hidden' id='pipedEventSummary' value='" . $pipedEventSummary . "'>";

                                $descriptionLines = explode("|", $pipedEventSummary);
                                foreach($descriptionLines as $descriptionLine) {
                                    echo "<p>" . $descriptionLine . "</p>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form__field field--half-width">
                            <label for="name">Name</label>
                            <input id="name" name="name" placeholder="Name *" required="required"/>
                        </div>
                        <div class="form__field  field--half-width">
                            <label for="paymentAmount">Payment Amount</label>
                            <input id="paymentAmount" name="paymentAmount" placeholder="Amount *" type="number" min="5" max="500" required="required"/>
                        </div>
                        <div class="form__field field--half-width">
                            <label for="address1">Address</label>
                            <input id="address1" name="address1" placeholder="Address"/>
                        </div>
                        <div class="form__field field--half-width">
                            <label for="town">Town</label>
                            <input id="town" name="town" placeholder="Town"/>
                        </div>
                        <div class="form__field field--half-width">
                            <label for="phone">Phone</label>
                            <input id="phone" name="phone" placeholder="Phone *" type="tel" required="required"/>
                        </div>
                        <div class="form__field field--half-width">
                            <label for="email">Email</label>
                            <input id="email" name="email" placeholder="Email *" type="email" required="required"/>
                        </div>
                        <div class="form__field  field--half-width">
                            &nbsp;
                        </div>
                        <div class="form__field">
                            <label for="specialInstructions">Special Instructions</label>
                            <textarea id="specialInstructions" name="specialInstructions" placeholder="Special Instructions"></textarea>
                        </div>
                        <div class="form__actions">
                            <button type="submit">Register</button>
                        </div>
                    </form>
            </fieldset>
        </div>
        <form id="payPalRegister" action="<?php echo \ish\AppSettings::PayPalUrl . "/cgi-bin/webscr"; ?>" method="post">
            <INPUT TYPE="hidden" NAME="cmd" VALUE="_xclick">
            <INPUT TYPE="hidden" NAME="business" VALUE="interactiveschoolhouse@gmail.com">
            <INPUT TYPE="hidden" NAME="return" VALUE="<?php echo \ish\AppSettings::IshUrl . "/registration-complete.php"; ?>">
            <INPUT TYPE="hidden" NAME="rm" VALUE="2">
            <input type="hidden" name="undefined_quantity" value="0">
            <INPUT TYPE="hidden" NAME="item_name" VALUE="<?php echo \ish\HttpRequest::form('eventName'); ?>">
            <INPUT TYPE="hidden" NAME="item_number">
            <input type="hidden" name="amount">
            <INPUT TYPE="hidden" NAME="lc" VALUE="US">
            <input type="hidden" name="first_name">
            <input type="hidden" name="last_name">
            <input type="hidden" name="address1">
            <input type="hidden" name="city">
            <input type="hidden" name="state" value="MA">
            <input type="hidden" name="night_phone_a">
            <input type="hidden" name="night_phone_b">
            <input type="hidden" name="night_phone_c">
            <input type="hidden" name="email">
        </form>
    </section>

    <?php require "/controls/footer.php" ?>
  </div>
    
  <?php require "/controls/jsLibraries.php";?>
  <script src="/js/register.js"></script>
</body>