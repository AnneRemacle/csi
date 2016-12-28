$(document).ready(function() {


	$(".welcome__button").on("click", function(e){
		e.preventDefault();
		$("html, body").animate({
		 	scrollTop: $( $.attr(this, 'href') ).offset().top
		 }, "slow");
	})
	
});