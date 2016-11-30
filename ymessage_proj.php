<?php require_once('header.php'); ?>
	<div id='pageDesc'>
		<div class='row'>
			<div class='cell top'>
				<div class='table'>
					<div class='title row'>YMessage</div>
					<div class='subtitle row'>A campus-wide solution for simplifying and securing communication between students and administrative entities</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='content'>
	<div class='projectWrapper'>
		<div class='center'><img src='./img/ymessage/std_view.png'></div>
		<div class='center'><img src='./img/ymessage/ymessage_reply_message_view.png'></div>
		<div class='center'><img src='./img/ymessage/std_overview.png'></div>
		<div class='center'><img src='./img/ymessage/appt_view.png'></div>
	</div>
</div>

<script>

$(document).ready(function()
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

</script>
<?php require_once('footer.php'); ?>
