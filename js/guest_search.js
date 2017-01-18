$(function(){
	//References
	var pages = $(".pagination ul li a");
	var loading = $("#loading-message");
	var featloading = $("#featured-loading-message");
	var content = $("#content #search-results");
	var featcontent = $("#featured-content #featured-search-results");
	var leasecontent = $("#leasing-content #leasing-search-results");
	
	//var width = $(document).width();
	//alert(width)
	
	// Hover effect on search results page
	$(document).on('mouseenter', ".search-results .listing-wrapper", function() {        
		 $(this).addClass("hover"); 
    });
	$(document).on('mouseleave', ".search-results .listing-wrapper", function() {        
		 $(this).removeClass("hover"); 
    });
	
	$(document).on('click', '.layout-selection li', function(e) {
		e.preventDefault();
		var layout = $(this).data('layout');
		$('.layout-selection li').removeClass('selected');
		$(this).addClass('selected');
		
		$('.search-results').removeClass('list photo').addClass(layout);
	});
	
	
	$(document).on('click', '.favorite-link.member', function(e) {
		e.preventDefault();
		var $that = $(this);
		var listingId = $that.data('listingid');
		$.ajax({
				type: "GET",
				cache: false,
				dataType : "json",
				url: "../add_favorite.php?listing_id="+listingId,
				success: function(msg){
					if(msg.succsess == true){
						if( msg.status ){
							var message = msg.status;
						}else{
							var message = 'Saved!';
						}

						$that.empty().html('<strong>' + message + '</strong>');
					}
									
				}
			});
		
	});
	
	
	
	
	// parseUri 1.2.2
	parseUri.options = {
		strictMode: false,
		key: ["source","protocol","authority","userInfo","user","password","host","port","relative","path","directory","file","query","anchor"],
		q:   {
			name:   "queryKey",
			parser: /(?:^|&)([^&=]*)=?([^&]*)/g
		},
		parser: {
			strict: /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,
			loose:  /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/)?((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/
		}
	};
	
	function parseUri(str) {
		var	o   = parseUri.options,
			m   = o.parser[o.strictMode ? "strict" : "loose"].exec(str),
			uri = {},
			i   = 14;

		while (i--) uri[o.key[i]] = m[i] || "";

		uri[o.q.name] = {};
		uri[o.key[12]].replace(o.q.parser, function ($0, $1, $2) {
			if ($1) uri[o.q.name][$1] = $2;
		});

		return uri;
	}
	
	// Pre-select Property Type Dropdown Upon Page Load
	$("#property_type_id option").each(function(key,item){
		urlValue = $(item).attr("data-url-value");
		attrValue = $(item).attr("value");
		if(urlValue == attrValue){                
			$(item).attr("selected","selected");        
		}
	});
	
	//show loading bar
	var showLoading = function(loadingId){
		loadingId.css({display:"block"});
	};
	
	//hide loading bar
	var hideLoading = function(loadingId){		
		loadingId.css({display:"none"});
	};
	
	// Load Featured Results 
	var featuredResults = function() {
		if(featcontent.length){		
			//showLoading(featloading);
			var location = window.location.href.split("?");
			var params = location.length == 2?location[1]:'';		
			var perpage = $("#perpage").attr("data-value");
			var dataurl = "perpage=" + perpage + "&" + params;
			$.ajax({
				type: "GET",
				cache: false,
				url: "/return-guest-featured-results.cfm",  
				data: dataurl,
				success: function(msg){
					featcontent.empty().html(msg);
					//hideLoading(featloading);					
			   }
			});
		}
	};

	// Load Leasing Results 
	var leasingResults = function() {
		if(leasecontent.length){					
			var location = window.location.href.split("?");
			var params = location.length == 2?location[1]:'';					
			var dataurl = "perpage=" + perpage + "&" + params;
			$.ajax({
				type: "GET",
				cache: false,
				url: "/return-leasing-results.cfm",  
				data: dataurl,
				success: function(msg){
					leasecontent.empty().html(msg);					
			   }
			});
		}
	};	

	// Load results for pagination links
	
//		$( document ).on( "click", ".pagination ul li a",function(){
//
//			//scroll to top
//			$('html, body').animate({scrollTop:220}, 400);
//
//			//show the loading bar
//			showLoading(loading);
//
//			//Highlight current page number
//			pages.removeClass("currentpage");
//			$(this).addClass("currentpage");
//
//			//Load content
//			var pageNum = $(this).attr("data-pageid");
//			pageNum = parseInt(pageNum) > 0?parseInt(pageNum):1;
//			var location = window.location.href.split("?");
//			var params = location.length == 2?location[1]:'';
//			var totalrecords = $("#totalrecords").attr("data-value");
//			var resultlayout = $("#result-layout").attr("data-value");
//			var perpage = $("#perpage").attr("data-value");
//			var dataurl = "pagenum=" + pageNum + "&resultlayout=" + resultlayout + "&totalrecords=" + totalrecords + "&perpage=" + perpage + "&" + params;
//
//			$.ajax({
//			   type: "GET",
//			   cache: true,
//			   url: "/return-guest-results.cfm",
//			   data: dataurl,
//			   success: function(msg){
//				   content.empty().html(msg);
//				   hideLoading(loading);
//
//				   // Set current page number as hash value
//				   if(params.indexOf("#") > -1) {
//					   params = params.substring(0,params.indexOf("#"));
//				   }
//				   window.location.hash="pagenum=" + pageNum;
//
//				   //Set last search value in cookie to use as return link
//				   var lastsearchurl = "http://" + window.location.hostname + window.location.pathname + "?" + params + window.location.hash;
//				   $.cookie("lastsearch", lastsearchurl, { path: "/", expires: 60 });
//
//				   //Load leasing results
//				   leasingResults();
//
//				   //Load featured results
//				   featuredResults();
//
//				   $("a[rel^='prettyPhoto']").prettyPhoto({deeplinking:false});
//
//				   //Draw Map
//					//mapinit('/return-guest-results-JSON.cfm?'+dataurl);
//			   }
//			});
//			return false;
//		});
	
	

	// Default 1st Page
	if(content.length){
		showLoading(loading);
		var pageNum = 1;
		
		//If URL param has pagenum then use that pagenum
		if(window.location.hash.indexOf("#") > -1){
			var anchors = parseUri(window.location.hash).anchor.split("=");
			if(anchors.length){
				var pageNum = anchors[1];
			}
		}	
		var location = window.location.href.split("?");
		var params = location.length == 2?location[1]:'';	
		var totalrecords = $("#totalrecords").attr("data-value");
		var resultlayout = $("#result-layout").attr("data-value");
		var perpage = $("#perpage").attr("data-value");
		var dataurl = "pagenum=" + pageNum + "&resultlayout=" + resultlayout  + "&totalrecords=" + totalrecords + "&perpage=" + perpage + "&" + params;
		
		//Load leasing results
		leasingResults();
		
		//Load featured results
		featuredResults();
		
		$.ajax({
			type: "GET",
			cache: false,
			url: "/return-guest-results.cfm",  
			data: dataurl,
			success: function(msg){
				content.empty().html(msg);
				hideLoading(loading);
				
				// Set current page number as hash value
				if(params.indexOf("#") > -1) {
					params = params.substring(0,params.indexOf("#"));
				} 
				window.location.hash="pagenum=" + pageNum;		   

				//Set last search value in cookie to use as return link
				var lastsearchurl = "http://" + window.location.hostname + window.location.pathname + "?" + params + window.location.hash;
				$.cookie("lastsearch", lastsearchurl, { path: "/", expires: 60 });
				
			    $("a[rel^='prettyPhoto']").prettyPhoto({deeplinking:false});
				
				//Draw Map
				//mapinit('/return-guest-results-JSON.cfm?'+dataurl);
		   }
		});
	}
	
	var mapinit = function(dataUrl) {
		if (GBrowserIsCompatible()) {
			var $loading = $("#map-loading");
			$loading.show();
			
			var map = new GMap2(document.getElementById("map_canvas"));
			map.enableScrollWheelZoom();
			loadMarkers(map,dataUrl,$loading);
		}
	}
	
	var createMarker = function(point, id, featured, llid) {
		var baseIcon = new GIcon(G_DEFAULT_ICON);
		var wsr_icon = new GIcon(baseIcon);
		if(llid == 1356577) {
			wsr_icon.image = "/images/sign_markerBlue.png";
		} else if(featured == 1) {
			wsr_icon.image = "/images/sign_markerGold.png";
		} else {
			wsr_icon.image = "/images/sign_marker.png";
		}
		wsr_icon.shadow = "/images/sign_shadow.png";
		wsr_icon.iconSize = new GSize(39,30);
		wsr_icon.shadowSize = new GSize(50,30);
		wsr_icon.iconAnchor = new GPoint(25,30);
		wsr_icon.infoWindowAnchor = new GPoint(40,5);

		// Set up our GMarkerOptions object
		markerOptions = { icon:wsr_icon };
		var marker = new GMarker(point, markerOptions);

		GEvent.addListener(marker, "click", function() {			
			$.ajax({
			   type: "POST",
			   url: "/mapListingHTML.cfm",
			   data: "listing_id="+id,
			   dataType: "html",
			   success: function(msg){
				 marker.openInfoWindowHtml(msg);
			   }
			});
	  });
	  return marker;
	}
	
	var clearMap = function(map) {
	   map.clearOverlays();
	}        
 
	var loadMarkers = function(map,dataUrl,$loading) {
		if(typeof dataUrl != 'undefined'){
			GDownloadUrl(dataUrl, function(data) {
				
				// Clear Old Markers				
				clearMap(map);
				$loading.hide();

				var xml = GXml.parse(data);
				var metaData = xml.documentElement.getElementsByTagName("metadata");
				var error = parseFloat(metaData[0].getAttribute("error"));
				var zoomlevel = parseFloat(metaData[0].getAttribute("zoomlevel"));
				
				if(error == 1) {
					map.setCenter(new GLatLng(33.982972,-118.383021), 7);
					map.addControl(new GSmallMapControl ());
					map.addControl(new GScaleControl());
					map.addControl(new GMapTypeControl());

					var $address = $("#address");
					$address.css('background','#FF3');
					$address.val('Enter Valid Address');
				} else {					
					var xmid = parseFloat(metaData[0].getAttribute("xmid"));
					var ymid = parseFloat(metaData[0].getAttribute("ymid"));
					var zoomlevel = parseFloat(metaData[0].getAttribute("zoomlevel"));
					var recordcount = parseFloat(metaData[0].getAttribute("recordcount"));

					if(recordcount > 0) {						
						map.setCenter(new GLatLng(ymid,xmid), zoomlevel);
						map.addControl(new GSmallMapControl ());
						map.addControl(new GScaleControl());
						map.addControl(new GMapTypeControl());

						var markers = xml.documentElement.getElementsByTagName("marker");
						for (var i = 0; i < markers.length; i++) {
							var lat = parseFloat(markers[i].getAttribute("lat"));
							var lng = parseFloat(markers[i].getAttribute("lng"));
							var id = parseFloat(markers[i].getAttribute("id"));
							var featured = parseFloat(markers[i].getAttribute("featured"));
							var llid = parseFloat(markers[i].getAttribute("llid"));
							var latlng = new GLatLng(lat,lng);
							map.addOverlay(createMarker(latlng, id, featured, llid));
						}

					} else {
						alert('No results found. Please try searching with different criterias.');
						map.setCenter(new GLatLng(33.982972,-118.383021), 7);
						map.addControl(new GSmallMapControl ());
						map.addControl(new GScaleControl());
							map.addControl(new GMapTypeControl());
					}
				}
			});
		} else {			
			$loading.hide();
			map.setCenter(new GLatLng(33.982972,-118.383021), 7);
			map.addControl(new GSmallMapControl ());
			map.addControl(new GScaleControl());
			map.addControl(new GMapTypeControl());

		}
	}	
});	

function submitForm() {
	ColdFusion.Ajax.submitForm('guestUpdateForm', '/asyncFormHandler.cfm', callback,errorHandler);
}

function callback(text)
{
	ColdFusion.Window.hide("guestsfreealerts");
	var msgwrapper = document.getElementById("msgwrapperId");
	var msg = document.getElementById("msgId");
	msgwrapper.style.display = 'block';

}

function errorHandler(code, msg)
{
	alert("Error!!! " + code + ": " + msg);
}

	
