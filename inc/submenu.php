<?php
//global $notification;

add_action('admin_init', 'get_admin_init_callback');

function get_admin_init_callback(){
    if(isset($_GET['action']) && $_GET['action'] == 'save-form' && $_POST['action'] && $_POST['action'] == 'submit-coming-soon'){

        $new_update_value = array(
            'start-date' => $_POST["startdate"],
            'set-font' => $_POST["setfont"],
            'set-bg-color' => $_POST["setbgcolor"],
            'bg-image' => $_POST["bgimage"],
            'font-color' => $_POST["fontcolor"],
            'label-color' => $_POST["labelcolor"]
        );

        update_option('getValue', maybe_serialize($new_update_value));
        $notification = "Success!";
    }
}

add_action( 'admin_menu', 'hek_coming_soon_menu' );
function hek_coming_soon_menu() {
    add_options_page(
        'Coming Soon',
        'Coming Soon',
        'manage_options',
        'coming-soon',
        'hek_coming_soon'
    );
}

function hek_coming_soon(){
    global $wp;
    $current_url = admin_url( "/options-general.php?page=coming-soon" )
    ?>
    <div class="container">
        <div class="row">
            <?php if(isset($notification) && !empty($notification)){?>
            <div class="alert alert-success">
                <strong>Success!</strong> Indicates a successful or positive action.
            </div>
        <?php } ?>
            <h4><?php echo __('Setup Color/ Font and Background Image', 'hek_coming_soon') ?></h4>
            <hr/>
            <form method="post" action="<?php echo $current_url ?>&action=save-form">
                <div class="col-md-4">
                    <div class="form-group">
                        <label><?php echo __('Set Counter Date', 'hek_coming_soon') ?></label>
                        <p>Set The counter Date</p>
                        <input type="text" class="custom-date set-width" name="startdate" value="" />
                    </div>

                    <div class="form-group">
                        <label><?php echo __('Font Size', 'hek_coming_soon') ?></label>
                        <p>The counter font size in pixels unit</p>
                        <input type="text" name="setfont" value=""  class="set-width custom-font">
                    </div>

                    <div class="form-group">
                        <label><?php echo __('Counter Background Color', 'hek_coming_soon') ?></label>
                        <p>The counter background color</p>
                        <input type="text" id="Counter_Background_Color" data-default-color="" name="setbgcolor" />
                    </div>

                    <div class="form-group">
                        <label><?php echo __('Counter Background Image', 'hek_coming_soon') ?></label>
                        <p>The counter background image</p>
                        <button class="button button-primary set-width" id="image-uploader">Add Image</button>
                        <input type="hidden" id="save-link" name="bgimage">
                    </div>

                    <div class="form-group">
                        <label><?php echo __('Counter Color', 'hek_coming_soon'); ?></label>
                        <p>The counter color</p>
                        <input type="text"  id="Counter_Font_Color" data-default-color="#effeff" name="fontcolor" />
                    </div>

                    <div class="form-group">
                        <label><?php echo __('Label Color', 'hek_coming_soon') ?></label>
                        <p>The counter Label Color</p>
                        <input type="text"  id="Label_Color" data-default-color="#effeff" name="labelcolor" />

                    </div>
                    <input type="hidden" name="action" value="submit-coming-soon">
                    <input type="submit" class="btn btn-primary" value="Save"/>
                </div>
            </form>
                <div class="col-md-8">
                    <div class="set-image set_background">
                        <img class="set_background">
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
    <?php
}