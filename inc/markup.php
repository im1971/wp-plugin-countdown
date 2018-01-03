<?php

$data = maybe_unserialize(get_option("getValue"));

print_r($data);

print_r(maybe_unserialize(get_option("start-date")))
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
