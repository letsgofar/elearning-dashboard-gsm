@extends('dashboard.layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                @if (session('status'))
                    <div class="ml-3 alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Buat Raport Sekolah</h4>
                            <p class="card-description">
                                Admin bisa membuat raport untuk sekolah dengan mengisi form berikut
                            </p>
                            <form class="forms-sample" method="POST" action="/raport/raportsekolah/newraportsekolah">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama Sekolah</label>
                                    <select class="form-control" id="jenis_modul" name="name">
                                        <option selected disabled>Pilih Nama Sekolah</option>
                                        @foreach ($schools as $school)
                                            <option value="{{ $school->nama }}"> {{ $school->nama }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_modul">Jenis Modul</label>
                                    <select class="form-control" id="jenis_modul" name="jenis_modul">
                                        <option selected disabled>Pilih Satu Kategori Modul</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->name }}"> {{ $category->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_modul">Nama Modul</label>
                                    <select class="form-control" id="jenis_modul" name="nama_modul">
                                        <option selected disabled>Pilih Satu Kategori Modul</option>
                                        @foreach ($modules as $modules)
                                            <option value="{{ $modules->title }}"> {{ $modules->title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_modul">Nilai Modul</label>
                                    <input type="text" name="nilai_modul" id="nilai_modul" class="form-control"
                                        placeholder="Masukkan Nilai Modul">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
