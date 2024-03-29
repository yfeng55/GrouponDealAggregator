<?php 

class Groupon_Controller extends Base_Controller {

	public static function action_index() {
	return View::make('home.form');
	}


	public static function action_results() {



//laravel data validation
$input = Input::all();

$rules = array(
    'zip'  => 'required|size:5',
    'zip' => 'numeric'
);

$validation = Validator::make($input, $rules);

if ($validation->fails())
{
    return $validation->errors->first();
}




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


	public static function action_ajax_results() {
		$zip = Input::get('zip');
		$zip= urlencode($zip);

		$groupon = new Groupon();
		$groupon_deals = $groupon::getDeals_curl($zip, 'getaways');
	
		$data = array(
			'zip' => $zip,
			'channel' => 'getaways',
			'results' => $groupon_deals
		);

		return View::make('home.ajax_results', $data);

	}

}
?>