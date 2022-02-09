@extends('elearning.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper elearningBg">
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
                        <div style="background-image: url('/assets/elearning/assets/images/background.png'); background-size:cover;">
                            <div class="row" style="margin-top: 50px;padding-top: 100px;">
                                <div class="col-md-3 mb-5">
                                    <div class="d-flex justify-content-center animateImage">
                                        <img src="{{ asset('assets/elearning/assets/images/iconpelajarinew.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4 subItem">
                                        0 Materi
                                    </div>
                                    <div class="text-center descItem">
                                        Sudah Dipelajari
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5" >
                                    <div class="d-flex justify-content-center animateImage">
                                        <img src="{{ asset('assets/elearning/assets/images/iconmaterinew.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4 subItem">
                                        Halaman Materi
                                    </div>
                                    <div class="text-center descItem">
                                        Buka Disini
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="d-flex justify-content-center animateImage">
                                        <img src="{{ asset('assets/elearning/assets/images/icontantangannew.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4 subItem">
                                        Tantangan
                                    </div>
                                    <div class="text-center descItem">
                                        Sudah Dinilai
                                    </div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <div class="d-flex justify-content-center animateImage">
                                        <img src="{{ asset('assets/elearning/assets/images/icongrupnew.png')}}" alt="" style="height: 120px">
                                    </div>
                                    <div class="text-center mt-4 subItem">
                                        Grup Sekolah
                                    </div>
                                    <div class="text-center descItem">
                                        Coming Soon
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prinsip">
                            <div class="text-center h2" style="color:#3871bc">
                                4 Framework Penting GSM
                            </div>
                            <div class="text-center h4" style="color:white">
                                Arahkan kursor ke gambar untuk melihat deskripsinya
                            </div>
							<div class="containerPrinsip">
									<div class="row mt-5 boxPrinsip">
										<div class="col-md-12">
											<div class="d-flex justify-content-right">
												<div class="descPrinsip" id="konstektualDesc" style="display:none;">
												<p>Pembelajaran sosial emosional pembentukan karakter</p>
												</div>
											</div>
										</div>
									 </div>
									<div class="row mt-5 boxPrinsip">
										<div class="col-md-12">
											<div class="d-flex justify-content-center" id="konstektualImage"  onmouseenter="document.getElementById('konstektualDesc').style.display = 'block';" onmouseleave="document.getElementById('konstektualDesc').style.display = 'none';">
												<img class="gambarPrinsip" src="{{ asset('assets/elearning/assets/images/iconpartisipatif.png')}}" alt="">
											</div>
											<div class="text-center mt-4" style="color:white;">
												Pembelajaran Kontekstual dan Partisipatif
											</div>
										</div>
									</div>
										<div class="row mt-5 boxPrinsip">
										 <div class="col-md-12">
											<div class="d-flex justify-content-center"id="sentraImage" onmouseenter="document.getElementById('sentraDesc').style.display = 'block';" onmouseleave="document.getElementById('sentraDesc').style.display = 'none';">
												<img class="gambarPrinsip" src="{{ asset('assets/elearning/assets/images/iconsentra.png')}}" alt="">
											</div>
											<div class="text-center mt-4" style="color:white">
												Panca Sentra Pendidikan
											</div>
										</div>
										</div>
										<div class="row mt-5 boxPrinsip">
										<div class="col-md-12">
											<div class="d-flex justify-content-right">
												<div class="descPrinsip" id="sentraDesc" style="display:none;">
												<p>Panca sentra lingkungan sinergi antara sekolah, murid, guru, orang tua, masyarakat, dan global</p>
												</div>
											</div>
										</div>
									 </div>
									 <div class="row mt-5 boxPrinsip">
										<div class="col-md-12">
											<div class="d-flex justify-content-right">
												<div class="descPrinsip" id="charaDesc" style="display:none;">
												<p>Paradigma pendidikan yang mengedepankan perlibatan siswa, berfokus pada siswa, dengan berbagai macam metode yang kontekstual</p>
												</div>
											</div>
										</div>
									 </div>
									<div class="row mt-5 boxPrinsip">
										<div class="col-md-12">
											<div class="d-flex justify-content-center" id="charaImage" onmouseenter="document.getElementById('charaDesc').style.display = 'block';" onmouseleave="document.getElementById('charaDesc').style.display = 'none';">
												<img class="gambarPrinsip" src="{{ asset('assets/elearning/assets/images/iconkarakter.png')}}" alt="">
											</div>
												<div class="text-center mt-4" style="color:white">
												Pengembangan Karakter
												</div>
										</div>
									 </div>
									 <div class="row mt-5 boxPrinsip">
										<div class="col-md-12">
											<div class="d-flex justify-content-center" id="posImage" onmouseenter="document.getElementById('posDesc').style.display = 'block';" onmouseleave="document.getElementById('posDesc').style.display = 'none';">
												<img class="gambarPrinsip" src="{{ asset('assets/elearning/assets/images/iconpositif.png')}}" alt="">
											</div>
											<div class="text-center mt-4" style="color:white">
												Penciptaan Lingkungan Positif dan Etis
											</div>
										</div>
									 </div>
									 <div class="row mt-5 boxPrinsip">
										<div class="col-md-12">
											<div class="d-flex justify-content-right">
												<div class="descPrinsip" id="posDesc" style="display:none;">
												<p>Bagaimana membangun lingkungan sekolah yang postif untuk perkembangan siswa dengan melibatkan siswa</p>
												</div>
											</div>
										</div>
									 </div>
							 </div>
                         </div>
                        <div style="margin-top: 100px">
                            <div class="text-center h2" style="color:rgb(56,113,188)">
                                4 Fitur Utama E-Learning GSM
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
