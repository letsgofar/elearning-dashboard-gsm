@extends('elearning.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper elearningBg">
        {{-- <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body text-center">
                        <h3>
                            Kupon Workshop
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p>Anda punya kupon dari workshop ? Kirimkan disini</p>
                                        <div class="row">
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="">
                                            </div>
                                            <div class="col-3">
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body text-center">
                        <h3>
                            Tulis Konten Berbagi
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card position-relative">
                            <form action="{{route('share.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="font-weight-bold">Judul</label>
                                    <p>Masukkan judul post yang ingin anda bagikan</p>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Upload Foto</label>
                                    <p>Tidak dapat mengupload foto dengan ukuran lebih dari 2MB</p>
                                    <input type="file" name="thumbnail" id="thumbnail" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Tuliskan Cerita Anda</label>
                                    <p>Deskripsikan cerita anda</p>
                                    <div>
                                        <textarea class="form-control" rows="7" id="body" name="body"></textarea>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary mr-2">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
