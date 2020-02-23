///js
$(document).ready(function () {
	
	$(".item-dashboard").on("click", function () {
		let contents = $(".main-content_item");
		let key = $(this).data("show");
		contents.addClass("hidden");
		// active tab content
		$(`#${key}`).removeClass("hidden");
	})
})
