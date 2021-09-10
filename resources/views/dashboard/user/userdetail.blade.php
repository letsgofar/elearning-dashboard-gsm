@extends('dashboard/layouts/master')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Profil User</h4>
                  <form class="form-sample">
                    <div class="row">
                      <div class="col-md-3">
                            <img href="/" alt="image">
                      </div>
                      <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title">Nama :</h4>
                                    <p class="card-description">
                                      {{$users->name}}
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Sekolah :</h4>
                                    <p class="card-description">
                                        {{$users->sekolah}}
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Kabupaten/Kota :</h4>
                                    <p class="card-description">
                                        {{$users->kabupaten}}
                                    </p>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Jabatan di Sekolah :</h4>
                                    <p class="card-description">
                                        {{$users->jabatan}}
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Email :</h4>
                                    <p class="card-description">
                                        {{$users->email}}
                                    </p>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h4 class="card-title ">Peran di e-learning GSM :</h4>
                                    <p class="card-description">
                                        <mark class="bg-warning text-white">{{$users->role->name}}</mark>
                                    </p>
                                  </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>

    </div>
</div>
</div>

@endsection
