<?php require_once('header.php'); ?>
	<div id='pageDesc'>
		<div class='row'>
			<div class='cell top'>
				<div class='table'>
					<div class='title row'>Online Academic Improvement Plan</div>
					<div class='subtitle row'>The online Academic Improvement Plan (AIP) project replaced a cumbersome interdepartmental paper process with a seamless online experience</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='content'>
	<div class='projectWrapper'>
		<div class='center'><img src='./img/aip/top-obstacles.png'></div>
		<div class='center'><img src='./img/aip/top-solutions.png'></div>
		<div class='center'><img src='./img/aip/summary.png'></div>
		<div class='center'><img src='./img/aip/admin.png'></div>
	</div>
</div>

<script>

$(document).ready(function()
{
	$(window).resize(windowResize).trigger('resize');
	$(".projectWrapper img").click(function() {
		location.href = $(this).attr('src');
	});
});

function windowResize()
{
	var contentWidth = $("#content").outerWidth();
	$(".projectWrapper img").outerWidth(contentWidth - 100);
}

</script>
<?php require_once('footer.php'); ?>
