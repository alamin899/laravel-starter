@extends('layouts.frontend')
@section('title')
    Access Denied
@endsection()

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-2 text-center">
                <p><i class="fa fa-exclamation-triangle fa-5x"></i><br/>Status Code: 403</p>
            </div>
            <div class="col-md-10">
                <h3 class="text-danger"><strong>OPPSSS!!!!</strong> Sorry you have no permission access this page</h3>
                <p>Sorry, your access is refused due to security reasons of our server and also our sensitive data.<br/>Please
                    go back to the previous page to continue browsing.</p>
                <a class="btn btn-dark" href="javascript:history.back()">Go Back</a>
            </div>
        </div>
    </div>
@endsection()