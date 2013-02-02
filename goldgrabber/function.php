<?php

function gold_scrap_cal($qty, $purepercent) {
    $goldfeed = file_get_contents('http://gold-feed.com/iframe/gold-feed-plain.php');
    $metalprice = $goldfeed / 28.3495;
    $preresult = number_format($metalprice, 1);
    $result2 = $preresult * $purepercent / 100;
    $result = number_format($result2, 1) * $qty;
    return $result;
}
echo gold_scrap_cal(1, 41.6);
?>

<?php echo gold_scrap_cal(1, 41.6); ?> 


<div class="goldgrabber">
    <form action="process.php" method="get" />
		
	</form>
</div>