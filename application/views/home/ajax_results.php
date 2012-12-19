<?php

//require 'functions.php';

//$zip = $_GET['zip'];

echo "<br/><p><em><b>Deals for the zip code: ".$zip."</b></em></p>";


echo "<ul>";

$dealObj = Groupon::getDeals_curl($zip, 'getaways');

	foreach($dealObj->deals as $deal) {

		echo '<li>';

			echo '<b><a href="'.$deal->dealUrl.'">'.$deal->announcementTitle.'</a></b> <br/>';

		echo '</li><br/>';
	}

echo "</ul>";

?>