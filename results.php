<?php require 'groupon.php'; ?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="style.css">

<title>Groupon API</title>
</head>
<body>

<div id="map"></div>
<br style="clear:both;"/><hr/><br/>

<?php
	
	$dealObj = getDeals_curl();

	foreach($dealObj->deals as $deal) {

		echo '<div id="dealcontainer">';

			echo '<img src="'.$deal->largeImageUrl.'" class="dealthumb" />';
			echo '<h1>'.$deal->title.'</h1><br/>';
			echo '<b><a href="'.$deal->dealUrl.'">'.$deal->announcementTitle.'</a></b> <br/>';
			echo '<a href="'.$deal->merchant->websiteUrl.'">'.$deal->merchant->name.'</a><br style="clear:both;"/>';
			
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="main.js"></script>

</body>
</html>