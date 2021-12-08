@extends('layouts.frontend')
@section('title')
    Too Many Attempts
@endsection()

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-2 text-center">
                <p><i class="fa fa-exclamation-triangle fa-5x"></i><br/>Status Code: 429</p>
            </div>
            <div class="col-md-10">
                <h3 class="text-danger"><strong>OPPSSS!!!! </strong> Too Many Attempts, Please Try <span id="minutes" class="text-bold text-danger">00</span> Minute And <span id="seconds" class="text-bold text-danger">00</span> Seconds Later
                </h3>
                <a class="btn btn-dark" href="javascript:history.back()">Go Back</a>
            </div>
        </div>
    </div>
    <script type="application/javascript">
        function timer(min=0,second =60) {
            setInterval(function () {
                if (second === 0) {
                    return false
                } else {
                    --second
                }
                document.getElementById('minutes').innerHTML = min;
                document.getElementById('seconds').innerHTML = second;
            }, 1000);
        }
        timer(0,60);
    </script>
@endsection()