
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="footer-content">
                    <a href="#">
                        <img src="{{asset('Image').'/'.$setting->logo}}" alt="" class="img-fluid" />
                        {{-- <img src="{{asset('assets/img/footer-logo.png')}}" alt="" class="img-fluid" /> --}}
                    </a>
                    <p>
                        @php
                        $setting = settings();
                        @endphp
                        {{$setting->address}}

                        {{-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit
                        ipsam maiores deserunt eum nihil, a quo qui aliquam? --}}
                    </p>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-12 offset-xl-1">
                <div class="footer-content">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Moving Services</a></li>
                        <li><a href="#">Locations</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="footer-content">
                    <h3>Contact Info</h3>
                    <ul class="footer-links">
                        <li>
                            <a href="tel:832-863-6955">
                                @php
                                $setting = settings();
                                @endphp
                                {{$setting->contact}}
            </a>
                        </li>
                        <li>
                            <a href="#">                    @php
                                $setting = settings();
                                @endphp
                                {{$setting->address}}

                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@iMovekc.com">                    @php
                                $setting = settings();
                                @endphp
                                {{$setting->email}}
            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-12">
                <div class="footer-content">
                    <h3>We're Social</h3>
                    <ul class="footer-social">
                        <li>
                            @php
                            $setting = settings();
                            @endphp


                            <a href="{{$setting->social_facebook}}"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="{{$setting->social_instagram}}"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="{{$setting->social_linkedin}}"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12">
                <ul class="footer-bottom-list">
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <p>&copy; 2022 by iMOVEKC All Right Deserved</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- SCRIPT: BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- SCRIPT: SLICKSLIDER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- SCRIPT: CUSTOM -->
<script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>
