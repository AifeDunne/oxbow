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
				$showCards = new showCards("loop");
				$showCards->displayCards();
				
				// Array merge is unnecessary and isn't needed for the desired result.
				// $cards = array_merge($cards, $cards);
			?>
		  <!-- End Card Output -->

	</section>
</body>
</html>
