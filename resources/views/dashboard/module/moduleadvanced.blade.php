@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Modul Advanced</h4>
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
                                <a href="" class="button-icon-read mr-1"><i class="fa fa-info-circle"></i></a>
                                <a href="/module/advanced/{{$advanced->slug}}/edit" class="button-icon-edit mr-1"><i class="fa fa-pencil"></i></a>
                                <button type="button" class="button-icon-delete mr-1" data-bs-toggle="modal" data-bs-target="#defaultModal_{{$advanced->id}} " style=""><i class="fa fa-trash"></i></button>
                                <!-- Modal -->
								<div class="modal fade" id="defaultModal_{{$advanced->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Delete Module Advanced</h5>
											<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
											</div>
											<div class="modal-body">
											<p class="text-center">Apakah anda yakin ingin menghapus <br> <b> {{ $advanced->title }} </b> ?</p>
											</div>
											<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											<form class="d-inline" action="/module/advanced/{{$advanced->slug}}/delete" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
											</div>
										</div>
									</div>
								</div>
                                <!-- Modal -->
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
