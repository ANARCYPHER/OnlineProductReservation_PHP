jQuery(document).ready( function() {
	
		jQuery('.parent').hover( function() {
	
		jQuery(this).find('.d_down').fadeIn();	
	
	},function() {
	
		jQuery(this).find('.d_down').hide();
	
	})
	
	
	
	
	jQuery(".showcart").hide();

	jQuery(".cats li").hover( function() {
	
		jQuery(this).animate({ opacity: 0.8 }, 400);
		
		jQuery(this).find('.showcart').fadeIn();
	
	}, function() {
	
		jQuery(this).animate({ opacity: 1}, 400);
		
		jQuery(".showcart").fadeOut();
	
	})
	
	
	
})
