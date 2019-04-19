<?php
if (isset($_GET['page']) === true) {
$page = $_GET['page'];
$page = intval($page);
/* I originally configured this file to be able to show single items but I removed the functionality to be more in line with the prompt. I ended up not using it for anything. */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Design</title>
   <style media="all">
    @import url("resources/style.css");
  </style>
</head>
<body>
<div id="design">
  <?php
  require_once('resources/class.showCards.php');
  $showCards = new showCards();
  $showCards->displayCards($page);
  ?>
</div>
</body>
</html>
<?php } else { echo "Not a valid page"; } ?>
