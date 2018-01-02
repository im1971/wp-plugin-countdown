<?php

    $startdate = $setfont = $setbgcolor = $bgimage = $fontcolor = $labelcolor = '';

    $startdate = $_POST["startdate"];
    $setfont = $_POST["setfont"];
    $setbgcolor = $_POST["setbgcolor"];
    $bgimage = $_POST["bgimage"];
    $fontcolor = $_POST["fontcolor"];
    $labelcolor = $_POST["labelcolor"];


    update_option('start-date', $startdate);
    update_option('set-font',$setfont);
    update_option('set-bg-color',$setbgcolor);
    update_option('bg-image',$bgimage);
    update_option('font-color',$fontcolor);
    update_option('label-color',$labelcolor);


    $setDate = get_option('start-date');
    $setFont = get_option('set-font');
    $setBgColor = get_option('set-bg-color');
    $setBgImage = get_option('bg-image');
    $seFontColor = get_option('font-color');
    $setLableColor = get_option('label-color');
?>


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="set-image set_background">
                <img src=''>
                <div id="timer" class="center-block">
                    <h1 class="above-font-color">Text Above Timer Will be Here</h1>
                    <div class="timer" id="days">00</div>
                    <div class="timer" id="hours">00</div>
                    <div class="timer" id="minutes">00</div>
                    <div class="timer" id="seconds">00</div>
                </div>
            </div>
        </div>
    </div>
</div>
