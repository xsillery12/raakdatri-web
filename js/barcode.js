var timerElement = document.getElementById('timer');

    var endTime = Math.floor(new Date().getTime() / 1000) + 86400;

    var updateTimer = setInterval(function() {

        var now = Math.floor(new Date().getTime() / 1000);

        var timeLeft = endTime - now;

        var hours = Math.floor(timeLeft / 3600);
        var minutes = Math.floor((timeLeft % 3600) / 60);
        var seconds = timeLeft % 60;

        var formattedTime = hours.toString().padStart(2, '0') + ':' +
                            minutes.toString().padStart(2, '0') + ':' +
                            seconds.toString().padStart(2, '0');

        timerElement.textContent = formattedTime;

        if (timeLeft <= 0) {
            clearInterval(updateTimer);
            timerElement.textContent = 'Waktu habis';
        }
    }, 1000);