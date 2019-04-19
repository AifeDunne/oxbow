<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Card Grid</title>
 <style media="all">
    @import url("resources/style.css");
  </style>
</head>

<body>
	<section class="cards">

		  <!-- Start Card Output -->
			<?php 
				require_once('resources/class.showCards.php');
				$showCards = new showCards();
				$showCards->displayCards();
			?>
		  <!-- End Card Output -->

	</section>
</body>
</html>
