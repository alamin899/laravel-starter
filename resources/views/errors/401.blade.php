@extends('layouts.frontend')
@section('title')
    Authentication Failed
@endsection()

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-2 text-center">
                <p><i class="fa fa-exclamation-triangle fa-5x"></i><br/>Status Code: 401</p>
            </div>
            <div class="col-md-10">
                <h3 class="text-danger"><strong>OPPSSS!!!! </strong> The request has not been applied because it lacks valid authentication</h3>
                <a class="btn btn-dark" href="javascript:history.back()">Go Back</a>
            </div>
        </div>
    </div>
@endsection()