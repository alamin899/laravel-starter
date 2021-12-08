@extends('layouts.frontend')
@section('title')
    Access Denied
@endsection()

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-2 text-center">
                <p><i class="fa fa-exclamation-triangle fa-5x"></i><br/>Status Code: 404</p>
            </div>
            <div class="col-md-10">
                <h3 class="text-danger"><strong>Oops!!!</strong> This Page Could Not Be Found</h3>
                <p>SORRY BUT THE PAGE YOU ARE LOOKING FOR DOES NOT EXIST, HAVE BEEN REMOVED. NAME CHANGED OR IS TEMPORARILY UNAVAILABLE.</p>
                <a class="btn btn-dark" href="javascript:history.back()">Go Back</a>
            </div>
        </div>
    </div>
@endsection()