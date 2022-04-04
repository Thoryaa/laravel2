@extends('master')
@section('content')
    <!--  -->
    <!-- compenise -->
    <div class="container my-5">
        <div class="d-flex justify-content-between border-top">
            <h4>Companice</h4>
        </div>
        <div class="row mt-2 ">
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3">
                     <img src="{{ URL::asset('assest/images/Capture.png') }}" alt="" class="img-fluid"> <span
                            class="d-block fw-bold">CRYSTEL</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i> <small class="ml-1">Location - Amman,
                                Jordan</small> </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Company Website
                                http://www.crystel.co</small>
                            <a href="{{ route('jobdetails') }}"> <button class="btn btn-sm bthover"
                                    style="border: 1px solid #f4931e;">More
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3"> 
                    <img src="{{ URL::asset('assest/images/logo-GTFS.png') }}" alt="" class="img-fluid"> <span
                            class="d-block fw-bold">CGTFS</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i>
                            <small class="ml-1">Location
                                Dubai,
                                UAE</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Company Website
                                http://www.crystel.co</small>
                            <a href="{{ route('jobdetails') }}"> <button class="btn btn-sm bthover"
                                    style="border: 1px solid #f4931e;">More
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3"> 
                    <img src="{{ URL::asset('assest/images/Injaz_Logo.png') }}" alt="" class="img-fluid"> <span
                            class="d-block fw-bold">INJAZ</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i>
                            <small class="ml-1">Location
                                Amman, Jorden</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Company Website
                                http://www.injaz.org.jo</small>
                            <a href="{{ route('jobdetails') }}"> <button class="btn btn-sm bthover"
                                    style="border: 1px solid #f4931e;">More
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3">
                     <img src="{{ URL::asset('assest/images/telcom.jpg') }}"alt="" class="img-fluid"> <span
                            class="d-block fw-bold">Teleperformance</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i>
                            <small class="ml-1">Cairo, Egypt</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Company Website
                                http://www.injaz.org.jo</small>
                            <a href="{{ route('jobdetails') }}"> <button class="btn btn-sm bthover"
                                    style="border: 1px solid #f4931e;">More
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
 @endsection