@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">List User E-Learning GSM</h4>
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
                            Role
                        </th>
                        <th class="text-center">
                            Action
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                        <td class="text-wrap text-center">
                            {{$user->id}}
                        </td>
                        <td class="text-wrap text-center">
                            {{$user->name}}
                        </td>
                        <td class="text-wrap text-center">
                            {{$user->email}}
                        </td>
                        <td class="text-wrap text-center {{ ($user->role->name == 'admin') ? 'text-warning font-weight-bold' : ''}}">
                            {{$user->role->name}}
                        </td>
                        <td>
                            <div class="text-center">
                                <a href="/user/{{ $user->slug }}" class="button-icon-read mr-1"><i class="fa fa-info-circle"></i></a>
                                <a href="/user/{{ $user->slug }}/edit" class="button-icon-edit mr-1"><i class="fa fa-pencil"></i></a>
                                <form class="d-inline" action="/user/{{ $user->slug }}/delete" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="button-icon-delete mr-1"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>

                <div class="mt-4 d-flex justify-content-center">
                    {{ $users->links() }}
                </div>

                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
