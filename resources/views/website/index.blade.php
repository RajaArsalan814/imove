@extends('layouts.includes.header')
@section('content')
<title>Home | iMoveKC</title>
</head>

<body>
  {{-- @extends('layouts.includes.navbar') --}}

  <main class="main">
    <section class="section--main">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-7 col-lg-12">
            <h1>
              <span>Get a Luxury Moving</span>
              Experience for a Price
              <span>You Can Afford</span>
            </h1>
            <div class="form-row">
              <div class="col-6">
                <div class="form-group">
                  <label>Current Zip/Postal Code</label>
                  <input type="text" class="form-control" placeholder="Current Zip/Postal Code" />
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Current Zip/Postal Code</label>
                  <input type="text" class="form-control" placeholder="Current Zip/Postal Code" />
                </div>
              </div>
            </div>
            <a href="#" class="theme-btn">Submit</a>
          </div>
          <div class="col-xl-5 col-lg-12">
            <figure>
              <img src="{{asset('assets/img/main-img.png')}}" alt="" class="img-fluid" />
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section class="section section--about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-md-12">
            <figure>
              <img src="{{asset('assets/img/about-img.png')}}" alt="" class="img-fluid" />
            </figure>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="section-intro">
              <h4>About iMoveKC</h4>
              <h2><span>We're Your</span> Moving Partner</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                rutrum libero sit amet tellus lacinia, id hendrerit mi
                lobortis. Maecenas in mi ex. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Sed rutrum libero sit amet
                telluslacinia, id hendrerit mi lobortis. Maecenas in mi ex.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                rutrum libero sit amet tellus lacinia, id hendrerit mi
                lobortis. Maecenas in mi ex.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                rutrum libero sit amet tellus lacinia, id hendrerit mi
                lobortis. Maecenas in mi ex. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Sed rutrum libero sit amet
                telluslacinia, id hendrerit mi lobortis. Maecenas in mi ex.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                rutrum libero sit amet tellus lacinia, id hendrerit mi
                lobortis. Maecenas in mi ex.
              </p>
              <a href="#" class="theme-btn">Know us more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section section--services">
      <div class="container-fluid">
        <div class="section-intro text-center">
          <h4>Moving Services</h4>
          <h2>What We Offer</h2>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="service-card">
              <figure>
                <img src="{{asset('assets/img/service-1.png')}}" alt="" class="img-fluid" />
                <div class="service-content">
                  <h6 class="number">01</h6>
                  <div class="service-name">
                    <h3>Local moving</h3>
                    <i class="far fa-arrow-right"></i>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab consectetur consequuntur iste.
                  </p>
                </div>
              </figure>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="service-card">
              <figure>
                <img src="{{asset('assets/img/service-2.png')}}" alt="" class="img-fluid" />
                <div class="service-content">
                  <h6 class="number">02</h6>
                  <div class="service-name">
                    <h3>Furniture Delivery</h3>
                    <i class="far fa-arrow-right"></i>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab consectetur consequuntur iste.
                  </p>
                </div>
              </figure>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="service-card">
              <figure>
                <img src="{{asset('assets/img/service-3.png')}}" alt="" class="img-fluid" />
                <div class="service-content">
                  <h6 class="number">03</h6>
                  <div class="service-name">
                    <h3>Senior moving</h3>
                    <i class="far fa-arrow-right"></i>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab consectetur consequuntur iste.
                  </p>
                </div>
              </figure>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="service-card">
              <figure>
                <img src="{{asset('assets/img/service-4.png')}}" alt="" class="img-fluid" />
                <div class="service-content">
                  <h6 class="number">04</h6>
                  <div class="service-name">
                    <h3>Office Moving</h3>
                    <i class="far fa-arrow-right"></i>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab consectetur consequuntur iste.
                  </p>
                </div>
              </figure>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="service-card">
              <figure>
                <img src="{{asset('assets/img/service-5.png')}}" alt="" class="img-fluid" />
                <div class="service-content">
                  <h6 class="number">05</h6>
                  <div class="service-name">
                    <h3>Local moving</h3>
                    <i class="far fa-arrow-right"></i>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab consectetur consequuntur iste.
                  </p>
                </div>
              </figure>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="service-card">
              <figure>
                <img src="{{asset('assets/img/service-6.png')}}" alt="" class="img-fluid" />
                <div class="service-content">
                  <h6 class="number">06</h6>
                  <div class="service-name">
                    <h3>Furniture Delivery</h3>
                    <i class="far fa-arrow-right"></i>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab consectetur consequuntur iste.
                  </p>
                </div>
              </figure>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="service-card">
              <figure>
                <img src="{{asset('assets/img/service-7.png')}}" alt="" class="img-fluid" />
                <div class="service-content">
                  <h6 class="number">07</h6>
                  <div class="service-name">
                    <h3>Senior moving</h3>
                    <i class="far fa-arrow-right"></i>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab consectetur consequuntur iste.
                  </p>
                </div>
              </figure>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="service-card">
              <figure>
                <img src="{{asset('assets/img/service-8.png')}}" alt="" class="img-fluid" />
                <div class="service-content">
                  <h6 class="number">08</h6>
                  <div class="service-name">
                    <h3>Office Moving</h3>
                    <i class="far fa-arrow-right"></i>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab consectetur consequuntur iste.
                  </p>
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section section--testimonials">
      <div class="container">
        <div class="section-intro">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-12">
              <h4>Our Testimonials</h4>
              <h2>Client Reviews</h2>
            </div>
            <div class="col-xl-6 col-lg-12">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                rutrum libero sit amet tellus lacinia, id hendrerit mi
                lobortis. Maecenas in mi ex. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Sed rutrum libero sit amet
                telluslacinia, id hendrerit mi lobortis. Maecenas in mi ex.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                rutrum libero sit amet tellus lacinia, id hendrerit
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="testimonial-slider">
          <div class="testimonial-inner">
            <div class="testimonial-card">
              <div class="card-top">
                <div class="user-intro">
                  <div class="name">
                    <h3>User name</h3>
                    <ul class="stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <h4>Manager PT Gelap Purnama</h4>
                </div>
                <img src="{{asset('assets/img/google-review.png')}}" alt="" class="img-fluid" />
              </div>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Inventore magnam sit tempora vero suscipit, reprehenderit
                placeat commodi quo necessitatibus alias. Tenetur iste
                asperiores voluptatem. Optio.
              </p>
            </div>
          </div>
          <div class="testimonial-inner">
            <div class="testimonial-card">
              <div class="card-top">
                <div class="user-intro">
                  <div class="name">
                    <h3>User name</h3>
                    <ul class="stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <h4>Manager PT Gelap Purnama</h4>
                </div>
                <img src="{{asset('assets/img/google-review.png')}}" alt="" class="img-fluid" />
              </div>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Inventore magnam sit tempora vero suscipit, reprehenderit
                placeat commodi quo necessitatibus alias. Tenetur iste
                asperiores voluptatem. Optio.
              </p>
            </div>
          </div>
          <div class="testimonial-inner">
            <div class="testimonial-card">
              <div class="card-top">
                <div class="user-intro">
                  <div class="name">
                    <h3>User name</h3>
                    <ul class="stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <h4>Manager PT Gelap Purnama</h4>
                </div>
                <img src="{{asset('assets/img/google-review.png')}}" alt="" class="img-fluid" />
              </div>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Inventore magnam sit tempora vero suscipit, reprehenderit
                placeat commodi quo necessitatibus alias. Tenetur iste
                asperiores voluptatem. Optio.
              </p>
            </div>
          </div>
          <div class="testimonial-inner">
            <div class="testimonial-card">
              <div class="card-top">
                <div class="user-intro">
                  <div class="name">
                    <h3>User name</h3>
                    <ul class="stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <h4>Manager PT Gelap Purnama</h4>
                </div>
                <img src="{{asset('assets/img/google-review.png')}}" alt="" class="img-fluid" />
              </div>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Inventore magnam sit tempora vero suscipit, reprehenderit
                placeat commodi quo necessitatibus alias. Tenetur iste
                asperiores voluptatem. Optio.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="section section--faq">
      <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-intro text-center">
                    <h4>FAQ</h4>
                    <h2>Frequently Asked Question</h2>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. What is Shopify?
                                    <i class="fal fa-plus-circle"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Shopify is an ecommerce solution that allows you to set up
                                a webstore to sell your products online. It lets you
                                organize your products, customize your store, accept
                                credit card payments, track and respond to orders with
                                ease.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    2. How do I install Shopify?
                                    <i class="fal fa-plus-circle"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Some placeholder content for the first accordion panel.
                                This panel is shown by default, thanks to the
                                <code>.show</code> class.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    3. What do I need in order to start selling?
                                    <i class="fal fa-plus-circle"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Some placeholder content for the first accordion panel.
                                This panel is shown by default, thanks to the
                                <code>.show</code> class.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    4. Which languages are supported?
                                    <i class="fal fa-plus-circle"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                Some placeholder content for the first accordion panel.
                                This panel is shown by default, thanks to the
                                <code>.show</code> class.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    5. What is Liquid language?
                                    <i class="fal fa-plus-circle"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                Some placeholder content for the first accordion panel.
                                This panel is shown by default, thanks to the
                                <code>.show</code> class.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    6. What methods of payment can my customers use?
                                    <i class="fal fa-plus-circle"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                Some placeholder content for the first accordion panel.
                                This panel is shown by default, thanks to the
                                <code>.show</code> class.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    7. What is a payment gateway?
                                    <i class="fal fa-plus-circle"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                            <div class="card-body">
                                Some placeholder content for the first accordion panel.
                                This panel is shown by default, thanks to the
                                <code>.show</code> class.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                    8. What is a merchant account?
                                    <i class="fal fa-plus-circle"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                            <div class="card-body">
                                Some placeholder content for the first accordion panel.
                                This panel is shown by default, thanks to the
                                <code>.show</code> class.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section class="section section--news">
      <div class="container">
          <div class="section-intro text-center">
              <h4>Our Blogs</h4>
              <h2>News & Blogs</h2>
          </div>
          <div class="row">
              <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="news-card">
                      <img src="{{asset('assets/img/news-1.png')}}" alt="" class="img-fluid" />
                      <h3>HOW TO MOVE A GRANDFATHER CLOCK LIKE A PRO</h3>
                      <h6 class="date">08/30/2022</h6>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="news-card">
                      <img src="{{asset('assets/img/news-2.png')}}" alt="" class="img-fluid" />
                      <h3>HOW TO MOVE A GRANDFATHER CLOCK LIKE A PRO</h3>
                      <h6 class="date">08/30/2022</h6>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="news-card">
                      <img src="{{asset('assets/img/news-3.png')}}" alt="" class="img-fluid" />
                      <h3>HOW TO MOVE A GRANDFATHER CLOCK LIKE A PRO</h3>
                      <h6 class="date">08/30/2022</h6>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <section class="section section--looking">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-xl-8 col-md-12">
                  <div class="looking-intro">
                      <h2>Looking For The Best Moving Services?</h2>
                      <p>
                          Sometimes on purpose (injected humour and the like) Excepteur
                          sint occaecat cupidatat non proident, sunt in culpa qui
                          officia deserunt mollit anim id est laborum.
                      </p>
                  </div>
              </div>
              <div class="col-xl-4 col-md-12 text-center">
                  <a href="#" class="theme-btn theme-btn--white">Book now</a>
              </div>
          </div>
      </div>
    </section>
    <section class="section section--contact" id="contactFormSection">
        <div class="container">
            <div class="section-intro text-center">
                <h2>Contact Us</h2>
            </div>
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
  </main>
  @extends('layouts.includes.footer')
