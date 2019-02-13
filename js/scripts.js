/*SCRIPTS HERE*/
$(document).ready(function(e) {
	/******************* MENU ********************/
	$(".toggle-menu").click(function(){
		$(this).find("i").toggleClass('hidden');
		$("#container-menu").slideToggle();
	});
});