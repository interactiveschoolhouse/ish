<?php 
    $pageTitle="Calendar";
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
            <h2>Calendar</h2>
            <div class="responsive-calendar">
                <iframe src="https://calendar.google.com/calendar/embed?src=a1jndmd2dbhcva55mjnhosmjpo%40group.calendar.google.com&amp;ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </section>

    <?php require "/controls/footer.php" ?>
  </div>
    
  <?php require "/controls/jsLibraries.php";?>
</body>
