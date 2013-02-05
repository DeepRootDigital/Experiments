<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php

        function gold_scrap_cal($purepercent) {
            if (isset($_GET["10kqty"])) {
                $qty = $_GET["10kqty"];
            } else {
                $qty = 0;
            }
            $modprice = 0;
            $goldfeed = file_get_contents('http://gold-feed.com/iframe/gold-feed-plain.php');
            $metalprice = $goldfeed / 28.3495;
            $preresult = number_format($metalprice, 1);
            $result2 = $preresult * $purepercent / 100;
            $result = number_format($result2, 1) * $qty + $modprice;
            return $result;
        }
        ?>
        <link href="style.css" type="text/css" rel="stylesheet" >
        <div id="goldgrabber">
            <form action="#" method="get" />
            <div class="int">
                <div class="row">
                    <input type="text" name="10kqty" value="<?php if (isset($_GET["10kqty"])) {
            echo $_GET["10kqty"];
        } else {
            echo 0;
        } ?>" class="qty"><input type="text" class="payout" value="<?php echo gold_scrap_cal(50); ?>">
                </div>
                <div class="row">
                    <input type="text" name="14kqty" value="" class="qty"><input type="text" class="payout" value="<?php echo gold_scrap_cal(50); ?>">
                </div>
                <div class="row">
                    <input type="text" name="18kqty" value="" class="qty"><input type="text" class="payout">
                </div>
                <div class="row">
                    <input type="text" name="22kqty" value="" class="qty"><input type="text" class="payout">
                </div>
                <div class="row">
                    <input type="text" class="qty"><input type="text" class="payout">
                </div>
            </div>
            <input type="submit">

            <input type="text" class="payout" name="payout">

            </form>
        </div>

    </body>
</html>