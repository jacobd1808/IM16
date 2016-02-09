$(function() {

	/* ====================================
		Core
	===================================== */ 

	// For Quick Debugging 
	var t = 'testing';

	$('body').on('click', '.disable', function(e) {
		e.preventDefault();
	})

	/* ====================================
		Splash Page Countdown
	===================================== */ 

	function getTimeRemaining(endtime) {
		var t = Date.parse(endtime) - Date.parse(new Date());
		var seconds = Math.floor((t / 1000) % 60);
		var minutes = Math.floor((t / 1000 / 60) % 60);
		var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
		var days = Math.floor(t / (1000 * 60 * 60 * 24));
		return {
			'total': t,
			'days': days,
			'hours': hours,
			'minutes': minutes,
			'seconds': seconds
		};
	}

	function initializeClock(id, endtime) {
	  var clock = document.getElementById(id);
	  var daysSpan = clock.querySelector('.countdown-days');
	  var hoursSpan = clock.querySelector('.countdown-hours');
	  var minutesSpan = clock.querySelector('.countdown-minutes');
	  var secondsSpan = clock.querySelector('.countdown-seconds');

		function updateClock() {
			var t = getTimeRemaining(endtime);

			daysSpan.innerHTML = t.days;
			hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
			minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
			secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

			if (t.total <= 0) {
			  clearInterval(timeinterval);
			}
		}

	  updateClock(endtime);
	  var timeinterval = setInterval(updateClock, 1000);
	}

	var deadline = '2016-04-18';
	initializeClock('clockdiv', deadline);

	/* ====================================
		Responsive Navigation 
	===================================== */ 

    $('#nav-button').sidr({
      name: 'responsive-nav',
      source: '#main-navigation',
    });
    $.sidr('close', 'sidr');

	/* ====================================
		Init
	===================================== */ 

});