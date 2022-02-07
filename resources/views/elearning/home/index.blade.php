@extends('elearning.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/elearning/assets/images/origsm.png')}}" alt="" style="height: 100px;">
                            </div>
                                <h2 class="text text-center" style="color:rgb(56,113,188)">Selamat Datang </h2>
                                <h4 class="text text-center" style="color:rgb(56,113,188)">di Website E-learning GSM </h4>
                        </div>
                        <div style="background-image: url('{{ asset('assets/elearning/images/background.png')}}'); background-size: cover;">
                            <div class="row" style="margin-top: 100px">
                                <div class="col-md-3 mb-5">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/iconpelajari.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4">
                                        0 Materi
                                    </div>
                                    <div class="text-center">
                                        Sudah Dipelajari
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5" >
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/iconmateri.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4">
                                        Halaman Materi
                                    </div>
                                    <div class="text-center">
                                        Buka Disini
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/icontantangan.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4">
                                        Tantangan
                                    </div>
                                    <div class="text-center">
                                        Sudah Dinilai
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/icongrup.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4">
                                        Grup Sekolah
                                    </div>
                                    <div class="text-center">
                                        Coming Soon
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 100px">
                            <div class="text-center h2" style="color:rgb(56,113,188)">
                                4 Framework Penting GSM
                            </div>
                            <div class="text-center h4" style="color:rgb(56,113,188)">
                                Klik salah satu untuk melihat detail
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/iconpartisipatif.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4" style="color:rgb(56,113,188)">
                                        Pembelajaran Kontekstual dan Partisipatif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/iconsentra.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4" style="color:rgb(56,113,188)">
                                        Panca Sentra Pendidikan
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/iconkarakter.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4" style="color:rgb(56,113,188)">
                                        Pengembangan Karakter
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/iconpositif.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4" style="color:rgb(56,113,188)">
                                        Penciptaan Lingkungan Positif dan Etis
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 100px">
                            <div class="text-center h2" style="color:rgb(56,113,188)">
                                4 Fitur Utama E-Learning GSM
                            </div>
                            <div class="text-center h4" style="color:rgb(56,113,188)">
                                Klik salah satu untuk melihat detail
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/materipelatihan.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4" style="color:rgb(56,113,188)">
                                        Materi Pelatihan
                                    </div>
                                    <div class="text-center mt-2">
                                        materi disajikan dalam bentuk pdf, gambar, dan video interaktif
                                    </div>
                                    <div class="container mt-4 mb-5">
                                        <div class="row">
                                            <div class="col text-center">
                                                <button class="btn btn-info btn-sm">Pelajari Materi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/pendampingan.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4" style="color:rgb(56,113,188)">
                                        Pendampingan
                                    </div>
                                    <div class="text-center mt-2">
                                        Anda bebas memilih mentor untuk menjadi pendamping anda
                                    </div>
                                    <div class="container mt-4 mb-5">
                                        <div class="row">
                                            <div class="col text-center">
                                                <button class="btn btn-info btn-sm">Pilih Mentor</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/sharing.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4" style="color:rgb(56,113,188)">
                                        Berbagi
                                    </div>
                                    <div class="text-center mt-2">
                                        Anda dapat membuat sebuah konten dan membagikannya untuk orang lain
                                    </div>
                                    <div class="container mt-4 mb-5">
                                        <div class="row">
                                            <div class="col text-center">
                                                <button class="btn btn-info btn-sm">Buat Sekarang</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('assets/elearning/assets/images/like.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4" style="color:rgb(56,113,188)">
                                        Like and Save
                                    </div>
                                    <div class="text-center mt-2">
                                        Temukan Berbagai macam konten dari pengguna lain, sukai, dan simpan
                                    </div>
                                    <div class="container mt-4 mb-5">
                                        <div class="row">
                                            <div class="col text-center">
                                                <button class="btn btn-info btn-sm">Cari Konten</button>
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
