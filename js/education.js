/*
 * Init
 */
$(document).ready(function()
{
	$(".schoolBtn").click(function()
	{
		var id = $(this).attr('school');
		$("#" + id).toggle();
		$(this).text($(this).text() == "Hide Courses" ? "Show Courses" : "Hide Courses");
	});	
});
