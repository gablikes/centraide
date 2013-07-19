jQuery(document).ready(function() {
	
	jQuery( "#tabs" ).tabs();

	jQuery('.division select').selectBoxIt({
		showEffect: "fadeIn",
    	showEffectSpeed: 200,
    	hideEffect: "fadeOut",
    	hideEffectSpeed: 200,
    	downArrowIcon: "icon-hand-down"
	});

	jQuery('.pagination').pajinate({
		num_page_links_to_display : 3,
		items_per_page : 6,
		nav_label_prev: 'Précédente',
		nav_label_next: 'Suivante'
	});


	jQuery('.bt-suivie').click(function(){
		jQuery(this).toggleClass('select');
		return false;
	});



});