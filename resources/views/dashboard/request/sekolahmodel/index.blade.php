@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">List Permintaan Sekolah Model</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th class="text-center">
                            Nama
                        </th>
                        <th class="text-center">
                            NPSN
                        </th>
                        <th class="text-center">
                            Alamat
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
                            {{$request->nama}}
                        </td>
                        <td class="text-wrap text-center">
                            {{$request->npsn}}
                        </td>
                        <td class="text-wrap text-center">
                            {{$request->alamat}}
                        </td>
                        <td>
                            <div class="text-center">
                                <button type="button" class="btn btn-theme btn-sm" data-bs-toggle="modal" data-bs-target="#defaultModal_{{$request->id}} ">Accept</button>
                                <!-- Modal -->
								<div class="modal fade" id="defaultModal_{{$request->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Permintaan Request</h5>
											<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
											</div>
											<div class="modal-body">
											<p class="text-center">Apakah anda yakin ingin mengubah status <br> <b> {{ $request->nama }} </b> menjadi sekolah model ?</p>
											</div>
											<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											<form class="d-inline" action="/request/{{$request->slug}}/accept" method="POST">
                                                @method('patch')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Accept</button>
                                            </form>
											</div>
										</div>
									</div>
								</div>
                                <!-- Modal -->
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
