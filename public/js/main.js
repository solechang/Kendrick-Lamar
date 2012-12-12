 $("#go").on('click', function() {
            // console.log(../img/loading.gif);
            var searchTerm = 'kendricklamar';

            $('#resultz').html("<img src='../../public/img/loading.gif' />");
            
            $.ajax({
                url: "/finalproject/public/blackhippy/flickr",
                data: {
                    searchTerm: searchTerm
                },
                success: function(response) {
                    $('#resultz').html(response);
                },
                error: function(err1, err2, err3) {
                    console.log(err1, err2, err3);
                }
            });

        });

//Google Maps Module
var points = {
	myLocation:[34.03, -118.15]

};

var currentLocation = new google.maps.LatLng(points.myLocation[0], points.myLocation[1]);

var myOptions = {
	zoom:5,
	center: currentLocation,
	mapTypeId: google.maps.MapTypeId.ROADMAP // Can also do SATELLITE
};
var map = new google.maps.Map(document.getElementById('map'), myOptions);

var marker = new google.maps.Marker({
	position: currentLocation,
	title: 'Start Position',
	icon: 'http://www.google.com/gmm/images/blue_dot_circle.png'
});
marker.setMap(map);



//Concert List Module
var script = document.createElement('script');
script.src = "http://api.eventful.com/json/events/search?c=music&app_key=NdJkBjd49xZrQ4Fs&page_number=1&date=Future&keywords=kendrick+lamar&callback=processJSONP";
//var key = "NdJkBjd49xZrQ4Fs";
document.getElementsByTagName('head')[0].appendChild(script);

function processJSONP(data) {
	//Handlebars is a global object when using handlebars
	var templateString = document.getElementById('concertList-template').innerHTML;
	var template = Handlebars.compile(templateString);
	var html = "";
	var markerd;
	var infowindow;
	
	
	for( var i = 0; i < data.events.event.length; i++ ) {
		console.log("Latitude: " + data.events.event[i].latitude);
		console.log("Longtitude: " + data.events.event[i].longitude);
		markerd = new google.maps.Marker({
				position: new google.maps.LatLng(data.events.event[i].latitude, data.events.event[i].longitude),
				title: data.events.event[i].venue_name,
			});
		
		infowindow = new google.maps.InfoWindow;
		bindInfoW(markerd,data.events.event[i].venue_name, infowindow);
		google.maps.event.addListener(markerd, 'click', function() {
	  		infowindow.open(map, markerd);
		});
		//console.log(markerd);
			// To add the marker to the map, call setMap() on the marker object;
		markerd.setMap(map);
		html += template(data.events.event[i]);
	}

	document.getElementById('showConcert').innerHTML = html;
};

function bindInfoW(marker, contentString, infowindow)
{
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(contentString);
            infowindow.open(map, marker);
        });
}

	