
$('.showinfo').on('click', function() {
	if ($(this).next().css('display') === 'none') {
		$(this).next().slideDown(300);
	}
	else{
		$(this).next().slideUp(300);
	}
});

////////////////////////////////////////////////////////

var center = new google.maps.LatLng(42.1667, -100.0367);

var myOptions = {
	zoom: 4,
	center: center,
	mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById('map'), myOptions);

///////////////////////////

//console.log(data);

for (i=0; i<data.deals.length; i=i+1){

	var marker = new google.maps.Marker({
	position: new google.maps.LatLng(data.deals[i].division.lat, data.deals[i].division.lng),
	 title: data.deals[i].title
	 });
	 marker.setMap(map);
}

//////////////////////////

$.ajax({
	url: 'groupon-json.php',
	data: {
		name: name
	},
	type: 'GET',
	success: function(response) {
		$('#deals_container').html(response);
	},
	error: function(err1, err2, err3) {
		console.log(err1, err2, err3);
	}
});