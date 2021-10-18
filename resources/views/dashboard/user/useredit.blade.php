@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            @if (session('status'))
            <div class="ml-3 alert alert-success">
                {{-- {{ session('status') }} --}}
            </div>
            @endif
            <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Edit Data User</h4>
                <p class="card-description">
                    Admin bisa mengedit data user disini :
                </p>
                <form class="forms-sample" method="POST" action="/user/{{$users->slug}}/edit">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                    <label for="">Nama User</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $users->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Role User</label>
                        <select name="role" id="role" class="form-control">
                            <option value="" selected disabled>Pilih Role :</option>
                            @foreach ($roles as $role)
                            <option {{ $role->id == $users->role_id ? 'selected' : ''}} value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') ?? $users->jabatan }}">
                    </div>
                    <div class="form-group">
                        <label for="">Sekolah</label>
                        <input type="text" class="form-control" id="sekolah" name="sekolah" value="{{ old('sekolah') ?? $users->sekolah }}">
                    </div>
                    <div class="form-group">
                        <label for="">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{ old('kabupaten') ?? $users->kabupaten }}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') ?? $users->email }}">
                    </div>
                    <button class="btn btn-primary mr-2" type="submit">Update</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
