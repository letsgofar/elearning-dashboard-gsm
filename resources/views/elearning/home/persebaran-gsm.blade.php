@extends('elearning.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper elearningBg">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body text-center">
                        <h3>
                            Persebaran Sekolah Model GSM
                        </h3>
                        <h6 class="text-secondary mt-3">
                            Anda dapat melihat persebaran sekolah GSM dan user/sekolah jejaring di E-Learning ini
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">Tabel Persebaran Sekolah</h4> --}}
                        <form class="form-sample">
                        {{-- <p class="card-description">
                            Personal info
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" />
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" />
                                </div>
                            </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-12">
                                {{-- <p class="card-description">
                                    Berikut ini adalah sekolah yang tersedia berdasarkan jenis sekolah dan daerah yang dipilih
                                </p> --}}
                                <div class="table-responsive">
                                    <table class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr class="text-center">
                                            <th>Nama Sekolah</th>
                                            <th>Provinsi</th>
                                            <th>kabupaten</th>
                                            <th>Kecamatan</th>
                                            <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($models as $model)
                                            <tr>
                                                <td>
                                                    {{ $model->nama }}
                                                </td>
                                                <td>
                                                    {{ $model->provinsi }}
                                                </td>
                                                <td>
                                                    {{ $model->kabupaten }}
                                                </td>
                                                <td>
                                                    {{ $model->kecamatan }}
                                                </td>
                                                <td>
                                                    {{ $model->alamat }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $models->links() }}
                    </div>
                </div>
            </div>
        </div>

@endsection
