$(window).on("load", function()
{
	$(".projectWrapper img").each(function() {
		$(this).attr('init_width', $(this).outerWidth());
	});

	$(window).resize(windowResize).trigger('resize');

	$(".projectWrapper img").click(function() {
		location.href = $(this).attr('src');
	});
});

function windowResize()
{
	var contentWidth = $("#content").outerWidth();
	$(".projectWrapper img").each(function() {
		$(this).outerWidth(min($(this).attr('init_width'), contentWidth - 100));
	});
}

function min(a, b)
{
	return (a < b) ? a : b;
}
