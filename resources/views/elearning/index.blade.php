@extends('elearning.layouts.welcomepage')
@section('content')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<link rel="stylesheet" href="{{asset('assets/elearning/assets/css/welcomepage.css')}}">
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page" style="padding-top:50px;margin-left:0px;background:white">
    <div class="col-md-12 partnerBg">
        <div class="row" style="padding-bottom: 20px;text-align:center;background-color: rgba(255,255,255);">
        <img src="assets/elearning/assets/images/_gsm.png" alt="gsm" style="max-width:110%;max-height:110%;">
        </div>
    </div>

	<div class="col-md-12" style="height:50px">
        <div class="row">
            <h1 class="welcomePageTitleUtama" style="text-align:center;color: rgb(15, 68, 155)" >Video Seputar GSM</h1>
            <br>
        </div>
    </div>

    <div class="col-md-12 videoBg">
        <div class="row">
            <h1 class="welcomePageTitleUtama" style="text-align:center;color: rgb(15, 68, 155)" ></h1>
            <br>
        <div class="col-md-7 col-xs-12" id="videoDisplay">
        </div>
        <div class="col-md-5 col-xs-12">
            <div class="row" style="max-height:380px;overflow: auto">
                <div class="col-md-12 col-xs-12 listYoutube mb10">
                    <div class="thumbnailYouTube">
                    <a href="{{url('/?videoParam=iv1_Va1SAOo')}}">
                        <img style="width:100%" class="staticImage" src="https://i.ytimg.com/vi/iv1_Va1SAOo/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLC4eKNG2NSU9RQ9SHh6wydS_JB-vQ" alt="">
                    </a>
                    </div>
                    <div class="youTubeMeta">
                    <div class="ml15">
                    <a href="{{url('/?videoParam=iv1_Va1SAOo')}}">
                            <span style="color:white"><b>Gerakan Sekolah Menyenangkan dan Gerakan Literasi</b></span>
                        </a>
                        <br>
                        <span style="color:rgb(255, 255, 255)">Oleh : <a href="https://www.youtube.com/user/MrMrWidi" target="_blank" class="teksLink">All About Education</a></span>
                    </div>
                    </div>
                </div>

            <div class="col-md-12 col-xs-12 listYoutube mb10" >
                <div class="thumbnailYouTube">
                <a href="{{url('/?videoParam=ZoPY_e1dOXw')}}">
                    <img style="width:100%" class="staticImage" src="https://i.ytimg.com/vi/ZoPY_e1dOXw/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLDaLNl6jLh74XD5xY-T7LZYoWn9Ig" alt="">
                </a>
                </div>
                <div class="youTubeMeta">
                <div class="ml15">
                    <a href="{{url('/?videoParam=ZoPY_e1dOXw')}}">
                        <span style="color:white"><b>Gerakan Sekolah Menyenangkan</b></span>
                    </a>
                    <br>
                    <span style="color:rgb(255, 255, 255)">Oleh : <a href="https://www.youtube.com/channel/UCjo3WLJ7HYxM4fnCes0vA_A" target="_blank" class="teksLink">Perdana Saputra</a></span>
                </div>
                </div>
            </div>



            <div class="col-md-12 col-xs-12 listYoutube mb10"  >
                <div class="thumbnailYouTube">
                    <a href="{{url('/?videoParam=D3GB1YzF9x4')}}">
                        <img style="width:100%" class="staticImage" src="https://i.ytimg.com/vi/D3GB1YzF9x4/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLDweApwqxJWoS7dWYHVFAuhWvzDKg" alt="">
                    </a>
                    </div>
                <div class="youTubeMeta">
                    <div class="ml15">
                        <span style="color:white"><b>GSM - Mengubah Paradigma Pendidikan Indonesia</b></span>
                        <br>
                        <a href="{{url('/?videoParam=D3GB1YzF9x4')}}">
                        <span style="color:rgb(255, 255, 255)">Oleh : <a href="https://www.youtube.com/channel/UCKAdVVqtvnqWjH_jScw2MZw" target="_blank" class="teksLink">Gerakan Sekolah Menyenangkan</a> </span>
                        </a>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xs-12 listYoutube mb10" >
                <div class="thumbnailYouTube">
                    <a href="{{url('/?videoParam=7Evg7L3eiQk')}}">
                        <img style="width:100%" class="staticImage" src="https://i.ytimg.com/vi/7Evg7L3eiQk/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLCH0M5vT_ujOiifPUkCiqzy4Xiq0Q" alt="">
                    </a>
                    </div>
                <div class="youTubeMeta">
                    <div class="ml15">
                        <a href="{{url('/?videoParam=7Evg7L3eiQk')}}">
                        <span style="color:white"><b>Gerakan Sekolah Menyenangkan (GSM) di SDN Rahayu tahun 2019</b></span>
                        </a>
                        <br>
                        <span style="color:rgb(255, 255, 255)">Oleh : <a href="https://www.youtube.com/watch?v=7Evg7L3eiQk" target="_blank" class="teksLink">Rudy Saputro</a> </span>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xs-12 listYoutube mb10" >
                <div class="thumbnailYouTube">
                    <a href="{{url('/?videoParam=rGrwTPR4328')}}">
                    <img style="width:100%" class="staticImage" src="https://i.ytimg.com/vi/rGrwTPR4328/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLB64Lrtqlq-YMPZolxxXvXRd9Is0Q" alt="">
                    </a>
                </div>
                <div class="youTubeMeta">
                <div class="ml15">
                    <a href="{{url('/?videoParam=rGrwTPR4328')}}">
                        <span style="color:white"><b>Gerakan Sekolah Menyenangkan</b></span>
                    </a>
                    <br>
                    <span style="color:rgb(255, 255, 255)">Oleh : <a href="https://www.youtube.com/channel/UCpvAZhzGuUBL2BbAd0Q2hvw" target="_blank" class="teksLink">Azis Licht</a> </span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-md-12 mt20 testimoni">
        <div class="row" style="padding-bottom: 50px;text-align:center;">
            <h1 class="welcomePageTitle">Lebih Dari 2000 Sekolah Telah Menerapkan GSM </h1>
            <p style="margin-bottom: 50px;">Lihat cerita dan pengalaman para guru, siswa dan orang tua berikut ini</p>
            <div class="owl-carousel owl-theme" id="owl-multi" style="z-index: 100">
            <div class="item">
                <div class="col-md-12">
                <div class="card-box p-0">
                    <div class="profile-widget text-center">
                        <div style="background: rgb(0, 158, 219)!important" class="bg-custom bg-profile"></div>
                        <img src="assets/elearning/assets/images/users/avatar.png" class="thumb-lg img-circle img-thumbnail" alt="img">
                        <h4>Bu Megawati</h4>
                        <p class="text-muted">MI Mathla’ul Anwar Kademangan, Tangsel</p>
                        <p class="text-muted p-20">GSM sangat menyenangkan. Pengalaman workshop di Jogja menjadi ilmu yang bermanfaat.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                <div class="card-box p-0">
                    <div class="profile-widget text-center">
                        <div style="background: rgb(0, 29, 110 )!important" class="bg-custom bg-profile"></div>
                        <img src="assets/elearning/assets/images/users/avatar.png" class="thumb-lg img-circle img-thumbnail" alt="img">
                        <h4>Bu Ila</h4>
                        <p class="text-muted">SD Muhammadiyah Mantaran, Sleman</p>
                        <p class=" text-muted p-20">GSM langsung aplikatif dalam pembelajaran. Filosofi sebagai guru seperti terarahkan dengan konsep infinite dan finite games oleh Pak Rizal..</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                <div class="card-box p-0">
                    <div class="profile-widget text-center">
                        <div style="background: rgb(94, 122, 200 )!important" class="bg-custom bg-profile"></div>
                        <img src="assets/elearning/assets/images/users/avatar.png" class="thumb-lg img-circle img-thumbnail" alt="img">
                        <h4>Bu Rusmiati</h4>
                        <p class="text-muted">SDN 002 Sambaliung, Berau</p>
                        <p class="text-muted p-20">Saya sangat bangga dan senang sekali dapat bergabung dengan GSM. Di sini, saya banyak mendapatkan ilmu tentang mendidik rasa, pikir, dan karya.</p>
                    </div>
                </div>
                </div> <!-- end col -->
            </div>
            <div class="item">
                <div class="col-md-12">
                <div class="card-box p-0">
                <div class="profile-widget text-center">
                    <div style="background: rgb(0, 158, 219) !important" class="bg-custom bg-profile"></div>
                    <img src="assets/elearning/assets/images/users/avatar.png" class="thumb-lg img-circle img-thumbnail" alt="img">
                    <h4>Bu Maria</h4>
                    <p class="text-muted">SD Kalam Kudus, Sleman</p>
                    <p class="text-muted p-20">Pembicaraan GSM sangat kreatif dan memberkati saya, rasanya ingin langsung menerapkan semuanya di kelas saya.</p>
                </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                <div class="card-box p-0">
                <div class="profile-widget text-center">
                    <div style="background: rgb(94, 122, 200 )!important" class="bg-custom bg-profile"></div>
                    <img src="assets/elearning/assets/images/users/avatar.png" class="thumb-lg img-circle img-thumbnail" alt="img">
                    <h4>Bu Nurul</h4>
                    <p class="text-muted">SMAN 1 Singorojo, Kendal</p>
                    <p class=" text-muted p-20">Workshop GSM memberikan banyak ilmu yang bisa dikembangkan. Semoga saya bisa mengikuti perubahan dengan baik dan menjadikan sekolah menyenangkan.</p>
                </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                <div class="card-box p-0">
                <div class="profile-widget text-center">
                    <div style="background: rgb(0, 158, 219)!important" class="bg-custom bg-profile"></div>
                    <img src="assets/elearning/assets/images/users/avatar.png" class="thumb-lg img-circle img-thumbnail" alt="img">
                    <h4>Bu Nurini</h4>
                    <p class="text-muted">SDN Donoharjo, Sleman</p>
                    <p class=" text-muted p-20">GSM ini sangat bagus. Kami sebagai guru jadi tahu kekurangan dalam pembelajaran di kelas dan bisa menciptakan suasana belajar yang inovatif.</p>
                </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                <div class="card-box p-0">
                <div class="profile-widget text-center">
                    <div style="background: rgb(0, 29, 110 )!important" class="bg-custom bg-profile"></div>
                    <img src="assets/elearning/assets/images/users/avatar.png" class="thumb-lg img-circle img-thumbnail" alt="img">
                    <h4>Bu Yuni</h4>
                    <p class="text-muted">SDN Brengosen 2, Sleman</p>
                    <p class=" text-muted p-20">Workshop GSM sangat menyenangkan. Dulu saya tak tahu apa-apa, namun sekarang sedikit demi sedikit sudah tahu dan bisa menerapkan di sekolah.</p>
                </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                <div class="card-box p-0">
                <div class="profile-widget text-center">
                    <div style="background: rgb(94, 122, 200 )!important" class="bg-custom bg-profile"></div>
                    <img src="assets/elearning/assets/images/users/avatar.png" class="thumb-lg img-circle img-thumbnail" alt="img">
                    <h4>Bu Sri Wahyuni</h4>
                    <p class="text-muted">SDN Pendulan, Sleman</p>
                    <p class="text-muted p-20">Sangat menyenangkan, membuka wawasan untuk mengembangkan sistem pembelajaran yang menyenangkan dan inovatif.</p>
                </div>
                </div>
                </div> <!-- end col -->
            </div>
            </div>
            </div>
        </div>
        <div class="col-md-12 partnerBg">
        <div class="row" style="padding-bottom: 70px;text-align:center;background-color: rgba(103, 148, 223, 0.7);">
            <h1 class="welcomePageTitle" style="color: rgb(252, 237, 64);text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Partner Kami</h1>
            <p style="margin-bottom: 50px;color:white">GSM Sudah Terbukti Kualitas dan Kerjasamanya</p>
            <div class="owl-carousel owl-theme" id="owl-multi-2">
                <div class="item">
                    <!-- <div class="col-md-4"> -->
                        <img style="width:50%!important" src="https://i.imgur.com/LRWTlV2.png" alt="">
                    <!-- </div> -->
                </div>
                <div class="item">
                    <!-- <div class="col-md-4"> -->
                        <img style="width:45%!important" src="https://i.imgur.com/cmqUCDv.png" alt="">
                    <!-- </div> -->
                    </div>
                    <div class="item">
                        <!-- <div class="col-md-4"> -->
                            <img style="width:40%!important" src="https://seeklogo.com/images/K/Kabupaten_Sleman-logo-97E644BFE9-seeklogo.com.png" alt="">
                        <!-- </div> -->
                    </div>
                    <div class="item">
                        <!-- <div class="col-md-4"> -->
                            <img style="width:100%!important;margin-top:40px" src="https://i.imgur.com/IsrrbRC.png" alt="">
                        <!-- </div> -->
                        </div>
            </div>
        </div>
        </div>

        <div class="col-md-12">
            <div class="row" style="text-align:center">
            <h1 class="welcomePageTitle" style="color: rgb(10, 59, 219)">Kenapa Harus Mendaftar Elearning GSM</h1>
            <p style="margin-bottom: 50px;color:rgb(66, 66, 66)">Keuntungan Yang Anda Dapatkan</p>
                <div class="owl-carousel owl-theme" id="owl-multi-3">
                    <div class="item">
                    <!-- <div class="col-md-4"> -->
                        <img style="width:50%!important" src="https://image.flaticon.com/icons/svg/167/167752.svg" alt="">
                        <h3 style="color: rgb(245, 114, 39)"><b>Dibimbing Assessor</b></h3>
                        <!-- <p style="color:black">Anda dapat berinteraksi, bertanya dan berkomunikasi dengan Assessor Kami</p> -->
                    <!-- </div> -->
                    </div>
                    <div class="item">
                        <!-- <div class="col-md-4"> -->
                            <img style="width:50%!important;" src="https://image.flaticon.com/icons/svg/189/189093.svg" alt="">
                            <h3 style="color: rgb(255, 192, 20)"> <b>Biaya Gratis</b></h3>
                            <!-- <p style="color:black">Belajar di E-Learning GSM 100% gratis dan tidak dipungut biaya apapun</p> -->
                            <!-- </div> -->
                    </div>
                    <div class="item">
                        <!-- <div class="col-md-4"> -->
                            <img style="width:50%!important;" src="https://image.flaticon.com/icons/svg/148/148709.svg" alt="">
                            <h3 style="color:rgb(64, 115, 255)"><b>Materi Video</b></h3>
                            <!-- <p style="color:black">Materi disajikan dalam bentuk video yang tidak membuat Anda bosan</p> -->
                            <!-- </div> -->
                        </div>
                        <div class="item">
                            <!-- <div class="col-md-4"> -->
                                <img style="width:50%!important;" src="https://image.flaticon.com/icons/svg/1497/1497573.svg" alt="">
                                <h3 style="color: crimson"><b>Bagikan Konten</b> </h3>
                                <!-- <p style="color:black">Anda bisa membagikan konten kreatif dan melihat konten user lain </p> -->
                            <!-- </div> -->
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 daftarSekarang" style="text-align: center;margin-top: 50px">
            <div class="row" style="padding-bottom: 70px;text-align:center;background-color: rgba(103, 148, 223, 0.7);">
            <div class="col-md-12">
                <h1 class="welcomePageTitle" style="color: rgb(252, 237, 64);text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Ayo Daftar Sekarang !!!</h1>
                <p style="margin-bottom: 50px;color:white">Tunggu Apalagi? Langsung Tekan Tombol Daftar Ini</p>
                <a  href="{{ url('/daftar') }}" >
                    <button class="btn btn-default btnDaftar"> <span style="color:white" class="welcomePageTitle">Daftar Sekarang</span></button>
                </a>
            </div>
            </div>
        </div>


    </div>

        <footer class="footer text-right" style="left:0px;">
            © 2019. All rights reserved.
        </footer>
    </div>

    <script src="{{asset('assets/plugins/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script>
    $(document).ready(function(){
    var url_string = window.location.href
    var url = new URL(url_string);
    var videoParam = url.searchParams.get("videoParam");
    if(videoParam == null){
        $("#videoDisplay").append(
        '<iframe src="https://www.youtube.com/embed/iv1_Va1SAOo" width="100%" height="380" frameborder="0" allowfullscreenid="you_tube"></iframe>'+
        '<h4 style="color:rgb(255, 255, 255)"><b>Gerakan Sekolah Menyenangkan dan Gerakan Literasi</b></h4>'+
        '<p style="color:rgb(255, 255, 255)">Oleh : <a href="https://www.youtube.com/user/MrMrWidi" target="_blank" class="teksLink"> All About Education</a></p>'
        )
    }else{
        switch(videoParam){
        case "iv1_Va1SAOo" :
        $("#videoDisplay").append(
        '<iframe src="https://www.youtube.com/embed/iv1_Va1SAOo" width="100%" height="380" frameborder="0" allowfullscreenid="you_tube"></iframe>'+
        '<h4 style="color:rgb(255, 255, 255)"><b>Gerakan Sekolah Menyenangkan dan Gerakan Literasi</b></h4>'+
        '<p style="color:rgb(255, 255, 255)">Oleh : <a href="https://www.youtube.com/user/MrMrWidi" target="_blank" class="teksLink"> All About Education</a></p>'
        )
        break;

        case "ZoPY_e1dOXw" :
        $("#videoDisplay").append(
        '<iframe src="https://www.youtube.com/embed/ZoPY_e1dOXw" width="100%" height="380" frameborder="0" allowfullscreenid="you_tube"></iframe>'+
        '<h4 style="color:rgb(255, 255, 255)"><b>Gerakan Sekolah Menyenangkan </b></h4>'+
        '<p style="color:rgb(255, 255, 255)">Oleh : <a href="https://www.youtube.com/channel/UCjo3WLJ7HYxM4fnCes0vA_A" target="_blank" class="teksLink"> Perdana Saputra</a></p>'
        )
        break;

        case "D3GB1YzF9x4" :
        $("#videoDisplay").append(
        '<iframe src="https://www.youtube.com/embed/D3GB1YzF9x4" width="100%" height="380" frameborder="0" allowfullscreenid="you_tube"></iframe>'+
        '<h4 style="color:rgb(255, 255, 255)"><b>GSM - Mengubah Paradigma Pendidikan Indonesia </b></h4>'+
        '<p style="color:rgb(255, 255, 255)">Oleh : <a href="https://www.youtube.com/channel/UCKAdVVqtvnqWjH_jScw2MZw" target="_blank" class="teksLink">Gerakan Sekolah Menyenangkan</a></p>'
        )
        break;

        case   "7Evg7L3eiQk" :
        $("#videoDisplay").append(
        '<iframe src="https://www.youtube.com/embed/7Evg7L3eiQk" width="100%" height="380" frameborder="0" allowfullscreenid="you_tube"></iframe>'+
        '<h4 style="color:rgb(255, 255, 255)"><b>Gerakan Sekolah Menyenangkan (GSM) di SDN Rahayu tahun 2019 </b></h4>'+
        '<p style="color:rgb(255, 255, 255)">Oleh : <a href="https://www.youtube.com/channel/UCImwsVcHeh89Cypuw6ssjUw" target="_blank" class="teksLink">Rudy Saputro</a></p>'
        )
        break;

        case   "rGrwTPR4328" :
        $("#videoDisplay").append(
        '<iframe src="https://www.youtube.com/embed/rGrwTPR4328" width="100%" height="380" frameborder="0" allowfullscreenid="you_tube"></iframe>'+
        '<h4 style="color:rgb(255, 255, 255)"><b>Gerakan Sekolah Menyenangkan</b></h4>'+
        '<p style="color:rgb(255, 255, 255)">Oleh : <a href="https://www.youtube.com/channel/UCpvAZhzGuUBL2BbAd0Q2hvw" target="_blank" class="teksLink">Azis Licht</a></p>'
        )
        break;
    }
    }


    //Owl-Multi
    $('#owl-multi-3').owlCarousel({
                        loop:true,
                        margin:20,
                        nav:false,
                        autoplay:false,
                        responsive:{
                            0:{
                                items:1
                            },
                            480:{
                                items:2
                            },
                            700:{
                                items:3
                            },
                            1000:{
                                items:3
                            },
                            1100:{
                                items:3
                            }
                        }
                    })

    $('#owl-multi-2').owlCarousel({
                        loop:true,
                        margin:20,
                        nav:false,
                        autoplay:false,
                        responsive:{
                            0:{
                                items:1
                            },
                            480:{
                                items:2
                            },
                            700:{
                                items:4
                            },
                            1000:{
                                items:4
                            },
                            1100:{
                                items:5
                            }
                        }
                    })

            $('#owl-multi').owlCarousel({
                        loop:true,
                        margin:20,
                        nav:false,
                        autoplay:false,
                        responsive:{
                            0:{
                                items:1
                            },
                            480:{
                                items:2
                            },
                            700:{
                                items:4
                            },
                            1000:{
                                items:3
                            },
                            1100:{
                                items:5
                            }
                        }
                    })
    })
</script>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
@endsection
