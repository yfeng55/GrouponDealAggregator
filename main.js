//console.log('hello');

$('.showinfo').on('click', function() {
	if ($(this).next().css('display') === 'none') {
		$(this).next().slideDown(300);
	}
	else{
		$(this).next().slideUp(300);
	}
});

////////////////////////////////////////////////////////

var center = new google.maps.LatLng(40.1667, -100.0367);

var myOptions = {
	zoom: 4,
	center: center,
	mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById('map'), myOptions);

///////////////////////////

$.getJSON('groupon.php', function(data) {
    /* data will hold the php array as a javascript object */
    

});


/*
function plotDeals(data){
	for (i=0; i<data.events.event.length; i=i+1){

		var marker = new google.maps.Marker({
		position: new google.maps.LatLng(data.events.event[i].latitude, data.events.event[i].longitude),
		 title: data.events.event[i].title
		 });
		 marker.setMap(map);
	}
}
*/