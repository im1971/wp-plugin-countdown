<?php

$data = maybe_unserialize(get_option("getValue"));

$font_size = $data['set-font'];
$timer_bg_color = $data['set-bg-color'];
$timer_font_color = $data['font-color'];
$label_color = $data['label-color'];
$bg_image = $data['bg-image'];


?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="">
                <img class="front-image-postion" src='<?php echo $bg_image ?>'>
                <div id="timer" class="center-block">
                    <h1 class="font-style">Text Above Timer Will be Here</h1>
                    <div class="timer" id="days">00</div>
                    <div class="timer" id="hours">00</div>
                    <div class="timer" id="minutes">00</div>
                    <div class="timer" id="seconds">00</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--inline custom css for counter-->
<?php
$custom_css = ".font-style{color:{$label_color};}
               .timer{font-size: " . $font_size . "px;
               background-color: {$timer_bg_color};
               color: {$timer_font_color};
               } 
";

wp_register_style( 'cod-inline-style', false);
wp_enqueue_style( 'cod-inline-style' );
wp_add_inline_style( 'cod-inline-style', $custom_css );
?>


<!--pass value for counter-->
<script type="text/javascript">
    var pass_value = '';
    var pass_value = <?php echo json_encode($data['start-date']); ?>;
</script>
