@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sekolah Model GSM</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">
                        NPSN
                      </th>
                      <th class="text-center">
                        Nama Sekolah
                      </th>
                      <th class="text-center">
                        Label GSM
                      </th>
                      <th class="text-center">
                        Provinsi
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($models as $model)
                    <tr>
                      <td class="text-wrap">
                        {{$model->npsn}}
                      </td>
                      <td class="text-wrap text-center">
                        {{$model->nama}}
                      </td>
                      <td class="text-wrap text-center">
                        Sekolah {{$model->label->name}}
                      </td>
                      <td class="text-wrap">
                        {{$model->provinsi}}
                      </td>
                      <td>
                        <div class="text-center">
                        <a href="" type="button" class="btn btn-info btn-sm">Detail</a>
                        <a type="button" class="btn btn-warning btn-sm">Label</a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <div class="mt-4 d-flex justify-content-center">
                {{ $models->links() }}
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection