<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecommercer</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--
    <meta http-equiv="refresh" content=""> --}}

    {{--
    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png"> --}}
    {{--
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <!--DataTable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    --}}
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <!--Fixed-->
    {{--
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.dataTables.min.css">
    --}}
    <!--Style-->
    <link rel="stylesheet" href="{{ asset('e_admin/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('e_admin/css/style.css') }}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.min.css"
        integrity="sha512-A374yR9LJTApGsMhH1Mn4e9yh0ngysmlMwt/uKPpudcFwLNDgN3E9S/ZeHcWTbyhb5bVHCtvqWey9DLXB4MmZg=="
        crossorigin="anonymous" />



    @livewireStyles
    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }

        .countCart {
            position: relative;
        }

        .countCart span {
            position: absolute;
            top: -4px;
            right: 15px;
            display: block;
        }

        body {
            /* background-color: #f0eeee; */
            background-color: #f8f8f8;
        }

        .form-group {
            margin-top: 12px;
        }

        /* tr{
            text-align: center;
        }
        th{
            text-align: center
        } */
    </style>
</head>

<body>
    <!-- Left Panel Menuuuuuuuuuuuu -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                    @if (Auth::user()->role === 'admin')
                        <li class="menu-title">Dashboard Barang</li>
                        <li class="">
                            <a href="{{ route('dashboard.admin') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
                        </li>
                        <li class="menu-title">Data User Admin</li>
                        <li class="">
                            <a href="{{ route('user.all') }}"><i class="menu-icon fa fa-group"></i>Users</a>
                        </li>
                        <li class="">
                            <a href="{{ route('suppliers.all') }}"><i class="menu-icon fa fa-truck"></i>Supplier</a>
                        </li>
                        <li class="menu-title">Item Barang</li>
                        <li class="">
                            <a href="{{ route('category.all') }}"><i class="menu-icon fa fa-tasks"></i>Kategori</a>
                        </li>
                        <li class="">
                            <a href="{{ route('product.all') }}"><i class="menu-icon fa fa-archive"></i>Barang</a>
                        </li>
                        <li class="">
                            <a href="{{ route('product_masuk.all') }}"><i class="menu-icon fa fa-sign-in"></i>Barang Masuk</a>
                        </li>
                        <li class="">
                            <a href="{{ route('product_keluar.all') }}"><i class="menu-icon fa fa-sign-out"></i>Barang Keluar</a>
                        </li>
                    @endif

                    <li class="menu-title">Peminjaman Barang</li>
                    <li>
                        <a href="{{ route('peminjaman.add') }}"><i class="menu-icon fa fa-database"></i>Ajukan PemBar</a>
                    </li>
                    <li>
                        <a href="{{ route('peminjaman.all') }}">
                            <i class="menu-icon fa fa-clipboard"></i>History PemBar
                            @if (Auth::user()->role === 'admin')
                                <span class="badge rounded-circle badge-notification text-light"
                                    style="background-color: #e46359;">
                                    {{ $count_peminjaman }}
                                </span>
                            @endif
                        </a>
                    </li>

                    @if (Auth::user()->role === 'admin')
                        <li class="menu-title">User Activity</li>
                        <li class="">
                            <a href="{{ route('product.activity') }}"><i class="menu-icon fa fa-archive"></i>Aktivitas Barang</a>
                        </li>
                        <li class="">
                            <a href="{{ route('product_masuk.activity') }}"><i class="menu-icon fa fa-arrow-circle-right"></i>Log Barang Masuk</a>
                        </li>
                        <li class="">
                            <a href="{{ route('product_keluar.activity') }}"><i class="menu-icon fa fa-arrow-circle-left"></i>Log Barang Keluar</a>
                        </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                  <div class="navbar-header">
                    <a href="#" class="navbar-brand"><b style="color: #922c1a;">SIPERBA </b> UNAS PASIM</a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        {{-- <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div> --}}

                        {{-- <div class="d-flex justify-content-center">
                            @livewire('admin.admin-confirm-batal-order-component')
                            @livewire('admin.admin-notif-component')
                        </div> --}}



                        {{-- <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div> --}}

                        {{-- <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div> --}}
                    </div>

                    <div class="user-area dropdown float-right">
                        {{-- <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('folder_image/user.jpg')}}"
                                alt="User Avatar">
                        </a> --}}
                        {{-- <a class="nav-link" href="#"><i class="fa fa- user"></i>{{Auth::user()->name}}</a> --}}
                     

                        <form action="{{route('aksilogout')}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-light">Logout</button>
                        </form>

                        <div class="user-menu dropdown-menu">
                            <div class="container">
                                {{-- <a class="nav-link" href="#"><i class="fa fa- user"></i>{{Auth::user()->name}}</a>
                                --}}
                                {{-- <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span
                                        class="count">13</span></a> --}}
                                {{-- <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content color">
            <br>
            {{-- @include('sweetalert::alert') --}}
            {{ $slot }}
            @yield('content')
        </div>
        <!-- /.content -->
        {{-- <div class="clearfix"></div> --}}
        <!-- Footer -->
        {{-- <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer> --}}
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    @livewireScriptsConfig
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.all.min.js"
        integrity="sha512-LXVbtSLdKM9Rpog8WtfAbD3Wks1NSDE7tMwOW3XbQTPQnaTrpIot0rzzekOslA1DVbXSVzS7c/lWZHRGkn3Xpg=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
    {{--
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script> --}}
    {{--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('e_admin/js/main.js') }}"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="{{ asset('e_admin/js/init/weather-init.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    {{--
    <script src="https://cdn.tiny.cloud/1/g9j399iuok83vb7tkyzvjkzvmkz4puzodkt6jt8vr1j9ma1l/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script src="{{ asset('e_admin/js/init/fullcalendar-init.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    <!--Local Stuff-->

    <script type="text/javascript">
        window.addEventListener('show', event => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed');
                }
            });
        });

        window.addEventListener('categoryDeleted', event => {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            );

        });
    </script>
    <script>
        //sweet-alert
        document.addEventListener('livewire:init', () => {

            Livewire.on('show-delete-confirmation', (event) => {

                Swal.fire({
                    title: 'Yakin ingin hapus?',
                    text: 'Data yang dihapus tidak bisa dikembalikan!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {

                    if (result.isConfirmed) {

                        Livewire.dispatch('deleteConfirmed', {
                            id: event.id
                        });

                    }

                });

            });

            Livewire.on('show-success', (event) => {

                Swal.fire({
                    icon: 'success',
                    title: event.title,
                    text: event.text,
                    confirmButtonColor: '#198754',
                    timer: 2000,
                    showConfirmButton: false
                });

            });

        });


        // document.addEventListener('DOMContentLoaded', function() {
        //     window.addEventListener('show-delete-confirmation', event => {
        //         Swal.fire({
        //             title: 'Yakin ingin hapus?',
        //             text: "Data yang dihapus tidak bisa dikembalikan!",
        //             icon: 'warning',
        //             showCancelButton: true,
        //             confirmButtonColor: '#d33',
        //             cancelButtonColor: '#3085d6',
        //             confirmButtonText: 'Ya, hapus!'
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 Livewire.emit('deleteConfirmed', event.detail.id);
        //                 Swal.fire(
        //                     'Terhapus!',
        //                     'Data berhasil dihapus.',
        //                     'success'
        //                 )
        //             }
        //         })
        //     });
        // });



        //datatable
        new DataTable('#data-table', {
            responsive: true
        });

        //INPUT IDR NO RP
        var tanpa_rupiah = document.getElementById('tanpa-rupiah');
        tanpa_rupiah.addEventListener('keyup', function (e) {
            tanpa_rupiah.value = formatRupiah(this.value);
        });

        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        //INPUT IDR
        // document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
        //      element.addEventListener('keyup', function(e) {
        //      let cursorPostion = this.selectionStart;
        //      let value = parseInt(this.value.replace(/[^,\d]/g, ''));
        //      let originalLenght = this.value.length;
        //        if (isNaN(value)) {
        //            this.value = "";
        //        } else {    
        //            this.value = value.toLocaleString('id-ID', {
        //            currency: 'IDR',
        //            style: 'currency',
        //            minimumFractionDigits: 0
        //            });
        //              cursorPostion = this.value.length - originalLenght + cursorPostion;
        //              this.setSelectionRange(cursorPostion, cursorPostion);
        //        }
        //      });
        //    });

        jQuery(document).ready(function ($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [{
                label: "Desktop visits",
                data: [
                    [1, 32]
                ],
                color: '#5c6bc0'
            },
            {
                label: "Tab visits",
                data: [
                    [1, 33]
                ],
                color: '#ef5350'
            },
            {
                label: "Mobile visits",
                data: [
                    [1, 35]
                ],
                color: '#66bb6a'
            }
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [{
                label: "Direct Sell",
                data: [
                    [1, 65]
                ],
                color: '#5b83de'
            },
            {
                label: "Channel Sell",
                data: [
                    [1, 35]
                ],
                color: '#00bfa5'
            }
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [
                [0, 3],
                [1, 5],
                [2, 4],
                [3, 7],
                [4, 9],
                [5, 3],
                [6, 6],
                [7, 4],
                [8, 10]
            ];

            var plot = $.plot($('#flotLine5'), [{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }], {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    series: [
                        [0, 18000, 35000, 25000, 22000, 0],
                        [0, 33000, 15000, 20000, 15000, 300],
                        [0, 15000, 28000, 15000, 30000, 5000]
                    ]
                }, {
                    low: 0,
                    showArea: true,
                    showLine: false,
                    showPoint: false,
                    fullWidth: true,
                    axisX: {
                        showGrid: true
                    }
                });

                chart.on('draw', function (data) {
                    if (data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect
                                    .height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById("TrafficChart");
                ctx.height = 150;
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [0, 2900, 5000, 3300, 6000, 3250, 0]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [
                    [0, 18],
                    [2, 8],
                    [4, 5],
                    [6, 13],
                    [8, 5],
                    [10, 7],
                    [12, 4],
                    [14, 6],
                    [16, 15],
                    [18, 9],
                    [20, 17],
                    [22, 7],
                    [24, 4],
                    [26, 9],
                    [28, 11]
                ],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
        //     tinymce.init({
        //     selector: '#myTextarea'
        //  });
    </script>
</body>

</html>