@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Raport User</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">
                                User
                                </th>
                                <th class="text-center">
                                Nama
                                </th>
                                <th class="text-center">
                                Progress
                                </th>
                                <th class="text-center">
                                Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($raportusers as $raportuser)
                                <tr>
                                    <td class="py-1 text-center">
                                    <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="image"/>
                                    </td>
                                    <td>
                                    {{ $raportuser->name }}
                                    </td>
                                    <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <a href="/raport/raportuser/{{ $raportuser->slug }}" class="button-icon-read mr-1"><i class="fa fa-info-circle"></i></a>
                                        <a href="" class="button-icon-edit mr-1"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-3 d-flex justify-content-center">
                            {{ $raportusers->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
