@extends('dashboard.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Raport User</h4>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <img class="rounded-circle" src="{{asset('assets/images/faces/face1.jpg')}}" alt="image"/>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center text-secondary">{{ $raportusers->name }}</h4>
                        <h5 class="text-center">Guru</h5>
                        <h6 class="text-center">Sekolah No. 10 Indonesia</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Nilai Modul</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center col-4">
                                    Jenis Modul
                                    </th>
                                    <th class="text-center col-4">
                                    Nama Modul
                                    </th>
                                    <th class="text-center col-4">
                                    Nilai
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-wrap col-4">
                                            {{ $raportusers->jenis_modul }}
                                        </td>
                                        <td class="text-wrap col-4">
                                            {{ $raportusers->nama_modul }}
                                        </td>
                                        <td class="text-wrap col-4 text-center">
                                            {{ $raportusers->nilai_modul }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Penguasaan Materi</h4>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title text-center">Spesial</h4>
                                  <canvas id="pieChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title text-center">Basic</h4>
                                  <canvas id="pieChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title text-center">Advanced</h4>
                                  <canvas id="pieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
