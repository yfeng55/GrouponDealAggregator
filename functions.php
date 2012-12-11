<?php

class Groupon {
	public static function getDeals_curl() {

		$key = "f2ce66d9cfec8ff093473773960813542faa7564";
		$url = 'http://api.groupon.com/v2/deals.json?client_id='.$key;

		if(!empty($_REQUEST['zip'])){
			$url = $url.'&postal_code='.$_REQUEST['zip'];
		}
		if(!empty($_REQUEST['channel'])){
			$url = $url.'&channel_id='.$_REQUEST['channel'];
		}


		$session = curl_init($url);
		curl_setopt($session, CURLOPT_HEADER, false);
		curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
		$jsonString = curl_exec($session);
		curl_close($session);

		$jsonObject = json_decode($jsonString);
		return $jsonObject;
	}
}

class Yelp {

	public static function getBusinesses_curl($term) {
		$key = 'GEIjv3kvnkbdPCi4Z2aRNw';
		$url = 'http://api.yelp.com/business_review_search?term='.$term.'&ywsid='.$key;

		$session = curl_init($url);
		curl_setopt($session, CURLOPT_HEADER, false);
		curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
		$jsonString = curl_exec($session);
		curl_close($session);

		$jsonObject = json_decode($jsonString);
		return $jsonObject;
	}
}

?>