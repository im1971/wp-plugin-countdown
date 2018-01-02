
jQuery(document).ready(function($){
    function makeTimer() {
        //date picker
        $('.custom-date').datepicker({
            dateFormat : 'mm/dd/yy',
        });

        var endTime = new Date( $('.custom-date').val() );
        var endTime = (Date.parse(endTime)) / 1000;
        var now = new Date();
        var now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }

        $("#days").html(days + "<span class='displaySpan'></span>");
        $("#hours").html(hours + "<span class='displaySpan'></span>");
        $("#minutes").html(minutes + "<span class='displaySpan'></span>");
        $("#seconds").html(seconds + "<span class='displaySpan'></span>");

    }

    setInterval(function() { makeTimer(); }, 1000);

    $('.custom-font').change(function() {
        var value = $(this).val();
        $('.timer').css({'font-size': value+'px'});
    });

    //color picker
    $('#Counter_Background_Color').wpColorPicker({
        change: function(event, ui){
            var bgColor = ui.color.toString();
            $('.timer').css({backgroundColor: bgColor});
        }
    });

    //counter font color
    $('#Counter_Font_Color').wpColorPicker({
        change: function(event, ui){
            var fontColor = ui.color.toString();
            $('.timer').css({color: fontColor});
        }
    });

    //label color
    $('#Label_Color').wpColorPicker({
        change: function(event, ui){
            var labelColor = ui.color.toString();
            $('.above-font-color').css({color: labelColor});
        }
    });


    //image uploader
    $('button#image-uploader').on("click",function (e) {
        e.preventDefault();
        var imageUploader = wp.media({
            'title' : 'Set Counter Background Image',
            'multiple': false
        });
        imageUploader.open();

        imageUploader.on('select', function () {
           var image = imageUploader.state().get('selection').first().toJSON();
           var link = image.url;

           $('input#save-link').val(link);
           $('.set-image img').attr('src',link);
        });
    });

    $('.save-settings').on('click',function () {
        alert("oops! The save button is not working this time! ");
    })
});