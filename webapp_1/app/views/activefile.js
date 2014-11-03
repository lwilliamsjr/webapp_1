$(document).ready(function(){
	event.preventDefault()
$("li").click(function() {
    $("li").removeClass("active");
    $(this).addClass("active");
	});
});