$(document).ready(function() {
	
	$(".fade-me").css("display", "none");

    $(".fade-me").fadeIn(1000);
    
	$("a.transition").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$(".fade-me").fadeOut(1000, redirectPage);		
	});
		
	function redirectPage() {
		window.location = linkLocation;
	}
	
});
