@extends('elearning.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper elearningBg">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body text-center">
                        <h3>
                            Perbarui Profil
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama Lengkap :</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Sudah Pernah Ikut Workshop GSM ?</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Pendidikan Terakhir :</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Tempat Lahir :</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Gender :</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nomor WA/HP :</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Tanggal Lahir :</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Posisi di Sekolah :</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" placeholder="">
                                        </div>
                                    </div>
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
                            Foto Profil Anda
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Ubah Foto Profil</label>
                                        <p>Ukuran file tidak boleh melebihi 2MB</p>
                                        <input type="file" name="img[]" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
