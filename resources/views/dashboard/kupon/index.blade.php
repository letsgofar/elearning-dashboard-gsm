@extends('dashboard.layouts.master')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-5">
                            List Kupon Perubahan
                        </h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th class="text-center">
                                    Kode Kupon
                                </th>
                                <th class="text-center">
                                    Nama Kupon
                                </th>
                                <th class="text-center">
                                    Date Expired
                                </th>
                                <th class="text-center">
                                    Kuota
                                </th>
                                <th class="text-center">
                                    Action
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                <tr>
                                <td class="text-center">
                                    {{$coupon->code}}
                                </td>
                                <td class="text-center">
                                    {{$coupon->nama}}
                                </td>
                                <td class="text-center">
                                    {{$coupon->date}}
                                </td>
                                <td class="text-center">
                                    {{$coupon->kuota}}
                                </td>
                                <td class="text-center">
                                    <a href="/kupon/{{ $coupon->slug }}/edit" class="button-icon-edit mr-1"><i class="fa fa-pencil"></i></a>
                                    <button type="button" class="button-icon-delete mr-1" data-bs-toggle="modal" data-bs-target="#defaultModal_{{$coupon->id}} " style=""><i class="fa fa-trash"></i></button>
                                <!-- Modal -->
								<div class="modal fade" id="defaultModal_{{$coupon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Delete Kupon</h5>
											<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
											</div>
											<div class="modal-body">
											<p class="text-center">Apakah anda yakin ingin menghapus <br> <b> {{ $coupon->nama }} </b> ?</p>
											</div>
											<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											<form class="d-inline" action="/kupon/{{$coupon->slug}}/delete" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
											</div>
										</div>
									</div>
								</div>
                                <!-- Modal -->
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            <div class="d-flex justify-content-center mt-4">
                                {{ $coupons->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
