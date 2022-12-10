@extends('layouts.includes.header')
@section('content')

<title>Contact us | iMoveKC</title>
</head>

<body>
    {{-- <?php include "includes/navbar.php" ?> --}}

    <main class="main">
        <section class="section-inner-main">
            <div class="container text-center">
                <h2>Contact us</h2>
            </div>
        </section>

        <section class="section section--contact-page">
            <div class="container">
                <div class="row contact-row">
                    <div class="col-xl-6 col-md-12">
                        <div class="contact-links">
                            <h3>Call Us</h3>
                            <a href="tel:866-266-8543">(866) 266-8543</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="contact-links text-right">
                            <h3>Email Us</h3>
                            <a href="mailto:info@iMovekc.com">info@iMovekc.com</a>
                        </div>
                    </div>
                </div>
                <form class="contact-form">
                    <div class="form-row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Name" />
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Email Address" />
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Subject" />
                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                    <button type="submit" class="theme-btn">Submit</button>
                </form>
            </div>
        </section>

        <section class="section section--estimate">
            <div class="container">
                <div class="section-intro text-center">
                    <h4>Get your</h4>
                    <h2>Moving Estimate Here:</h2>
                </div>
                <form>
                    <div class="form-row">
                        <div class="col-5">
                            <div class="form-group">
                                <label>Current Zip/Postal Code</label>
                                <input type="text" class="form-control" placeholder="Current Zip/Postal Code" />
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label>Current Zip/Postal Code</label>
                                <input type="text" class="form-control" placeholder="Current Zip/Postal Code" />
                            </div>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="theme-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        {{-- <?php include "includes/estimate-section.php" ?> --}}
    </main>

    @extends('layouts.includes.footer')
