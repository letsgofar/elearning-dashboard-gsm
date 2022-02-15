@extends('elearning.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper elearningBg">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body text-center">
                        <h3>
                            Chat Pendampingan
                        </h3>
                        <p>Anda bisa melakukan chat pribadi dengan assesor via chat pendampingan</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card position-relative">
                            <div class="row">
                                <div class="col-5">
                                    <div>
                                        <h6 class="font-weight-bold">Assesor Anda</h6>
                                        <p>Nama :</p>
                                    </div>
                                    <div>
                                        <h6 class="font-weight-bold">Apakah anda tertarik menjadi assesor ?</h6>
                                        <p>Klik tombol dibawah untuk mengajukan diri anda</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-primary">Ajukan</button>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <p>Mengampu : 0 orang</p>
                                </div>
                                <div class="col-4">
                                    <p>Email : </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Chat dengan Assesor</h4>
                    <form class="form-inline" style="margin-top: 250px">
                        <input type="text" class="form-control col-10" id="inlineFormInputName2" placeholder="Ketikkan Pesan">
                        <button type="submit" class="btn btn-primary mx-2 text-center">Send</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
