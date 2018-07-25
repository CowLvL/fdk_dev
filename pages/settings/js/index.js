// JavaScript
$(function() {
	if (window.location.hash) {
		updateHash();
	}
	$(window).on('hashchange', function() {
		updateHash();
	});
	$('a[data-toggle="tab"]').on({
		click: function() {
			window.location.hash = $(this).attr("href");
		}
	});
});
function updateHash() {
	var nHash = window.location.hash.substr(1);
	$(".tab-href").each(function() {
		var el = $(this);
		if (el.hasClass("active")) {
			el.removeClass("active");
			$(el.attr("href")).removeClass("active");
		}
	});
	$("#" + nHash).addClass("active");
	$('a[href*="#' + nHash + '"]').addClass("active");
}
