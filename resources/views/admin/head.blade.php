<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <title>@yield('judul')</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link href="{{url('tabler/assets/css/dashboard.css')}}" rel="stylesheet" />
    <script src="{{url('tabler/assets/js/dashboard.js')}}"></script>
    @yield('asset')
</head>


<body class="">
    <div class="page">
        <div class="page-main">
            <div class="header py-4">
                <div class="container">
                    <div class="d-flex">

                        <div class="d-flex order-lg-2 ml-auto">
                            <div class="dropdown">
                                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                            <span class="avatar">
                                <i class="fe fe-user"></i>
                            </span>
                            <span class="ml-2 d-none d-lg-block">
                            <span class="text-default">{{$username}}</span>
                            <small class="text-muted d-block mt-1">Administrator Lv. {{$level}}</small>
                            </span>
                          </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="{{url("/si-admin/$token/logout ")}}">
                                    <i class="dropdown-icon fe fe-log-out"></i> Sign out
                                </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                      </a>
                    </div>
                </div>
            </div>
            <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg order-lg-first">
                            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active"><i class="fe fe-home"></i> Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fe fe-box"></i> Interface</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link"><i class="fe fe-calendar"></i> Components</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link"><i class="fe fe-file"></i> Pages</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link"><i class="fe fe-check-square"></i> Forms</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fe fe-file-text"></i> Documentation</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @yield('konten')
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                        Copyright © {{date("Y")}} <a href=".">Tabler</a>. Kunjungi <a href="#">Tentang Koding</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>