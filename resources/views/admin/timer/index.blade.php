@extends('layouts.admin')
@section('content')
    <h1 class="text-center">Timer</h1>
    <div class="my-5">
        <label for="timerAmount">Time</label>
        <input id="timerAmount" type="text">
    </div>
    <button id="start" class="btn btn-success">Start</button>
    <div id="timer" class="my-4">
        hours.minutes.seconds
    </div>

    <script>
        let value;
        function getValue() {
            let input = document.querySelector('#timerAmount');
            let value = input.value;
            return value;
        }
        const timerContainer = document.querySelector('#timer');
        const start = document.querySelector('#start');
        timerContainer.innerHTML = '00.00.00';
        start.addEventListener('click', function(event) {
            let value = getValue();
            console.log(value);
            const clock = setInterval(() => {
                value--;
                timerContainer.innerHTML = value;
                if(value == 0) {
                    clearInterval(clock);
                    timerContainer.innerHTML = '00.00.00';
                }
            }, 1000);
        })

    </script>
@endsection
