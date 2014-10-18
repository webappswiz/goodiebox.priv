countIt();

function countIt(year, month, day, hours, minutes, seconds) {
    now = new Date();
    start_date = new Date(2014, 9, 20, 12, 00, 00);
    now = now.getTime()/1000;
    start = start_date.getTime()/1000;
    if(now < start){
        year = 2014;
        month = 9;
        day = 20;
        hours = 12;
        minutes = 00;
        seconds = 00;
        status = 0;
    } else {
        start = new Date(2014, 9, 20, 12, 00, 00);
        start.setDate(start.getDate() + 8);
        year = start.getFullYear();
        month = start.getMonth();
        day = start.getDate();
        hours = 00;
        minutes = 00;
        seconds =00;
        status = 1;
    }
    setTimeout(function () {
        endDate = new Date(year, month, day, hours, minutes, seconds, 00);
        thisDate = new Date();
        var daysLeft = parseInt((endDate - thisDate) / 86400000);
        var hoursLeft = parseInt((endDate - thisDate) / 3600000);
        var minutsLeft = parseInt((endDate - thisDate) / 60000);
        var secondsLeft = parseInt((endDate - thisDate) / 1000);

        seconds = minutsLeft * 60;
        seconds = secondsLeft - seconds;
        seconds = (seconds < 10) ? 0 + seconds : seconds;

        minutes = hoursLeft * 60;
        minutes = minutsLeft - minutes;

        hours = daysLeft * 24;
        hours = (hoursLeft - hours) < 0 ? 0 : hoursLeft - hours;
        days = daysLeft;
        startCount(days, hours, minutes, seconds,status);
    }, 100);
}

function startCount(days, hours, minutes, seconds,status) {
    $('#days').html(days);
    seconds = (seconds) < 10 ? '0' + seconds : seconds;
    minutes = (minutes) < 10 ? '0' + minutes : minutes;
    hours = (hours) < 10 ? '0' + hours : hours;
    if(status==0){
        $('li','.lock').css('background','url("/assets/img/lock-close.png") no-repeat left center');
        $('li','.lock').html('Hamarosan nyitunk!');
    } else {
        $('li','.lock').css('background','url("/assets/img/lock-open.png") no-repeat left center');
        $('li','.lock').html('Nyitva vagyunk!');
    }
    $('#hours').html(hours + ':' + minutes + ':' + seconds);
    countIt();
}