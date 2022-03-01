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
							<div class="profile-header-img d-flex justify-content-center">
							@if(Auth::user()->avatar)
								<img class="image rounded-circle" src="{{asset('/storage/avatar/'.Auth::user()->avatar)}}" style="width: 200px;height: 200px; padding: 10px; margin: 0px; ">
							@endif
							</div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama :</label>
                                        <p>{{ Auth::user()->name }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Tempat Lahir :</label>
                                        <p>{{ Auth::user()->tempat_lahir}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Tanggal Lahir :</label>
                                        <p>{{ Auth::user()->tanggal_lahir }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nomor WA :</label>
                                        <p>{{ Auth::user()->hp }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Sudah Ikut Workshop :</label>
                                        <p>{{ Auth::user()->workshop }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Gender :</label>
                                        <p>{{ Auth::user()->gender }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Posisi di Sekolah :</label>
										<p>{{ Auth::user()->jabatan }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Pendidikan Terakhir :</label>
                                        <p>{{ Auth::user()->pendidikan_terakhir }}</p>
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
