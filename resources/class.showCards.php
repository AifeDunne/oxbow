<?php
class showCards {
	public function __construct($type) {
  /* Set up class-wide variables */
		$cards = [
		  [
			'title' => 'Lorem ipsum dolor',
			'body' => 'Fusce vel viverra leo, id laoreet purus. Phasellus at nunc eget purus pellentesque finibus viverra ut nulla. Nulla arcu felis, laoreet egestas vestibulum ut, varius porttitor ex.',
			'img' => 'http://imageipsum.com/1201x300',
			'url' => 'https://www.google.com',
		  ],
		  [
			'title' => 'Sed non urna porta',
			'body' => 'Ut ut eros justo. Morbi dui felis,id vehicula ligula. Donec cursus felis a neque faucibus auctor venenatis at viverra vel',
			'img' => 'http://imageipsum.com/1202x300',
			'url' => 'index.php',
		  ],
		  [
			'title' => 'Nulla tempor purus',
			'body' => 'Nulla facilisis justo condimentum',
			'img' => 'http://imageipsum.com/1203x400',
			'url' => 'google.com',
		  ],
		  [
			'title' => 'Vestibulum eleifend',
			'body' => 'Etiam cursus suscipit nunc molestie et. Sed varius, nulla sit amet ullamcorper fermentum, enim augue hendrerit ligula, pulvinar libero, lacinia feugiat dui lobortis at',
			'img' => 'http://imageipsum.com/1204x900',
			'url' => 'index.php',
		  ],
		  [
			'title' => 'Ut ut eros justo',
			'body' => '',
			'img' => 'http://imageipsum.com/1205x300',
			'url' => 'https://www.google.com',
		  ],
		  [
			'title' => 'Mauris commodo tristique',
			'body' => 'Nunc id consequat eros. id vehicula ligula. Donec cursus felis a neque faucibus auctor Proin erat arcu, pulvinar in',
			'img' => 'http://imageipsum.com/1206x300',
			'url' => '',
		  ],
		  [
			'title' => 'Morbi justo nibh, pulvinar quis dignissim id',
			'body' => 'Suspendisse id gravida augue. suscipit nunc molestie et. Sed varius, nulla sit amet ullamcorper fermentum, enim augue hendrerit ligula, Mauris maximus porta vulputate',
			'img' => 'http://imageipsum.com/1207x300',
			'url' => 'https://www.google.com',
		  ]]; 
		  // Duplicate the array
          $more_cards = array_slice($cards, 3);
		  $cards = array_merge($cards, $more_cards);
		
		  $this->type = $type;
		  $this->count_cards = count($cards);
		  $this->cards = $cards;
		  $this->count_style = 0;
		  $this->start_count = 0;
		  }
		
	private function formatOverview($single_card,$link,$style) {
  /* Format data into html */
	$title = $single_card['title'];
	$body = $single_card['body'];
	$img = $single_card['img'];
	$url = $single_card['url'];
	$endResult = '<div class="card" style="'.$style.'">
					<div class="card-header"><img src="'.$img.'" /></div>
					<div class="card-body">
						<p class="card-title" href="design.php?page='.$link.'">'.$title.'</p>
						<p class="card-content">'.$body.'</p>
					</div>
					<div class="card-footer">
						<a class="button" href="'.$url.'">Learn More &#9654;</a>
				   </div>
				   </div>';
	echo $endResult; }
	
	private function extractData($key1,$key2) {
  /* Separate data into individual pieces */
		for ($c = $key1; $c < $key2; $c++) {
			$single_card = $this->cards[$c];
			if ($this->count_style > 6) { $this->count_style = 0; }
			$style = $this->style[$this->count_style];
			$this->formatOverview($single_card,$c,$style); 
			$this->count_style++; }
	}
		
	public function displayCards() {
  /* Display posts or post */
	if ($this->type !== "loop") { $switchKey = intval($this->type); $startKey = $switchKey - 1; $this->style = array("","","","","","",""); }
	else { $startKey = 0; $switchKey = $this->count_cards; $this->style = array("","","","","","",""); $this->style = array("width:66%; margin-right:1%;", "width:32%; margin-left:1%;", "width:32%;", "width:32%; margin-left:2%; margin-right:2%;", "width:32%;", "width:32%; margin-right:1%;","width:66%; margin-left:1%;");}
		$this->extractData($startKey,$switchKey);
	}
}
?>
