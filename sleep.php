<?php
$page = $_SERVER['PHP_SELF'];
$sec = "60"; //refresh
date_default_timezone_set("America/Los_Angeles");

?>
<html>
    <head>
    <!--<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"> -->
    </head>

<?php

if (strtotime("now") < strtotime("06:45:00")) { //before 6:45 sleep
        $bgcolor = "#000000";
        $fontcolor = "#990000";
        $text = "Go to Sleep";
} else if (strtotime("now") < strtotime("07:00:00")) { /// before 7am -- stay in bed
        $bgcolor = "#ffffba";
        $fontcolor = "#7f6000";
        $text = "Stay in bed";
} else if (strtotime("now") < strtotime("12:00:00")) { /// before 12pm -- wake up
        $bgcolor = "#baffc9";
        $text = "Wake up!";
        $fontcolor = "#274e13";
} else if (strtotime("now") < strtotime("15:45:00")) { // before 3:15p -- go to sleep
        $bgcolor = "#000000";
        $fontcolor = "#990000";
        $text = "Go to Sleep";
} else if (strtotime("now") < strtotime("16:00:00")) { /// before 3:30p -- stay in bed
        $bgcolor = "#ffffba";
        $fontcolor ="#7f6000";
        $text = "Stay in bed";
} else if (strtotime("now") < strtotime("19:00:00")) { /// before 7pm -- wake up
        $bgcolor = "#baffc9";
        $fontcolor = "#274e13";
        $text = "Wake up!";
} else {  ////after 7pm
        $bgcolor = "#000000";
        $fontcolor = "#FB2D2D";
        $text = "Go to Sleep";
}


// $text .= " min:".date('i', strtotime("20:00:00")-strtotime("now"));

?>
<body style="background-color:<?php echo $bgcolor; ?>; font-size:1100%; color:<?php echo $fontcolor; ?>"><center>
    <?php echo date("g:i A", time()); ?>
<br>
<?php echo $text; ?></center>
    </body>
</html>                                                                                                                                                           53        1,1           All
