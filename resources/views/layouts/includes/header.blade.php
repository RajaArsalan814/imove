<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SLICKSLIDER CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- BOOTRSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />

    <!-- FONTAWESONE CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />


</head>
<body>
<?php
$activePage = basename($_SERVER['PHP_SELF'], '.php');
?>
<header class="header">
    <div class="container">
        <ul class="nav-contact nav-contact--mobile">
            <li>
                <a href="tel:129-569-5986">
                    <i class="fas fa-phone"></i>

                </a>
            </li>
            <li>
                <a href="mailto:info@imovekc.com">
                    <i class="fas fa-envelope"></i>

                </a>
            </li>
        </ul>

        <ul class="nav-contact">
            <li>
                <a href="#">
                    <i class="fas fa-map-marker-alt"></i>

                    @php
                    $setting = settings();
                    @endphp
                    {{$setting->address}}

                </a>
            </li>
            <li>
                <a href="tel:129-569-5986">
                    <i class="fas fa-phone"></i>
                    @php
                    $setting = settings();
                    @endphp
                    {{$setting->contact}}
                </a>
            </li>
            <li>
                <a href="mailto:info@imovekc.com">
                    <i class="fas fa-envelope"></i>
                    @php
                    $setting = settings();
                    @endphp
                    {{$setting->email}}

                </a>
            </li>
        </ul>
        <nav class="navbar navbar-expand-xl">
            <a class="navbar-brand" href="{{route('main')}}">
                <img src="{{asset('Image').'/'.$setting->logo}}" alt="" class="img-fluid" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= ($activePage == 'index') ? 'active' : ''; ?>">
                        <a class="nav-link" href="{{route('main')}}">Home</a>
                    </li>
                    <li class="nav-item <?= ($activePage == 'about') ? 'active' : ''; ?>">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item <?= ($activePage == 'moving-services') ? 'active' : ''; ?>">
                        <a class="nav-link" href="{{route('moving_services')}}">Moving Services</a>
                    </li>
                    <li class="nav-item <?= ($activePage == 'locations') ? 'active' : ''; ?>">
                        <a class="nav-link" href="{{route('locations')}}">Locations</a>
                    </li>
                    <li class="nav-item <?= ($activePage == 'testimonials') ? 'active' : ''; ?>">
                        <a class="nav-link" href="{{route('testimonials')}}">Testimonials</a>
                    </li>
                    <li class="nav-item <?= ($activePage == 'contact') ? 'active' : ''; ?>">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-user-circle"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contactFormSection" class="theme-btn theme-btn--nav">Get A Qoute</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>


