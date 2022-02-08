@extends('elearning.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <p>Sekolah</p>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                        <div class="col-3">
                                            <p>Provinsi</p>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                        <div class="col-3">
                                            <p>Kabupaten</p>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                        <div class="col-3">
                                            <p>Workshop</p>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <button type="submit" class="container btn btn-primary mt-3">Terapkan Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                                        <img src="{{ asset('assets/elearning/assets/images/users/avatar-1.jpg')}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                        <span class="w3-right w3-opacity">16 min</span>
                                        <h4>Jane Doe</h4><br>
                                        <hr class="w3-clear">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
                                        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
                                    </div>
                                    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                                        <img src="{{ asset('assets/elearning/assets/images/users/avatar-3.jpg')}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                        <span class="w3-right w3-opacity">1 min</span>
                                        <h4>John Doe</h4><br>
                                        <hr class="w3-clear">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <div class="w3-row-padding" style="margin:0 -16px">
                                        <div class="w3-half">
                                            <img src="{{ asset('assets/elearning/assets/images/small/img2.jpg')}}" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                                        </div>
                                        <div class="w3-half">
                                            <img src="{{ asset('assets/elearning/assets/images/small/img4.jpg')}}" style="width:100%" alt="Nature" class="w3-margin-bottom">
                                        </div>
                                        </div>
                                        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
                                        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
                                    </div>
                                    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                                        <img src="{{ asset('assets/elearning/assets/images/users/avatar-2.jpg')}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                        <span class="w3-right w3-opacity">32 min</span>
                                        <h4>Angie Jane</h4><br>
                                        <hr class="w3-clear">
                                        <p>Have you seen this?</p>
                                        <img src="{{ asset('assets/elearning/assets/images/small/img1.jpg')}}" style="width:100%; height:500px" class="w3-margin-bottom">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
                                        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
