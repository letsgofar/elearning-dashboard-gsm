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
                <h4 class="card-title">Edit Raport User</h4>
                <p class="card-description">
                    Admin bisa mengedit raport untuk user dengan mengisi form berikut
                </p>
                <form class="forms-sample" method="POST" action="/raport/guru/edit/{{ $raportusers->slug }}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama User</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Sekolah" value="{{ old('name') ?? $raportusers->name }}">
                    </div>
                    <div class="form-group">
                    <label for="jenis_modul">Jenis Modul</label>
                    <select class="form-control" id="jenis_modul" name="jenis_modul">
                        <option selected disabled>Pilih Satu Kategori Modul</option>
                        @foreach ($categories as $category)
                        <option {{ $category->name == $raportusers->jenis_modul ? 'selected' : ''}} value="{{$category->name}}"> {{$category->name}} </option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_modul">Nama Modul</label>
                        <input type="text" name="nama_modul" id="nama_modul" class="form-control" placeholder="Masukkan Nama Modul" value="{{ old('name') ?? $raportusers->nama_modul }}">
                    </div>
                    <div class="form-group">
                        <label for="nilai_modul">Nilai Modul</label>
                        <input type="text" name="nilai_modul" id="nilai_modul" class="form-control" placeholder="Masukkan Nilai Modul" value="{{ old('name') ?? $raportusers->nilai_modul }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
