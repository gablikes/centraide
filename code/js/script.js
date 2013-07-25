jQuery(document).ready(function() {
	
	//jQuery( "#tabs" ).tabs();

	jQuery('#tabs').easyResponsiveTabs({
         type: 'default',           
         width: 'auto',
         fit: true
    });

	jQuery("#fDon").formToWizard({ 
		submitButton: 'SaveAccount',
		nextLabel: "Passer à l'étape suivante",
		prevLabel: "Retourner à l'étape précédente" 
	})

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

	
	$s = $('#montant').slider({
		animate: true,
		value: 20,
		min: 0,
		max: 40,
		step: 5,
		range: 'min',
		slide: function(event, ui) {
			var prix = ui.value;
			var output =  prix + " $ ";
			output += "<span>(" + prix*12 + " $ par année)</span>";
			jQuery('#priceBox').html(output);
	    }
	});

	jQuery('#priceBox').html('20 $<span>(240 $ par année)</span>');
	jQuery('#priceBox').appendTo(jQuery('.ui-slider-handle'));


});
