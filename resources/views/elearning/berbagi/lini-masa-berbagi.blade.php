@extends('elearning.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper elearningBg">
        {{-- <div class="row">
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
        </div> --}}
        @foreach ($posts as $post)
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                                        <img src="{{ asset('assets/elearning/assets/images/users/avatar-2.jpg')}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                        <span class="w3-right w3-opacity">{{$post->created_at->diffForHumans()}}</span>
                                        <h4>{{ $post->user->name}}</h4><br>
                                        <hr class="w3-clear">
                                        <p>{{ $post->title}}</p>
                                        <img src="{{ asset("storage/".$post->thumbnail) }}" style="width:100%; height:500px" class="w3-margin-bottom">
                                        <p>{{ $post->body }}</p>
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
        @endforeach
@endsection
