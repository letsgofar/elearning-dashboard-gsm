@extends('elearning.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper elearningBg">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body text-center">
                        <h3>
                            Detail User
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama :</label>
                                        <p>{{ $users->name }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Tempat Lahir :</label>
                                        <p>{{ $users->email }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Tanggal Lahir :</label>
                                        <p>{{ $users->jabatan }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nomor WA :</label>
                                        <p>{{ $users->sekolah }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Sudah Ikut Workshop :</label>
                                        <p>Sudah Pernah</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Gender :</label>
                                        <p>Pria</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Posisi di Sekolah :</label>
                                        <p>Guru</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Pendidikan Terakhir :</label>
                                        <p>S1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Modul Sedang Dipelajari</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Tantangan Modul Dijawab</h4>
                        <p> Title Modul Spesial</p>
                        <p> Kategori : Penciptaan Ekosistem Positif di Sekolah</p>
                        <p> Level : Spesial</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Tantangan Modul Dinilai</h4>
                    </div>
                </div>
            </div>
        </div>
@endsection
