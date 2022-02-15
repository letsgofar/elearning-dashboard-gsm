<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-learning GSM</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/assets/css/vertical-layout-light/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/vertical-layout-light/chardinjs.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/elearning/assets/css/mainpage.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />

    <link rel="stylesheet" href="{{asset('/assets/elearning/assets/css/purple.css')}}">


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--icon-->
    @include('dashboard.layouts.style')

    <!-- UNTUK CHART -->
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart1);
	google.charts.setOnLoadCallback(drawChart2);
	google.charts.setOnLoadCallback(drawChart3);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart1() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['Mushrooms', 3],
        ['Onions', 1],
        ['Olives', 1],
        ['Zucchini', 1],
        ['Pepperoni', 2]
    ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
        'width':400,
        'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
        }

		function drawChart2() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['Mushrooms', 2],
        ['Onions', 2],
        ['Olives', 2],
        ['Zucchini', 1],
        ['Pepperoni', 1]
    ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
        'width':400,
        'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
        }

		function drawChart3() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['Mushrooms', 1],
        ['Onions', 2],
        ['Olives', 1],
        ['Zucchini', 3],
        ['Pepperoni', 1]
    ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
        'width':400,
        'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
        chart.draw(data, options);
        }
    </script>

    <!-- UNTUK CHART -->


</head>
<body data-chardin-sequenced="true" data-chardin-auto="false" data-chardin-delay="800">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav id="top-nav" class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div id="logoweb" class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" data-intro="Selamat datang di website E-learning GSM, Yuk kita tur dulu!" data-position="bottom" >
            <a class="navbar-brand brand-logo mr-5" href="/"><img src="{{asset('assets/elearning/assets/images/origsm.png')}}" class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="/"><img src="{{asset('assets/images/small-icon.png')}}" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    <span class="input-group-text" id="search">
                    <i class="icon-search"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
            </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="icon-bell mx-0"></i>
                <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                        <i class="ti-info-alt mx-0"></i>
                    </div>
                    </div>
                    <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                        Just now
                    </p>
                    </div>
                </a>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                        <i class="ti-settings mx-0"></i>
                    </div>
                    </div>
                    <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                        Private message
                    </p>
                    </div>
                </a>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                        <i class="ti-user mx-0"></i>
                    </div>
                    </div>
                    <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                        2 days ago
                    </p>
                    </div>
                </a>
                </div>
            </li>
            <li id="profilUser" class="nav-item nav-profile dropdown" data-intro="Gunakan untuk logout dari Web" data-position="bottom">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="{{asset('assets/images/faces/face28.jpg')}}" alt="profile"/>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                    <i class="ti-settings text-primary"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </div>
            </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
            </button>
        </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper"  style="z-index:auto;">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i id="settings-trigger-i" class="ti-settings"></i></div>
            <div data-toggle="chardinjs" id="support-trigger" class="start-support" href="#"><i id="support-trigger-i" class="ti-help"></i></div>
            <div id="theme-settings" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles success"></div>
                <div class="tiles info"></div>
                <div class="tiles dark"></div>
                <div class="tiles default"></div>
            </div>
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav style="z-index:1000;" class="sidebar sidebar-offcanvas" id="sidebar" data-intro="Menu berupa kumpulan kegiatan yang bisa user lakukan ~" data-position="right" >
            <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-book menu-icon"></i>
                <span class="menu-title">Beranda</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="/home">Halaman Utama</a></li>
                    <li class="nav-item"><a class="nav-link" href="/elearning/berita-gsm">Berita GSM</a></li>
                    <li class="nav-item"><a class="nav-link" href="/elearning/persebaran-gsm">Persebaran GSM</a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Profil Pengguna</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="/elearning/rincian-profil">Rincian Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="/elearning/ubah-profil">Ubah Profil</a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="ti-blackboard menu-icon"></i>
                <span class="menu-title">Materi Pelatihan</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="/elearning/materi/materi-special">Materi Special</a></li>
                    <li class="nav-item"><a class="nav-link" href="/elearning/materi/materi-basic">Level Basic</a></li>
                    <li class="nav-item"><a class="nav-link" href="/elearning/materi/materi-advanced">Level Advanced</a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="ti-bookmark-alt menu-icon"></i>
                <span class="menu-title">Berbagi</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/elearning/berbagi/buat-konten-berbagi')}}">Buat Konten Berbagi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/elearning/berbagi/lini-masa-berbagi')}}">Lini Masa Berbagi</a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                <i class="ti-id-badge menu-icon"></i>
                <span class="menu-title">Pendampingan</span>
                </a>
            </li>
            </ul>
        </nav>

        @yield('content')
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 from Team GSM. All rights reserved.</span>
            </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('/assets/js/dataTables.select.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('/assets/js/template.js')}}"></script>
    <script src="{{asset('/assets/js/settings.js')}}"></script>
    <script src="{{asset('/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('/assets/js/webguide.js')}}"></script>
    <script src="{{asset('/assets/js/chardinjs.min.js')}}"></script>
    <script src="{{asset('/assets/js/Chart.roundedBarCharts.js')}}"></script>
    <script src="{{asset('/assets/js/file-upload.js')}}"></script>
    <!-- End custom js for this page-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            const linkLi = $( ".nav-item" );
            const linkAnchor = $( ".nav-item a" ); // anchor is require to prevent for not to direct
            linkAnchor.bind( "click", function(event) {
                var clickedItem = $( this ).parent("li:first");
                linkLi.each( function() {
                    $( this ).removeClass( "active" );
                });
                clickedItem.addClass( "active" );
            });
        $( ".nav-item a[href$='"+window.location.pathname+"']" ).parent("li:first").addClass("active");
        });
    </script>
    <script>
            jQuery(function($) {
            var path = window.location.href;
            $('ul a').each(function() {
                if (this.href === path) {
                    $(this).addClass('sub-menu active');
                    $( this ).parent().parent().closest("li").addClass('active2');
                    $('.active2 a:first').addClass('active'); //add the active class to the parent node
                }
            });
            });
    </script>
<!-- End custom js for this page-->

    @yield('js')
    @include('sweetalert::alert')

</body>

</html>

