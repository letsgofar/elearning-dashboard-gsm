@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">List Permintaan Mentor</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">
                        id
                      </th>
                      <th class="text-center">
                        Nama
                      </th>
                      <th class="text-center">
                        Email
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($requests as $request)
                    <tr>
                      <td class="text-wrap text-center">
                        {{$request->id}}
                      </td>
                      <td class="text-wrap text-center">
                        {{$request->name}}
                      </td>
                      <td class="text-wrap text-center">
                        {{$request->email}}
                      </td>
                      <td>
                        <div class="text-center">
                        <a href="" type="button" class="btn btn-theme btn-sm">Accept</a>
                        <a href="" type="button" class="btn btn-danger btn-sm">Decline</a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <div class="mt-4 d-flex justify-content-center">
                {{ $requests->links() }}
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
