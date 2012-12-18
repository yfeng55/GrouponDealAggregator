//////////////////////////////////////////make the deal boxes expand on click
$('.showinfo').on('click', function() {
	if ($(this).next().css('display') === 'none') {
		$(this).next().slideDown(300);
	}
	else{
		$(this).next().slideUp(300);
	}
});
////////////////////////////////////////////////////////check geolocation browser support

if (navigator.geolocation){
	console.log('Geolocation is supported by this browser');
}
///////////////////////////////////////////////////////////create a google map
var center = new google.maps.LatLng(42.1667, -100.0367);
var myOptions = {
	zoom: 4,
	center: center,
	mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById('map'), myOptions);

/////////////////////////////////get current position and plot it on the map

navigator.geolocation.getCurrentPosition(function(position) {
	var lat = position.coords.latitude;
	var long = position.coords.longitude;
	var current = new google.maps.LatLng(lat, long);


	var currentmarker = new google.maps.Marker({
					position: current,
					map: map,
					title: "Current",
					icon: 'http://www.sterling-adventures.co.uk/blog/wp-content/plugins/post-country/markers/default/m-blue-dot.png'
		});

	///////////////////////////////////////////////////////////create info window
	var infowindow = new google.maps.InfoWindow({
							content: "this is your current location"
						});

	google.maps.event.addListener(currentmarker, 'click', function() {
					infowindow.open(map, currentmarker);
				});
	///////////////////////////////////////////////////////plot deals on the map
	for (i=0; i<data.deals.length; i=i+1){
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(data.deals[i].division.lat, data.deals[i].division.lng),
		 	title: data.deals[i].title
		 });
		 marker.setMap(map);
	}

});

