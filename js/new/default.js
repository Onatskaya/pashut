


$(function(){

	// $("a[rel^='prettyPhoto']").prettyPhoto({deeplinking:false});
	 
	if($('.login')) {
		$('.login').click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow"); 
			var $wrapper = $('#slidedown-content'),
				$hero = $('.hero'),
				$navbar = $('.navbar-wrapper .navbar'),
				status = $wrapper.attr('data-status');
				
			if (status === 'hide') {
				$navbar.removeClass('navbar-fixed-top');
				$('.hero').css('margin-top',0);
				$wrapper.attr('data-status', 'show');
				$('#navbar-collapse-1').removeClass('in');
				$wrapper.slideDown('slow');	
				
			} else {
				$hero.css('margin-top',42);
				$navbar.addClass('navbar-fixed-top');			
				$wrapper.attr('data-status', 'hide');
				$wrapper.slideUp('slow');
			}
			
			return false;
		});
	}
	
	if($('#notes-modal').length) {
		
		$( "#notes-modal" ).dialog({
		  autoOpen: false,
		  modal: true,
		  dialogClass: 'dualDialog',
		  show: {
			effect: "blind",
			duration: 500
		  },
		  hide: {
			effect: "explode",
			duration: 500
		  }
		});
	}
		
	$(document).on('click', '#submit_notes', function(e) {
		var $form = $('#notesForm'),
			listingId = $('#noteListingId').val(),
			$that = $('.favLink');
			
		$.ajax({
				type: "POST",
				cache: false,
				dataType : "json",
				data: $form.serialize(),
				url: "/update-clipboard.cfm?clipaction=add",
				success: function(msg){
					$( "#notes-modal" ).dialog( "close" );
					$that.empty().text('Remove from Favorites')		
				}
			});
			
		return false;
		
	});
		
	$(document).on('click', '#submit_notes_update', function(e) {
		var $form = $('#notesForm'),
			listingId = $('#noteListingId').val(),
			clipnotes = $('#clip_notes').val(),
			$that = $('[data-id="' + listingId + '"]');
			
		$.ajax({
				type: "POST",
				cache: false,
				dataType : "json",
				data: $form.serialize(),
				url: "/update-clipboard.cfm?clipaction=update",
				success: function(msg){
					$( "#notes-modal" ).dialog( "close" );
					$that.empty().text(clipnotes);
					$that.attr('clipnotes', clipnotes)					
				}
			});
			
		return false;
		
	});
	
	if($('.favLink-add')) {
		
		$( document ).on( "click", ".favLink-add",function() {
			
			var $that = $(this),
				listing_id = $that.data('id');
			
			$('#noteListingId').val(listing_id);
			$('#clip_notes').val('');
			$( "#notes-modal" ).dialog( "open" );
			
			return false;
		});
		
		$( document ).on( "click", ".notes-close",function() {
			$( "#notes-modal" ).dialog( "close" );
			return false;
		});
		
		
	}
	
	if($(' .favorite-link-clip')) {
		$( document ).on( "click", " .favorite-link-clip",function() {
			
			var $that = $(this),
				listing_id = $that.data('id'),
				notes = $that.data('clipnotes');
			
			$('#noteListingId').val(listing_id);
			$('#clip_notes').val(notes);
			$( "#notes-modal" ).dialog( "open" );
			
			return false;
		});
	}
	
		
	if($('.favLink-remove')) {
		$( document ).on( "click", ".favLink-remove",function() {
			$that = $(this);
			var listing_id = $that.data('id');
			
			$.ajax({
			  url: '/processClipboard.cfm?action=remove&listing_id=' + listing_id,
			  success: function() {
				$that.empty().text('Add to Favorites')
			  }
			});
		
			return false;
		});
	}
	
	
	if($('.navbar-toggle')) {
		$('.navbar-toggle').click(function() {
			var $wrapper = $('#slidedown-content'),			
				$navbar = $('.navbar-wrapper .navbar');
			
			$navbar.addClass('navbar-fixed-top');			
			$wrapper.attr('data-status', 'hide');
			$wrapper.slideUp('slow');
			
		});
	}	
		
	if($('.popular-areas-link')) {	
		$('.popular-areas-link').click(function() {
			var $wrapper = $('.popular-areas'),
				status = $wrapper.attr('data-status');
							
			if (status === 'hide') {
				$wrapper.attr('data-status', 'show');
				$wrapper.slideDown('slow');
			} else {		
				$wrapper.attr('data-status', 'hide');
				$wrapper.slideUp('slow');
			}
			
			return false;
		});
	}
});