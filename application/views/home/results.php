<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo URL::to_asset('css/style.css') ?>">
	<title>Groupon API</title>
</head>
<body>

<div id="header">
	<img src="<?php echo URL::to_asset('img/groupon-logo.png') ?>" height="100px" width="490px"/> 
</div>

<div id="map"></div>
<hr class="divider"/>

<?php
	
	$dealObj = Groupon::getDeals_curl($_REQUEST['zip'], $_REQUEST['channel']);

	foreach($dealObj->deals as $deal) {

		echo '<div id="dealcontainer">';

			echo '<img src="'.$deal->largeImageUrl.'" class="dealthumb" />';
			echo '<h2>'.$deal->title.'</h2>';
			echo '<b><a href="'.$deal->dealUrl.'">'.$deal->announcementTitle.'</a></b> <br/>';
			echo '<a href="'.$deal->merchant->websiteUrl.'">'.$deal->merchant->name.'</a>';

/*
//add the yelp rating for each business

			$businessObj = Yelp::getBusinesses_curl($deal->merchant->name);
		
			foreach($businessObj->businesses  as $business) {
				echo $business->avg_rating;
			}
*/

			echo '<br style="clear:both;"/>';
			
			//echo $deal->division->lat.'<br/>';
			//echo $deal->division->lng.'<br/>';

			echo '<a href="javascript:void(0)" class="showinfo">more info</a>';

			echo '<div class="moreinfo"><br/><hr/>'.$deal->highlightsHtml.'<br/>';
			echo $deal->pitchHtml.'<br/>';
			echo $deal->finePrint.'</div>';
			echo '<br style="clear:both;"/>';


		echo '</div>';
		echo '<br style="clear:both;"/>';
	}

	$json = json_encode($dealObj);

?>

<script>
	var data = <?php echo $json; ?>;
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="<?php echo URL::to_asset('js/main.js') ?>"></script>


</body>
</html>