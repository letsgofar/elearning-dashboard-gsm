@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Modul Spesial</h4>
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
                        @foreach ($specials as $special)
                        <tr class="">
                        <td class="text-wrap">
                            {{$special->title}}
                        </td>
                        <td class="text-wrap">
                            {{$special->category->name}}
                        </td>
                        <td class="text-wrap">
                            {{Str::limit($special->description, 50, '...')}}
                        </td>
                        <td class="col-3">
                            <div class="text-center">
                                <a href="" class="button-icon-read mr-1"><i class="fa fa-info-circle"></i></a>
                                <a href="/module/special/{{$special->slug}}/edit" class="button-icon-edit mr-1"><i class="fa fa-pencil"></i></a>
                            <form class="d-inline" action="/module/special/{{$special->slug}}/delete" method="POST">
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
                    {{ $specials->links() }}
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
