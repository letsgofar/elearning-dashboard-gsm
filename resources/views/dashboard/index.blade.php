@extends('dashboard.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">Welcome Ardinanda</h3>
              <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
            </div>
            <div class="col-12 col-xl-4">
             <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <div class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                 <i class="mdi mdi-calendar"></i> {{ date("l, j F Y") }}
                </div>
              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg">
            <div class="card-people mt-auto mb-auto ml-auto mr-auto" style="padding:0;">
              {{-- <img class="img-responsive" src="{{asset('assets/images/dashboard/people.png')}}" alt="people"> --}}
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin transparent">
          <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body">
                  <p class="mb-4 font-weight-bold">Sekolah Model</p>
                  <p class="fs-30 mb-2">{{ $model }}</p>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-dark-blue">
                <div class="card-body">
                  <p class="mb-4 font-weight-bold">Sekolah Jejaring</p>
                  <p class="fs-30 mb-2">{{ $jejaring }}</p>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-light-blue">
                <div class="card-body">
                  <p class="mb-4 font-weight-bold">Mentor</p>
                  <p class="fs-30 mb-2"> {{ $mentor }} </p>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-light-danger">
                <div class="card-body">
                  <p class="mb-4 font-weight-bold">Guru</p>
                  <p class="fs-30 mb-2">{{ $guru }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card position-relative">
            <div class="card-body">
              <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-lg-12 col-xl-3 d-flex flex-column justify-content-start">
                        <div class="ml-xl-4 mt-3">
                        <p class="card-title">Peta Sekolah GSM</p>
                        <iframe class="" style="width: 100%; width:100vw; margin-right:20px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31628.036762503445!2d110.36018364165041!3d-7.736177387458326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa7b1c10be1c88d90!2sGerakan%20Sekolah%20Menyenangkan!5e0!3m2!1sen!2sid!4v1623210534186!5m2!1sen!2sid" height="450" style="" frameBorder=0 allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
