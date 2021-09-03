@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Modul Basic</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">
                        Judul
                      </th>
                      <th class="text-center">
                        Kategori
                      </th>
                      <th class="text-center">
                        Deskripsi
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($basics as $basic)
                    <tr class="">
                      <td class="text-wrap">
                        {{$basic->title}}
                      </td>
                      <td class="text-wrap">
                        {{$basic->category->name}}
                      </td>
                      <td class="text-wrap">
                          {{Str::limit($basic->description, 50, '...')}}
                      </td>
                      <td class="col-3">
                        <div class="text-center">
                          <a href="" type="button" class="btn btn-info btn-sm">Detail</a>
                          <a href="/module/basic/{{$basic->slug}}/edit" type="button" class="btn btn-warning btn-sm">Edit</a>
                          <form class="d-inline" action="" method="POST">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="mt-4 d-flex justify-content-center">
                {{ $basics->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection