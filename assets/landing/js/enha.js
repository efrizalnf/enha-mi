 baguetteBox.run('.tz-gallery');
 //Get the button:
 mybutton = document.getElementById("scroll-top");

 // When the user scrolls down 20px from the top of the document, show the button
 window.onscroll = function () {
 	scrollFunction()
 };

 function scrollFunction() {
 	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
 		mybutton.style.display = "block";
 	} else {
 		mybutton.style.display = "none";
 	}
 }

 // When the user clicks on the button, scroll to the top of the document
 function topFunction() {
 	document.body.scrollTop = 0; // For Safari
 	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
 }

/* //  var map;

//  function initMap() {
//  	map = new google.maps.Map(document.getElementById('map'), {
//  		center: {
//  			lat: -6.937930,
//  			lng: 107.595264
//  		},
//  		zoom: 8
//  	});
//  } */
