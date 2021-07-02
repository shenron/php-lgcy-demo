<?php
include_once('../common.php');

$hello = '';
$err = '';
if (isset($_POST['submit'])) {
  $err = 'I need your name :(';
  if ($_POST['firstname']) {
    $hello = say_hello($_POST['firstname']);
  }
}
?>
<html>
  <head>
    <link rel="stylesheet" href="../statics/styles/theme.css" />
  </head>
  <body>
    <h1 class="center">Our first form</h1>
    <form action="" method="post" class="center">
      <input placeholder="my name" name="firstname" />
      <input required type="submit" name="submit" value="Send" />
      <a href="?">Reset form</a>
      <br/>
      <?php
        if ($hello) {
          echo $hello;
        }
        if ($err) {
          echo "<span class=\"error\">".$err."</span>";
        }
      ?>
    </form>
  </body>
</html>
