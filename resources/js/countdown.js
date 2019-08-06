/*
	COUNTDOWN LOGIC
*/

var countdown = {
    init: function () {
        $html = document.getElementsByTagName('html')[0];
        countdown.cE();
        countdown.eL();
    },
    cE: function () {
        countdown.countdownEl       = $('#countdown');
        countdown.countdownWrapper  = $('.countdown-copy');
        countdown.weddingDate       = new Date("Oct 11, 2019 17:00:00").getTime();
    },
    eL: function(){
        // Calculate on page load
        $(document).ready(countdown.calculateDate);
    },
    calculateDate: function(){
        // Get today's date and time
        var today = new Date().getTime();

        console.log(today);

        // Find the distance between now and the count down date
        var distance = countdown.weddingDate - today;

        // Time calculations for days
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));

        // Display results
        $(countdown.countdownEl).text(days);

        // If the count down is finished, write some text
        if (distance === 0) {
            countdown.countdownWrapper.innerHTML = "THE MOST DELIGHTFUL MARRIAGE OF ALL TIME HAPPENS TODAY!!!";
        }
    }
}
