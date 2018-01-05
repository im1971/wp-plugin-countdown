
jQuery(document).ready(function($){
    function makeTimer() {

            var passingDate = pass_value;
            var endTime = new Date(passingDate);
        // var endTime = new Date( "1/25/2018" );
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

});