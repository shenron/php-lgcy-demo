<?php
include_once('../common.php');
$time = get_db_time();
?>

<html>
  <head>
    <link rel="stylesheet" href="../statics/styles/theme.css" />
  </head>
  <body>
    <h1 class="center">Demo Legacy PHP Project</h1>
    <p class="center">
      <img src="../statics/images/php-logo.png" class="php-logo" alt="php logo" />
      <br />
      Database time: <?php echo $time; ?>

      <br />
      <a href="../">Home</a>
    </p>
  </body>
</html>
