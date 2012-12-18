function showDeals(zip){
	$('#'+zip).on('click', function() {
		
		//console.log('click');
		$('#ajaxresults').html('<img src="ajax-loader.gif">');

		$.ajax({
		  url: 'groupon.php',
		  type: 'GET',
		  data: {
		  		zip: zip,
		  },
		  success: function(data) {
			$('#ajaxresults').html(data);
		  },
		  error: function(e) {
		  }
		});
	});
}

showDeals('90007'); //los angeles
showDeals('10036'); //new york
showDeals('60601'); //chicago
