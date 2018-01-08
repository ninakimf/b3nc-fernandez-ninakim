// alert("jQuery is working!")

$("li").click(function() {
	// $(this).css("color", "lightgray");
	// $(this).css("text-decoration", "line-through");

	$(this).toggleClass("completed");
});

