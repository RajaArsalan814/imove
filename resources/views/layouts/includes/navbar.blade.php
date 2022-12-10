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
                    99 Roving St.. Kansas City
                </a>
            </li>
            <li>
                <a href="tel:129-569-5986">
                    <i class="fas fa-phone"></i>
                    +129-569-5986
                </a>
            </li>
            <li>
                <a href="mailto:info@imovekc.com">
                    <i class="fas fa-envelope"></i>
                    info@imovekc.com
                </a>
            </li>
        </ul>
        <nav class="navbar navbar-expand-xl">
            <a class="navbar-brand" href="index.php">
                <img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= ($activePage == 'index') ? 'active' : ''; ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?= ($activePage == 'about') ? 'active' : ''; ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item <?= ($activePage == 'moving-services') ? 'active' : ''; ?>">
                        <a class="nav-link" href="moving-services.php">Moving Services</a>
                    </li>
                    <li class="nav-item <?= ($activePage == 'locations') ? 'active' : ''; ?>">
                        <a class="nav-link" href="locations.php">Locations</a>
                    </li>
                    <li class="nav-item <?= ($activePage == 'testimonials') ? 'active' : ''; ?>">
                        <a class="nav-link" href="testimonials.php">Testimonials</a>
                    </li>
                    <li class="nav-item <?= ($activePage == 'contact') ? 'active' : ''; ?>">
                        <a class="nav-link" href="contact.php">Contact Us</a>
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
