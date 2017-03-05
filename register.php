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
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" class="site-form">
                        <INPUT TYPE="hidden" NAME="cmd" VALUE="_xclick">
                        <INPUT TYPE="hidden" NAME="business" VALUE="interactiveschoolhouse@gmail.com">
                        <input type="hidden" name="undefined_quantity" value="0">
                        <INPUT TYPE="hidden" NAME="item_name" VALUE="<?php echo \ish\HttpRequest::form('registrationName'); ?>">
                        <input type="hidden" name="state" value="MA">
                        <INPUT TYPE="hidden" NAME="lc" VALUE="US">

                        <div class="form__field">
                            <p>
                                <?php echo \ish\HttpRequest::form('registrationName'); ?>
                            </p>
                        </div>
                        <div class="form__field field--half-width">
                            <label for="first_name">First Name</label>
                            <input id="first_name" name="first_name" placeholder="First Name *" required="required"></input>
                        </div>
                        <div class="form__field field--half-width">
                            <label for="last_name">Last Name</label>
                            <input id="last_name" name="last_name" placeholder="Last Name *" required="required"></input>
                        </div>
                        <div class="form__field field--half-width">
                            <label for="address1">Address</label>
                            <input id="address1" name="address1" placeholder="Address"></input>
                        </div>
                        <div class="form__field field--half-width">
                            <label for="city">Town</label>
                            <input id="city" name="city" placeholder="Town"></input>
                        </div>
                        <div class="form__field field--half-width">
                            <label for="phone">Phone</label>
                            <input id="phone" name="phone" placeholder="Phone *" type="tel" required="required"></input>
                        </div>
                        <div class="form__field field--half-width">
                            <label for="email">Email</label>
                            <input id="email" name="email" placeholder="Email *" type="email" required="required"></input>
                        </div>
                        <div class="form__field  field--half-width">
                            <label for="amount">Payment Amount</label>
                            <input id="amount" name="amount" placeholder="Amount *" required="required"></input>
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
    </section>

    <?php require "/controls/footer.php" ?>
  </div>
    
  <?php require "/controls/jsLibraries.php" ?>

</body>