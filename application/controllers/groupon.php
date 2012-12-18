<?php 

class Groupon_Controller extends Base_Controller {

	public static function action_index() {
	return View::make('home.form');
	}


	public static function action_results() {
		$zip = Input::get('zip');
		$zip= urlencode($zip);

		$channel = Input::get('channel');
		$channel = urlencode($channel);

		$groupon = new Groupon();
		$groupon_deals = $groupon::getDeals_curl($zip, $channel);


		$data = array(
			'zip' => $zip,
			'channel' => $channel,
			'results' => $groupon_deals
		);

		return View::make('home.results', $data);
	}

}
?>