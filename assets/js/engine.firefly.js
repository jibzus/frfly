!function($) {
    "use strict";

    //FORMS NO SUBMIT ACTION
	jQuery(".no-submit").submit(function(){return false});

	//VALIDATE EMAIL
	function is_email(email){      
		var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
		return emailReg.test(email); 
	}
	//VALIDATE INPUT DIGIT
	function is_digits(number){      
		var numberReg = /^[\d\,\.]*$/;
		return numberReg.test(number); 
	}

	//RANDOM TOKEN GENERATOR
	function randomString(length, chars){
		var result = '';
		for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
		return result;
	}

    //ADD COMMAS TO CURRENCY
    jQuery.fn.digits = function(){
        return this.each(function(){ 
            $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
        })
    }

    //TELEPHONE UTIL SERVICE
    var g = function() {
        var t = location.pathname.match(/^\/([^\/]+)/),
            e = t && t[1];
        switch (e) {
            case "ca":
            case "es":
                return "es";
            case "ja":
                return "jp";
            default:
                return "ng"
        }
    };
    //
    jQuery(".tel-input__tel").intlTelInput({
        utilsScript: "./assets/js/vendor/utils.js",
        numberType: "MOBILE",
        onlyCountries: ["ng", "tg", "sl", "gh"],
        defaultCountry: g(),
        autoPlaceholder: !1
    });

    //MAKE TABLE DATA-HREF LINKABLE
    jQuery(document).on("click", "table tr.link-row", function(){
        window.location = jQuery(this).attr('href');
        return false;
    });

    var map;
    var marker;

    //Initiate Google Maps > For Request Page
    function requestMap() {
    	var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
	    var mapCanvas = document.getElementById("gmaps");
	    var mapOptions = {
	        center: new google.maps.LatLng(6.5244, 3.3792),
	        zoom: 10
	    };
	    map = new google.maps.Map(mapCanvas, mapOptions);
	    //
	    directionsDisplay.setMap(map);
	   
	    //GET USER CURRENT LOCATION
	    if (navigator.geolocation) {

	    	//Show loading
			jQuery("#inputPickup").attr("placeholder", "retrieving current location...");

	        navigator.geolocation.getCurrentPosition(function(position) {
	        	var pos = {
	              	lat: position.coords.latitude,
	              	lng: position.coords.longitude
	            };
	            
	            //Center Map on Current Location
	            map.setCenter(pos);
	            map.setZoom(15);

	            //Set Marker
	            marker = new google.maps.Marker({position: pos});
				marker.setMap(map);

	            //Run Geocoding function
	            geocodeLatLng(position.coords.latitude, position.coords.longitude);

	       	}, function() {
	       		jQuery("#inputPickup").attr("placeholder", "Please enter a pickup address");
	            //ALERT ERROR > Geolocation failed
	            swal({   
	                title: "Map Error.",   
	                text: "Whoops! Failed to get your location.",
	                type: "error"
	            });
	        });
	    } else {
	    	jQuery("#inputPickup").attr("placeholder", "Please enter a pickup address");
	        //ALERT ERROR > Browser doesn't support Geolocation
            swal({   
                title: "Map Error.",   
                text: "Looks like your browser doesn't support geolocation .",
                type: "error"
            });
	        
        }

        //CHECK DROPOFF LOCATION  FOCUSOUT
		jQuery("#inputPickup").focusout(function(){

			//CHECK IF PICKUP LOCATION FIELD IS EMPTY
			if(jQuery(this).val()!='' && jQuery("#inputDropoff").val()!=''){

				//clear markers
				marker.setMap(null);
        		//Run direction services
				directionsService.route({
	          	origin: document.getElementById('inputPickup').value,
	          	destination: document.getElementById('inputDropoff').value,
	          	travelMode: 'DRIVING'
		        }, function(response, status) {
		          	if (status === 'OK') {
		            	directionsDisplay.setDirections(response);
		          	} else {
		            	//window.alert('Directions request failed due to ' + status);
		          	}
		        });

			}
		});

        //CHECK DROPOFF LOCATION  FOCUSOUT
		jQuery("#inputDropoff").focusout(function(){

			//CHECK IF PICKUP LOCATION FIELD IS EMPTY
			if(jQuery(this).val()!='' && jQuery("#inputPickup").val()!=''){

				//clear markers
				marker.setMap(null);
        		//Run direction services
				directionsService.route({
	          	origin: document.getElementById('inputPickup').value,
	          	destination: document.getElementById('inputDropoff').value,
	          	travelMode: 'DRIVING'
		        }, function(response, status) {
		          	if (status === 'OK') {
		            	directionsDisplay.setDirections(response);
		          	} else {
		            	//window.alert('Directions request failed due to ' + status);
		          	}
		        });

			}
		});
	}


	//Initiate Google Maps > For Tracking
    function trackMap() {
    	var mapCanvas = document.getElementById("gmaps");
	    var mapOptions = {
	        center: new google.maps.LatLng(6.5244, 3.3792),
	        zoom: 10
	    };
	    map = new google.maps.Map(mapCanvas, mapOptions);
	    
	    //GET USER CURRENT LOCATION
	    if (navigator.geolocation) {

	    	navigator.geolocation.getCurrentPosition(function(position) {
	        	var pos = {
	              	lat: position.coords.latitude,
	              	lng: position.coords.longitude
	            };
	            
	            //Center Map on Current Location
	            map.setCenter(pos);
	            map.setZoom(15);

	            //Set Marker
	            marker = new google.maps.Marker({position: pos});
				marker.setMap(map);

	       	}, function() {
	       		//ALERT ERROR > Geolocation failed
	            swal({   
	                title: "Map Error.",   
	                text: "Whoops! Failed to get your location.",
	                type: "error"
	            });
	        });
	    } else {
	    	//ALERT ERROR > Browser doesn't support Geolocation
            swal({   
                title: "Map Error.",   
                text: "Looks like your browser doesn't support geolocation .",
                type: "error"
            });
	        
        }
	}

	//Geocode Function
	function geocodeLatLng(a, b) {

		//Declare Gmaps Geocoder
	    var geocoder = new google.maps.Geocoder;

        //Get Latlng
       	var latlng = {lat: parseFloat(a), lng: parseFloat(b)};

       	//Begin geocoding
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[1]) {
            	//Write deocoded address to Pickup
              	jQuery("#inputPickup").val(results[1].formatted_address);
              	jQuery("#inputPickup").attr("placeholder", "Please enter a pickup address");
            } else {
            	jQuery("#inputPickup").attr("placeholder", "Please enter a pickup address");
              //window.alert('No results found');
            }
          } else {
          	jQuery("#inputPickup").attr("placeholder", "Please enter a pickup address");
            //window.alert('Geocoder failed due to: ' + status);
          }
        });
    }

    //PAY WITH PAYSTACK FUNCTION
    function payWithPaystack(a,b,c,d){
    	//CLOSE SWAL MODAL WINDOW
        swal.close();
        //
	    var handler = PaystackPop.setup({
	      key: 'pk_test_04d834da910bc22b29e727272aafab08943f0ad5',
	      email: c,
	      amount: b,
	      ref: a,
	      metadata: {
	         custom_fields: [
	            {
	                display_name: "Mobile Number",
	                variable_name: "mobile_number",
	                value: d
	            }
	         ]
	      },
	      callback: function(response){
	          alert('success. transaction ref is ' + response.reference);
	      },
	      onClose: function(){
	          	//SET BUTTON DEFAULT STATE
	            jQuery(".btn-fund-wallet").removeClass("disabled");
	            jQuery(".btn-fund-wallet").removeClass("ng-loading");
	            //ENABLE AMOUNT FIELD
	        	jQuery("#inputAmount").removeAttr('disabled');
	        	//ALERT ERROR
                swal({   
                    title: "Payment Window Closed.",   
                    text: "Looks like you closed the Payment Window. Please try again.",
                    type: "error"
                });
	      	}
	    });
	    handler.openIframe();
	  }

    
    //PRE-FUND WALLET FUNCTION
	jQuery(document).on("click", ".btn-fund-wallet", function(){

		//GENERATE TRANSACTION ID
        var transactionRef = randomString(7, '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    	//SET BUTTON LOADING STATE
        jQuery(".btn-fund-wallet").addClass("disabled");
        jQuery(".btn-fund-wallet").addClass("ng-loading");

        //DISABLE AMOUNT FIELD
        jQuery("#inputAmount").attr('disabled','disabled');

		//VALIDATE FIELDS > PRE-FUND WALLET AMOUNT
        if(jQuery("#inputAmount").val()=='' || !is_digits(jQuery("#inputAmount").val()) || jQuery("#inputAmount").val() <= 1999 ){
        	//SET BUTTON DEFAULT STATE
            jQuery(".btn-fund-wallet").removeClass("disabled");
            jQuery(".btn-fund-wallet").removeClass("ng-loading");
            //ENABLE AMOUNT FIELD
        	jQuery("#inputAmount").removeAttr('disabled');
            //ALERT ERROR
            swal("Invalid Amount!", "Please enter a minimum amount of NGN2,000", "warning");
        }
        else{
        	//Convert Amount To KOBO
        	var amnt = jQuery("#inputAmount").val();
        	amnt = amnt * 100;
        	payWithPaystack(transactionRef, amnt, jQuery("#inputUserEmail").val(), jQuery("#inputUserMobile").val());
        }
	});
	
	//CHECK IF PAGE IS REQUEST > RUN GMAPS FUNCTION
    if(document.getElementById('current_page_request')){
    	
    	//Initiate Gmaps Autocomplete
    	var autocomplete_pickup = new google.maps.places.Autocomplete((document.getElementById('inputPickup')),{types: ['geocode']});
    	var autocomplete_dropoff = new google.maps.places.Autocomplete((document.getElementById('inputDropoff')),{types: ['geocode']});
    	
    	//RUN GMaps Function
    	requestMap();
    }

    //CHECK IF PAGE IS REQUEST > RUN GMAPS FUNCTION
    if(document.getElementById('current_page_track')){

    	//RUN GMaps Function
    	//trackMap();
    }

}(window.jQuery);