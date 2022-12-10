@extends('layouts.includes.header')
@section('content')

<title>Locations | iMoveKC</title>
</head>

<body>
    {{-- <?php include "includes/navbar.php" ?> --}}

    <main class="main">
        <section class="section-inner-main">
            <div class="container text-center">
                <h2>Locations</h2>
            </div>
        </section>

        {{-- <?php include "includes/estimate-section.php" ?> --}}

        <section class="section section--location">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-12">
                        <img src="assets/img/location-img.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="section-intro">
                            <h2>KANSAS CITY</h2>
                            <h4>1520 Prospect Ave
                                Kansas City, MO 64127</h4>
                            <div class="btn-group">
                                <a href="#" class="theme-btn">+1 234 456 7891</a>
                                <a href="#" class="theme-btn theme-btn--black">Free Estimate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--serving">
            <div class="container">
                <div class="section-intro">
                    <h2>Serving The Kansas City Area:</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <ul class="serving-list">
                            <li>Blue Springs</li>
                            <li>Gladstone</li>
                            <li>Grandview</li>
                            <li>Independence</li>
                            <li>Kansas City</li>
                            <li>Leawood</li>
                            <li>Lenexa</li>
                            <li>Liberty</li>
                            <li>Merriam</li>
                            <li>Mission</li>
                            <li>Olathe</li>
                            <li>Overland Park</li>
                            <li>Prairie Village</li>
                            <li>Raytown</li>
                            <li>Shawnee</li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="serving-paras">
                            <p>
                                Let’s be honest, moving is hard and you might not know where to start. And having people you don’t know come in to your home and move your things is scary!
                            </p>
                            <p>
                                But don’t worry because we are here to help! <br>
                                Let’s Get Moving is your one stop shop for a full service moving experience.
                            </p>
                            <p>
                                Every detail from moving furniture within your home, to a full pack, load, and unload of all of your stuff across the country–we are with you every step of the way.
                            </p>
                            <p>
                                Experienced, friendly, and professional movers are the rule with us so no matter who we send your way, they are the best in the business!
                            </p>
                            <p>
                                We are Kansas City’s highest rated movers because we care. Use us once and experience the difference.
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
