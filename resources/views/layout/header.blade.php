<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bất động sản Việt Nam</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

<body>
<!-- header-->
<section class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 ">
                <div class="logo">
                    <a href="#">
                        <img src="image/ic_logo_2.svg">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                <!-- menu-->
                <div class="menu">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Dropdown link
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Link 1</a>
                                        <a class="dropdown-item" href="#">Link 2</a>
                                        <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- endmenu-->
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <!--info-->
                <div class="account-home">
                    <ul>
                        <li>
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        <?php
                                            echo \Illuminate\Support\Facades\Auth::user()->name;
                                        ?>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{route('view.user.list')}}">thông tin người dùng</a>
                                        <a class="dropdown-item" href="#">đăng xuất</a>
                                    </div>
                                </div>
                            @endif
                        </li>
                        @if(!\Illuminate\Support\Facades\Auth::check())
                            <li>
                                <a href="{{route('login')}}"> Đăng nhập</a>
                            </li>
                        @endif
                        <li>
                            <a href="{{route('register')}}"> Đăng ký</a>
                        </li>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <li class="margin-left-40">
                                <a href="{{route('create-news')}}" class="btn btn-primary custom-btn-news"> đăng tin</a>
                            </li>

                        @endif
                    </ul>
                </div>
                <!--endinfo-->
            </div>
        </div>

    </div>
</section>
<!--end header-->
