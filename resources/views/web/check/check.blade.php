@extends('layouts.admin')
@section('title')
    Check Print
@endsection()

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4" style="padding: 0;">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">Check Print</div>
                    <div class="text-right col-md-6">
                        <button class="btn btn-raised bg-cyan waves-effect" style="margin: 0px;" type="button"
                                onclick="window.print()"><i class="material-icons" type="submit">print</i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body mt-1"
                 style="height: 326px; width: 720px; background: url('demo-cheque.jpg') lightblue no-repeat;background-size: 720px 326px;">
                <div class="row">
                    <div class="col-12"
                         style="background: rgba(255, 255, 255, 0.2);  backdrop-filter: blur(1px);  height: 326px; width: 100%;">
                        <div class="row m-t-45">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-7"></div>
                                    <div class="col-5  p-r-5 font-bold text-right">
                                        <span style="letter-spacing: 16px;">28112021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-35">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 font-bold">Exelon System
                                        Limited
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-15">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-8 font-bold"
                                         style="line-height:30px;"><span
                                                style="width: 150px;display:inline-block;"></span>THREE THOUSAND TWO
                                        HUNDRED
                                    </div>
                                    <div class="col-4 p-l-45 font-20 font-bold" style="padding-top: 15px;">
                                        3200 /=
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

<style>
    .error-message {
        display: block !important;
        color: red;
    }

    .page-title {
        border: 1px solid;
        padding: 5px;
        box-shadow: 3px 3px;
    }

    .m-t-45 {
        margin-top: 45px !important;
    }

    .m-t-35 {
        margin-top: 35px !important;
    }
    .m-t-15 {
        margin-top: 2px !important;
    }

    .m-t-13 {
        margin-top: 13px !important;
    }

    .p-l-45 {
        padding-left: 45px !important;
    }

    .p-r-5 {
        padding-right: 5px !important;
    }

    @media print {
        /*@page {
            size: A5;
            size: landscape;
        }*/
        .card-2.shadow.mb-4 {
            margin-top: -14px;
            margin-left: -5px;
        }

        .card-2.shadow.mb-4 .card-body {
            transform: rotate(90deg);
            margin: 219px auto;
        }
    }
</style>