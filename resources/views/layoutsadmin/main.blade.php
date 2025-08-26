<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Tahai Baru</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{url('admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{url('admin/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{url('admin/plugins/animate-css/animate.css') }}" rel="stylesheet" />
    <link href="{{url('admin/plugins/light-gallery/css/lightgallery.css') }}" rel="stylesheet">

     <!-- JQuery DataTable Css -->
    <link href="{{url('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{url('admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{url('admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{url('admin/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{url('admin/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{url('admin/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars" style="display: none;"></a>
                <a class="navbar-brand" href="index.html">TAHAI BARU</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar-collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="/logout">{{auth()->user()->email}}</a></li>
                    <!-- #END# Call Search -->
                    <li class="pull-right"><a href="/logout"><i class="material-icons">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="/dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/beritaadmin">
                            <i class="material-icons">update</i>
                            <span>Berita</span>
                        </a>
                    </li>
                    <li>
                        <a href="/apbdes">
                            <i class="material-icons">today</i>
                            <span>Apbdes</span>
                        </a>
                    </li>
                    <li>
                        <a href="/galery">
                            <i class="material-icons">perm_media</i>
                            <span>Galery</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group</i>
                            <span>Pendataan Penduduk</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Lingkungan</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/rt">RT</a>
                                    </li>
                                    <li>
                                        <a href="/rw">RW</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Penduduk</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/kk">Data Kartu Keluarga</a>
                                    </li>
                                    <li>
                                        <a href="/penduduk">Data Penduduk</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">dns</i>
                            <span>Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/padmin">Pembangunan</a>
                                <a href="/badmin">BLTDD</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Surat</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/suratadmin">
                                    <span>Permintaan Surat</span>
                                </a>
                            </li>
                            <li>
                                <a href="/suratselesai">
                                    <span>Surat Selesai</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/keluhan">
                            <i class="material-icons">assignment_late</i>
                            <span>Keluhan Masyarakat</span>
                        </a>
                    </li>
                    <li>
                        <a href="/lkkadmin">
                            <i class="material-icons">account_balance</i>
                            <span>LKK</span>
                        </a>
                    </li>
                    <li>
                        <a href="/profilad">
                            <i class="material-icons">view_stream</i>
                            <span>Profil</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2025-2025 <a href="">Suntree Kalimantan</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            @yield('container')
        </div>
    </section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  @if(Session::has('sukses'))
  swal("Berhasil", "You clicked the button!", "success");
  @endif
</script>
    <!-- Jquery Core Js -->
    <script src="{{url('admin/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{url('admin/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{url('admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{url('admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{url('admin/plugins/node-waves/waves.js') }}"></script>

    <!-- Ckeditor -->
    <script src="{{url('admin/plugins/ckeditor/ckeditor.js') }}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{url('admin/plugins/autosize/autosize.js') }}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{url('admin/plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{url('admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{url('admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{url('admin/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{url('admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{url('admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{url('admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{url('admin/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{url('admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{url('admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{url('admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{url('admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{url('admin/js/admin.js') }}"></script>
    <script src="{{url('admin/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{url('admin/js/pages/forms/basic-form-elements.js') }}"></script>
    <script src="{{url('admin/js/pages/forms/editors.js') }}"></script>
    

    <!-- Light Gallery Plugin Js -->
    <script src="{{url('admin/plugins/light-gallery/js/lightgallery-all.js') }}"></script>

    <!-- Demo Js -->
     <script src="{{url('admin/js/pages/medias/image-gallery.js') }}"></script>
    <script src="{{url('admin/js/demo.js') }}"></script>
    @yield('footer')
</body>

</html>
