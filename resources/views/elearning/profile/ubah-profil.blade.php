<link rel="stylesheet" href="{{asset('/assets/elearning/assets/css/ubahprofil.css')}}">
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
						<form action="{{route('ubahdata')}}" method="POST" enctype="multipart/form-data" id="ubahDiri">
						@csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama Lengkap :</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" placeholder="Isikan disini..." name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Sudah Pernah Ikut Workshop GSM ?</label>
                                        <div id="the-basics">
                                            <select id="workshop" name="workshop" form="ubahDiri">
											  <option value="Sudah">Sudah</option>
											  <option value="Belum">Belum</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Pendidikan Terakhir :</label>
                                        <div id="the-basics">
                                              <select id="pendidikan" name="pendidikan_terakhir" form="ubahDiri">
											  <option value="SMA">SMA</option>
											  <option value="Diploma">Diploma</option>
											  <option value="Sarjana">Sarjana</option>
											  <option value="Magister">Magister</option>
											  <option value="Doktoral">Doktoral</option>
											</select>
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
                                            <input class="typeahead" type="text" placeholder="Isikan disini..." name="tempat_lahir">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Gender :</label>
                                        <div id="the-basics">
                                            <select id="gender" name="gender" form="ubahDiri">
											  <option value="pria">Pria</option>
											  <option value="wanita">Wanita</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nomor WA/HP :</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" placeholder="Isikan disini..." name="hp">
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
                                            <input class="typeahead" type="date" placeholder="" name="tanggal_lahir">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Posisi di Sekolah :</label>
                                        <div id="the-basics">
                                            <select id="jabatan" name="jabatan" form="ubahDiri">
											  <option value="Kepala Sekolah">Kepala Sekolah</option>
											  <option value="Guru">Guru</option>
											  <option value="Administrasi">Administrasi</option>
											</select>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="form-group">
								<div class="d-flex justify-content-center">
									<input type="submit" value="Submit">
								</div>
							</div>
                        </div>
						
						</form>
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
                    <div class="row" style="padding-bottom:50px;">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body d-flex justify-content-center">
									@if(Auth::user()->avatar)
										 <img class="image rounded-circle" src="{{asset('/storage/avatar/'.Auth::user()->avatar)}}" style="width: 150px;height: 150	px; padding: 10px; margin: 0px; ">
									@endif
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Ubah Foto Profil</label>
                                        <p>Ukuran file tidak boleh melebihi 2MB</p>
											<form action="{{route('updatePhoto')}}" method="POST" enctype="multipart/form-data" style="padding-top:20px;">
												@csrf
												<input type="file" name="avatar">
												<input type="submit" value="Upload">
											</form>
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
