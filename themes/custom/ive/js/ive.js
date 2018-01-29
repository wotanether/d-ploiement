(function($, Drupal, drupalSettings) {
	//ExternalLink
	Drupal.behaviors.externalLink = {
		attach:function(context, settings){
			$("a[href^='http']", context).attr("target", "_blank").addClass('external_link');
		}
	}
	//blockCollapse
	Drupal.behaviors.blockCollapse = {
		attach:function(context, settings){
			$(".sidebar .block h2", context).click(function(){
				$(this).siblings( ".content" ).slideToggle('fast');
            });
		}
	}

/*(function($, Drupal, drupalSettings) {
	$(document).ready(function(){

		$("a[href^='http']").attr("target", "blank");
		$(".node a[href^='http']").addClass('external_link');
		$(".sidebar .block h2").click(function(){
			$(this).siblings( ".content" ).slideToggle('fast');

		})
	
	});*/

})(jQuery,Drupal, drupalSettings);