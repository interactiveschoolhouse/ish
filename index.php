<?php $pageTitle="Home - Interactive School House" ?>
<?php require "/code/startup.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php require "/controls/head.php" ?>
<body class="body-wrapper version3">

  <div class="main-wrapper">
    <?php require "/controls/header.php" ?>
    <?php require "/controls/banner.php" ?>

    <?php require "/content/aboutSchool.php" ?>
    <?php require "/controls/events.php" ?>
    
    <section class="mapArea">
      <div id="map"></div>
    </section>

    <?php require "/controls/footer.php" ?>

  </div>

  <?php require "/controls/jsLibraries.php" ?>

  <script src="/plugins/google-custom-map/google-map.js"></script>
  <?php require "/controls/googleMaps.php" ?>

</body>

</html>