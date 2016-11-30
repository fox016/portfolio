<?php require_once('header.php'); ?>
	<div id='pageDesc'>
		<div class='row'>
			<div class='cell top'>
				<div class='table'>
					<div class='title row'>Online Discontinuance</div>
					<div class='subtitle row'>Students apply for discontinuance online, instructors are notified and provide input, and administrators manage requests with a consistent workflow</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='content'>
	<div class='projectWrapper'>
		<div class='center'><img src='./img/discontinue/future_plans.png'></div>
		<div class='center'><img src='./img/discontinue/future_plans_mobile.png'></div>
		<div class='center'><img src='./img/discontinue/admin.png'></div>
		<div class='center'><img src='./img/discontinue/instructor.png'></div>
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
