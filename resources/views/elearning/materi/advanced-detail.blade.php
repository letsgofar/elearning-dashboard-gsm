@extends('elearning.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper elearningBg">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                        <div class="card-body text-center">
                            <h3>
                                Materi Modul Advanced
                            </h3>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs tabs d-flex justify-content-center">
                                    <li class="active tab mr-2 ml-2">
                                        <a href="#deskripsi" data-toggle="tab" aria-expanded="false">
                                            <span class="hidden-xs">Deskripsi</span>
                                        </a>
                                    </li>
                                    <li class="tab mr-2 ml-2">
                                        <a href="#video" data-toggle="tab" aria-expanded="false">
                                            <span class="hidden-xs">Video</span>
                                        </a>
                                    </li>
                                    <li class="tab mr-2 ml-2">
                                        <a href="#pdf" data-toggle="tab" aria-expanded="true">
                                            <span class="hidden-xs">PDF</span>
                                        </a>
                                    </li>
                                    <li class="tab mr-2 ml-2">
                                        <a href="#gambar" data-toggle="tab" aria-expanded="false">
                                            <span class="hidden-xs">Gambar</span>
                                        </a>
                                    </li>
                                    <li class="tab mr-2 ml-2">
                                        <a href="#tantangan" data-toggle="tab" aria-expanded="false">
                                            <span class="hidden-xs">Tantangan</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="deskripsi">
                                        <p>{{ $modules->description }}</p>
                                    </div>
                                    <div class="tab-pane embed-responsive embed-responsive-16by9" id="video">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/{{ $modules->url_video }}" frameborder="0"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="tab-pane embed-responsive embed-responsive-16by9" id="pdf">
                                        <iframe src="https://drive.google.com/file/d/{{ $modules->url_document }}/preview"
                                            frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="tab-pane embed-responsive embed-responsive-16by9" id="gambar">
                                        <iframe src="https://drive.google.com/file/d/{{ $modules->url_image }}/preview"
                                            frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="tab-pane" id="tantangan">
                                        <p>{{ $modules->challenge }}</p>
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
                        <div class="card-body text-center">
                            <h3>
                                Penilaian Tantangan Anda
                            </h3>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <p class="font-weight-bold">Berikut ini tantangan yang telah anda upload :</p>
                                        </div>
                                        <div>
                                            <p>Gambar :</p>
                                        </div>
                                        <div>
                                            <p>Deskripsi :</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <p class="font-weight-bold">Berikut ini penilaian dari mentor anda :</p>
                                        </div>
                                        <div>
                                            <p>Status :</p>
                                        </div>
                                        <div>
                                            <p>Penilaian :</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
