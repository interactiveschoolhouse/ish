<?php 
    $pageTitle="Registration Complete";
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
            <h3>Thank you for registering for the Interactive School House event!</h3>
        </div>
    </section>

    <?php require "/controls/footer.php" ?>
  </div>
    
  <?php require "/controls/jsLibraries.php";?>
  <script src="/js/register.js"></script>
</body>
<!-- 
    Maybe need to turn on auto-return?
    http://stackoverflow.com/questions/18007480/paypal-checkout-return-data
-->