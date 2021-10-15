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
                                    <a href="" class="button-icon-edit mr-1"><i class="fa fa-pencil"></i></a>
                                    <form class="d-inline" action="" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="button-icon-delete mr-1"><i class="fa fa-trash"></i></button>
                                    </form>
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
