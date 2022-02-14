@extends('elearning.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title text-center">Materi advanced</h4>
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
                        @foreach ($advanceds as $advanced)
                        <tr class="">
                        <td class="text-wrap">
                            {{$advanced->title}}
                        </td>
                        <td class="text-wrap">
                            {{$advanced->category->name}}
                        </td>
                        <td class="text-wrap">
                            {{Str::limit($advanced->description, 50, '...')}}
                        </td>
                        <td class="col-3">
                            <div class="text-center">
                                <a href="/elearning/materi/materi-advanced/{{ $advanced->slug }}" class="button-icon-read mr-1"><i class="fa fa-info-circle"></i></a>
                            </div>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    {{ $advanceds->links() }}
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
