  @extends('frontend.layouts.app')
  @section('content')
      <!--hero section start-->
      <section
          class="hero-section position-relative min-vh-100 background-video-overly flex-column d-flex justify-content-center">
          <video poster="{{ asset('assets/frontend/assets/video/poliwangi.mp4') }}"
              class="fit-cover w-100 h-100 position-absolute z--1" autoplay="" muted="" loop="" id="myVideo">
              <source src="{{ asset('assets/frontend/assets/video/poliwangi.mp4') }}" type="video/mp4">
          </video>
          <div class="container">
              <div class="row align-items-center justify-content-center">
                  <div class="col-md-8 col-lg-8">
                      <div class="hero-content-left text-white">
                          <h1 class="text-white display-4 font-weight-bolder">Great ideas are the fuel of progress
                          </h1>
                          <p class="lead mb-4">Jurusan Teknik Infirmatika siap untuk menyiapkan generasi menghadapi kemajuan
                              dengan memberi wadah dalam mempelajari dan mendalami teknologi.
                              Dengan upaya menerapkan penyaluran kreatifitas dan kemampuan dalam pengarahan namun tanpa
                              batasan. </p>
                          {{-- <a href="#" class="btn btn-brand-01 btn-lg"><i class="far fa-comments mr-2"></i>
                              Start a live chat</a> --}}
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--hero section end-->

      <!--hosting promo start-->
      <section class="promo-section mt-n-150 ">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-lg-4">
                      <div class="card hosting-promo border-0 rounded-custom p-4 mt-4 shadow">
                          <div class="card-body">
                              <div class="hosting-promo-icon mb-3 d-flex justify-content-between">
                                  <span class="fad fa-clouds icon-size-lg color-primary"></span>
                              </div>
                              <div class="hosting-promo-content">
                                  <h5 class="h6">Pengumuman</h5>
                                  <p>Temukan pengumuman dan informasi mengenai jurusan disini.</p>
                                  <a href="#" target="_blank" class="small-text d-inline-flex align-items-center">
                                      <span>Read More</span> <i class="fad fa-arrow-right ml-2"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                      <div class="card hosting-promo border-0 rounded-custom p-4 mt-4 shadow">
                          <div class="card-body">
                              <div class="hosting-promo-icon mb-3 d-flex justify-content-between">
                                  <span class="fad fa-hdd icon-size-lg color-primary"></span>
                              </div>
                              <div class="hosting-promo-content">
                                  <h5 class="h6">Event Jurusan</h5>
                                  <p>Temukan semua event atau agenda jurusan disini.</p>
                                  <a href="#" target="_blank" class="small-text d-inline-flex align-items-center">
                                      <span>Read More</span> <i class="fad fa-arrow-right ml-2"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                      <div class="card hosting-promo border-0 rounded-custom p-4 mt-4 shadow">
                          <div class="card-body">
                              <div class="hosting-promo-icon mb-3 d-flex justify-content-between">
                                  <span class="fad fa-envelope icon-size-lg color-primary"></span>
                              </div>
                              <div class="hosting-promo-content">
                                  <h5 class="h6">Kabar Jurusan</h5>
                                  <p>Temukan segala update informasi mengenai jurusan disini.</p>
                                  <a href="#" target="_blank" class="small-text d-inline-flex align-items-center">
                                      <span>Read More</span> <i class="fad fa-arrow-right ml-2"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--hosting promo end-->

      <!--pricing section start-->
      <section class="pricing-section ptb-100">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-9 col-lg-8">
                      <div class="section-heading text-center mb-5">
                          <h2>Managed Our Hosting Price</h2>
                          <p class="lead">
                              Professional hosting at an affordable price. Distinctively recaptiualize
                              principle-centered
                              core competencies through client-centered
                              core competencies.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="row align-items-center justify-content-between">
                  <div class="col-12">
                      <div class="switch-wrap text-center mb-5">
                          <label class="form-switch">
                              <span class="beforeinput text-success">
                                  Monthly
                              </span>
                              <input type="checkbox" id="js-contcheckbox">
                              <span class="switch-icon gray-light-bg"></span>
                              <span class="afterinput">
                                  Yearly
                              </span>
                          </label>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                      <div class="card text-center single-pricing-pack">
                          <div class="pt-5">
                              <h5 class="mb-0">Cloud Starter</h5>
                              <p>Medium traffic personal sites</p>
                          </div>
                          <div class="card-header py-4 border-0 pricing-header">
                              <div class="price text-center mb-0 monthly-price">$19<span>mo</span></div>
                              <div class="price text-center mb-0 yearly-price">$69<span>/yr</span></div>
                          </div>
                          <div class="card-body">
                              <ul class="list-unstyled mb-4 pricing-feature-list">
                                  <li><span>10</span> Hosted Domains</li>
                                  <li><span>25 GB</span> RAID 10 Storage</li>
                                  <li><span>200 GB</span> Bandwidth</li>
                                  <li><span>1 Free</span> Domain included</li>
                                  <li><span>Super Fast</span> SSD Storage</li>
                                  <li><span>Free</span> SSL Certificate</li>
                                  <li>99.95% Uptime</li>
                                  <li>24/7 Phone Support</li>
                              </ul>
                              <a href="#" class="btn btn-brand-01 mb-3" target="_blank">Purchase now</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                      <div class="card popular-price text-center single-pricing-pack">
                          <div class="pt-5">
                              <h5 class="mb-0">Cloud Business <span class="badge color-1 color-1-bg">Popular</span></h5>
                              <p>High traffic corporate sites</p>
                          </div>
                          <div class="card-header py-4 border-0 pricing-header">
                              <div class="price text-center mb-0 monthly-price text-white">$49<span>/mo</span>
                              </div>
                              <div class="price text-center mb-0 yearly-price text-white">$159<span>/yr</span>
                              </div>
                          </div>
                          <div class="card-body">
                              <ul class="list-unstyled mb-4 pricing-feature-list">
                                  <li><span>30</span> Hosted Domains</li>
                                  <li><span>75 GB</span> RAID 10 Storage</li>
                                  <li><span>700 GB</span> Bandwidth</li>
                                  <li><span>3 Free</span> Domain included</li>
                                  <li><span>Super Fast</span> SSD Storage</li>
                                  <li><span>Free</span> SSL Certificate</li>
                                  <li>99.95% Uptime</li>
                                  <li>24/7 Phone Support</li>
                              </ul>
                              <a href="#" class="btn btn-brand-03 mb-3" target="_blank">Purchase now</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                      <div class="card text-center single-pricing-pack">
                          <div class="pt-5">
                              <h5 class="mb-0">Cloud Enterprise</h5>
                              <p>Enterprise content management</p>
                          </div>
                          <div class="card-header py-4 border-0 pricing-header">
                              <div class="price text-center mb-0 monthly-price">$69<span>/mo</span></div>
                              <div class="price text-center mb-0 yearly-price">$259<span>/yr</span></div>
                          </div>
                          <div class="card-body">
                              <ul class="list-unstyled mb-4 pricing-feature-list">
                                  <li><span>60</span> Hosted Domains</li>
                                  <li><span>175 GB</span> RAID 10 Storage</li>
                                  <li><span>1500 GB</span> Bandwidth</li>
                                  <li><span>6 Free</span> Domain included</li>
                                  <li><span>Super Fast</span> SSD Storage</li>
                                  <li><span>Free</span> SSL Certificate</li>
                                  <li>99.95% Uptime</li>
                                  <li>24/7 Phone Support</li>
                              </ul>
                              <a href="#" class="btn btn-brand-01 mb-3" target="_blank">Purchase now</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="support-cta mt-5">
                          <h5 class="mb-1 d-flex align-items-center justify-content-center"><span
                                  class="ti-loop color-primary mr-3 icon-sm"></span>Choose Your <a
                                  href="pricing-comparison.html" class="ml-2">Compare Hosting Plans</a></h5>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--pricing section end-->

      <!--call to action start-->
      <section class="ptb-60 primary-bg">
          <div class="container">
              <div class="row align-items-center justify-content-between">
                  <div class="col-md-7 col-lg-6">
                      <div class="cta-content-wrap text-white">
                          <h2 class="text-white">Best Cloud Hosting <br> With Trusted Service</h2>
                          <p>Objectively innovate high standards in methodologies vis-a-vis sustainable compellingly
                              maintain multidisciplinary process proactively streamline mission-critical information
                              via quality imperatives. </p>
                      </div>
                      <div class="action-btns mt-4">
                          <a href="#" class="btn btn-brand-03"> Get Start Now </a>
                      </div>
                  </div>
                  <div class="col-md-5 col-lg-4">
                      <div class="cta-img-wrap text-center">
                          <img src="{{ asset('assets/frontend/assets/img/cta-new.svg') }}" class="img-fluid"
                              alt="server room">
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--call to action end-->

      <!--services section start-->
      <section class="ptb-100 service-section-wrap">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-7">
                      <div class="section-heading text-center">
                          <h2>Our Tools And Services For Optimize Website Building</h2>
                          <p>Uniquely repurpose strategic core competencies with progressive content. Assertively
                              transition ethical imperatives and collaborative manufactured products. </p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6 col-lg-6">
                      <div class="single-service p-5 rounded border gray-light-bg">
                          <div class="service-header d-flex align-items-center justify-content-between">
                              <h4><span class="h5 text-uppercase">Easy & First</span> <br>Website Building</h4>
                              <span class="fas fa-shield-alt fa-3x color-primary"></span>
                          </div>
                          <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost
                              effective ideas rather than standardized leadership. Interactively syndicate
                              alternative opportunities via ubiquitous systems. </p>
                          <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <div class="single-service p-5 rounded border gray-light-bg">
                          <div class="service-header d-flex align-items-center justify-content-between">
                              <h4><span class="h5 text-uppercase">Suitable For All Users</span> <br>Managed
                                  WordPress</h4>
                              <span class="fab fa-wordpress fa-3x color-primary"></span>
                          </div>
                          <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost
                              effective ideas rather than standardized leadership. Interactively syndicate
                              alternative opportunities via ubiquitous systems. </p>
                          <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <div class="single-service p-5 rounded border gray-light-bg">
                          <div class="service-header d-flex align-items-center justify-content-between">
                              <h4><span class="h5 text-uppercase">Commitment To</span> <br>Dedicated Support</h4>
                              <span class="fas fa-headset fa-3x color-primary"></span>
                          </div>
                          <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost
                              effective ideas rather than standardized leadership. Interactively syndicate
                              alternative opportunities via ubiquitous systems. </p>
                          <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <div class="single-service p-5 rounded border gray-light-bg">
                          <div class="service-header d-flex align-items-center justify-content-between">
                              <h4><span class="h5 text-uppercase">Easy & Smooth</span> <br>Website Transfer</h4>
                              <span class="fas fa-dolly-flatbed fa-3x color-primary"></span>
                          </div>
                          <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost
                              effective ideas rather than standardized leadership. Interactively syndicate
                              alternative opportunities via ubiquitous systems. </p>
                          <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--services section end-->

      <!--features section start-->
      <div class="feature-section ptb-100 gray-light-bg">
          <div class="container">
              <div class="row align-items-center justify-content-between">
                  <div class="col-md-7 col-lg-6">
                      <div class="feature-content-wrap">
                          <h2>99% Cloud Hosing High-speed Cutting-edge Platform</h2>
                          <p>Authoritatively transform functionalized information without cross-platform
                              convergence. Quickly reconceptualize cross-unit e-markets without superior products.
                              Appropriately foster timely collaboration and idea-sharing rather than magnetic
                              potentialities. Authoritatively restore high standards in outsourcing whereas vertical
                              meta-services. Compellingly reconceptualize out-of-the-box outsourcing through
                              plug-and-play synergy.</p>
                          <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Learn More</a>
                      </div>
                  </div>
                  <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                      <div class="feature-img-wrap text-center">
                          <img src="{{ asset('assets/frontend/assets/img/feature-new-1.svg') }}" class="img-fluid"
                              alt="server room">
                      </div>
                  </div>
              </div>
              <div class="row align-items-center justify-content-between mt-5">
                  <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                      <div class="feature-img-wrap text-center">
                          <img src="{{ asset('assets/frontend/assets/img/feature-new-2.svg') }}" class="img-fluid"
                              alt="server room">
                      </div>
                  </div>
                  <div class="col-md-7 col-lg-6">
                      <div class="feature-content-wrap">
                          <h2>Our Own Interfaces for All Management Processes</h2>
                          <p>Authoritatively transform functionalized information without cross-platform
                              convergence. Quickly reconceptualize cross-unit e-markets without superior products.
                              Appropriately foster timely collaboration and idea-sharing rather than magnetic
                              potentialities. Authoritatively restore high standards in outsourcing whereas vertical
                              meta-services. Compellingly reconceptualize out-of-the-box outsourcing through
                              plug-and-play synergy.</p>
                          <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!--features section end-->

      <!--call to action start-->
      <section class="ptb-60 primary-bg">
          <div class="container">
              <div class="row align-items-center justify-content-between">
                  <div class="col-12 col-lg-6">
                      <div class="cta-content-wrap text-white">
                          <h2 class="text-white">24/7 Expert Hosting Support Our Customers Love</h2>
                          <p>Objectively innovate high compellingly maintain progressively pursue mission-critical
                              information quality imperatives. </p>
                      </div>
                      <div class="support-action d-inline-flex flex-wrap">
                          <a href="mailto:support@yourdomain.com" class="mr-3"><i
                                  class="fas fa-comment mr-1 color-accent"></i>
                              <span>support@yourdomain.com</span></a>
                          <a href="tel:+00123456789" class="mb-0"><i class="fas fa-phone-alt mr-1 color-accent"></i>
                              <span>+00123456789</span></a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-4 d-none d-lg-block">
                      <div class="cta-img-wrap text-center">
                          <img src="{{ asset('assets/frontend/assets/img/call-center-support.svg') }}" width="250"
                              class="img-fluid" alt="server room">
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--call to action end-->

      <!--network map section start-->
      <section class="network-map-section ptb-100 gray-light-bg">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-9 col-lg-8">
                      <div class="section-heading text-center mb-5">
                          <h2>Our Data centers Location</h2>
                          <p class="lead">Cloudhub offers a low latency worldwide network, enabling you to deploy
                              your
                              service infrastructure in close proximity to your customer base.</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="network-map-wrap">
                          <ul class="custom-map-location">
                              <li style="top: 29%; left: 15.5%;">
                                  <span data-toggle="tooltip" data-placement="top" title="Canada"></span>
                              </li>
                              <li style="top: 42%; left: 20%;">
                                  <span data-toggle="tooltip" data-placement="top" title="United States"></span>
                              </li>
                              <li style="top: 70%; left: 32%;">
                                  <span data-toggle="tooltip" data-placement="top" title="Brazil"></span>
                              </li>
                              <li style="top: 57%; left: 48%;">
                                  <span data-toggle="tooltip" data-placement="top" title="Nigeria"></span>
                              </li>
                              <li style="top: 18%; left: 53%;">
                                  <span data-toggle="tooltip" data-placement="top" title="Finland"></span>
                              </li>
                              <li style="top: 34%; left: 55%;">
                                  <span data-toggle="tooltip" data-placement="top" title="Ukraine"></span>
                              </li>
                              <li style="top: 45%; left: 68%;">
                                  <span data-toggle="tooltip" data-placement="top" title="India"></span>
                              </li>
                              <li style="top: 35%; left: 80%;">
                                  <span data-toggle="tooltip" data-placement="top" title="China"></span>
                              </li>
                              <li style="top: 77%; left: 85%;">
                                  <span data-toggle="tooltip" data-placement="top" title="Australia"></span>
                              </li>
                          </ul>
                          <img src="{{ asset('assets/frontend/assets/img/map-dark.svg') }}" alt="location map">
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--network map section end-->

      <!--testimonial section start-->
      <section class="review-section ptb-100 ">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-7">
                      <div class="section-heading text-center">
                          <h2>Our Lovely Client Say About Us</h2>
                          <p>Uniquely repurpose strategic core competencies with progressive content. Assertively
                              transition ethical imperatives and collaborative manufactured products. </p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="owl-carousel owl-theme client-testimonial-1 dot-bottom-center custom-dot">
                      <div class="item">
                          <div class="border single-review-wrap bg-white p-4 m-3">
                              <div class="review-body">
                                  <h5>Amazing template</h5>
                                  <p>Distinctively foster maintainable metrics whereas multidisciplinary process
                                      improvements. Distinctively foster maintainable metrics whereas
                                      multidisciplinary process improvements. Objectively implement strategic niches
                                      through.</p>
                              </div>
                              <div class="review-author d-flex align-items-center">
                                  <div class="author-avatar">
                                      <img src="{{ asset('assets/frontend/assets/img/client-2.jpg') }}" width="64"
                                          alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                      <span>“</span>
                                  </div>
                                  <div class="review-info">
                                      <h6 class="mb-0">Ana Joly</h6>
                                      <span>BizBite</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="border single-review-wrap bg-white p-4 m-3">
                              <div class="review-body">
                                  <h5>Best template for app</h5>
                                  <p>Efficiently innovate customized growth strategies whereas error-free paradigms.
                                      Monotonectally enhance stand-alone data with prospective innovation.</p>
                              </div>
                              <div class="review-author d-flex align-items-center">
                                  <div class="author-avatar">
                                      <img src="{{ asset('assets/frontend/assets/img/client-1.jpg') }}" width="64"
                                          alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                      <span>“</span>
                                  </div>
                                  <div class="review-info">
                                      <h6 class="mb-0">Tony Roy</h6>
                                      <span>BizBite</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="border single-review-wrap bg-white p-4 m-3">
                              <div class="review-body">
                                  <h5>Efficiently innovate app</h5>
                                  <p>Continually redefine sticky channels whereas extensive "outside the box"
                                      thinking. Rapidiously supply focused schemas vis-a-vis optimal users.</p>
                              </div>
                              <div class="review-author d-flex align-items-center">
                                  <div class="author-avatar">
                                      <img src="{{ asset('assets/frontend/assets/img/client-3.jpg') }}" width="64"
                                          alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                      <span>“</span>
                                  </div>
                                  <div class="review-info">
                                      <h6 class="mb-0">Ana Joly</h6>
                                      <span>BizBite</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="border single-review-wrap bg-white p-4 m-3">
                              <div class="review-body">
                                  <h5>Uniquely mesh flexible</h5>
                                  <p>Phosfluorescently optimize intermandated platforms without integrated
                                      infrastructures. Proactively redefine granular thinking before.</p>
                              </div>
                              <div class="review-author d-flex align-items-center">
                                  <div class="author-avatar">
                                      <img src="{{ asset('assets/frontend/assets/img/client-4.jpg') }}" width="64"
                                          alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                      <span>“</span>
                                  </div>
                                  <div class="review-info">
                                      <h6 class="mb-0">Ana Joly</h6>
                                      <span>BizBite</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="border single-review-wrap bg-white p-4 m-3">
                              <div class="review-body">
                                  <h5>Compellingly empower app</h5>
                                  <p>Proactively grow focused niche markets with virtual e-services. Rapidiously
                                      pursue effective ROI via holistic information completely reintermediate.</p>
                              </div>
                              <div class="review-author d-flex align-items-center">
                                  <div class="author-avatar">
                                      <img src="{{ asset('assets/frontend/assets/img/client-2.jpg') }}" width="64"
                                          alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                      <span>“</span>
                                  </div>
                                  <div class="review-info">
                                      <h6 class="mb-0">Ana Joly</h6>
                                      <span>BizBite</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="border single-review-wrap bg-white p-4 m-3">
                              <div class="review-body">
                                  <h5>Holisticly reintermediate</h5>
                                  <p>Collaboratively reintermediate out-of-the-box e-business via economically sound
                                      supply chains. Dynamically target client-based holistic information.</p>
                              </div>
                              <div class="review-author d-flex align-items-center">
                                  <div class="author-avatar">
                                      <img src="{{ asset('assets/frontend/assets/img/client-1.jpg') }}" width="64"
                                          alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                      <span>“</span>
                                  </div>
                                  <div class="review-info">
                                      <h6 class="mb-0">Ana Joly</h6>
                                      <span>BizBite</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="border single-review-wrap bg-white p-4 m-3">
                              <div class="review-body">
                                  <h5>Uniquely mesh flexible</h5>
                                  <p>Phosfluorescently optimize intermandated platforms without integrated
                                      infrastructures. Proactively redefine granular thinking before.</p>
                              </div>
                              <div class="review-author d-flex align-items-center">
                                  <div class="author-avatar">
                                      <img src="{{ asset('assets/frontend/assets/img/client-3.jpg') }}" width="64"
                                          alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                      <span>“</span>
                                  </div>
                                  <div class="review-info">
                                      <h6 class="mb-0">Ana Joly</h6>
                                      <span>BizBite</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="border single-review-wrap bg-white p-4 m-3">
                              <div class="review-body">
                                  <h5>Compellingly empower app</h5>
                                  <p>Proactively grow focused niche markets with virtual e-services. Rapidiously
                                      pursue effective ROI via holistic information completely reintermediate.</p>
                              </div>
                              <div class="review-author d-flex align-items-center">
                                  <div class="author-avatar">
                                      <img src="{{ asset('assets/frontend/assets/img/client-1.jpg') }}" width="64"
                                          alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                      <span>“</span>
                                  </div>
                                  <div class="review-info">
                                      <h6 class="mb-0">Ana Joly</h6>
                                      <span>BizBite</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="border single-review-wrap bg-white p-4 m-3">
                              <div class="review-body">
                                  <h5>Holisticly reintermediate</h5>
                                  <p>Collaboratively reintermediate out-of-the-box e-business via economically sound
                                      supply chains. Dynamically target client-based holistic information.</p>
                              </div>
                              <div class="review-author d-flex align-items-center">
                                  <div class="author-avatar">
                                      <img src="{{ asset('assets/frontend/assets/img/client-2.jpg') }}" width="64"
                                          alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                      <span>“</span>
                                  </div>
                                  <div class="review-info">
                                      <h6 class="mb-0">Ana Joly</h6>
                                      <span>BizBite</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--testimonial section end-->

      <!--application hosting section start-->
      <section class="appliction-hosting ptb-100 gray-light-bg">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-9 col-lg-8">
                      <div class="section-heading text-center mb-5">
                          <h2>Application Hosting Optimised for WordPress & more</h2>
                          <p class="lead">Our web hosting platform has been fully optimised to offer outstanding
                              performance for your web applications, delivering speeds of up to16x faster.</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="application-hosting-wrap">
                          <ul class="app-list">
                              <li><a href="#" class="dark-bg text-white"><img
                                          src="{{ asset('assets/frontend/assets/img/icons/wordpress-icon-white.svg') }}"
                                          alt="icon">
                                      <span>WordPress</span></a></li>
                              <li><a href="#" class="dark-bg text-white"><img
                                          src="{{ asset('assets/frontend/assets/img/icons/joomla-icon-white.svg') }}"
                                          alt="icon">
                                      <span>WordPress</span></a></li>
                              <li><a href="#" class="dark-bg text-white"><img
                                          src="{{ asset('assets/frontend/assets/img/icons/magento-icon-white.svg') }}"
                                          alt="icon">
                                      <span>WordPress</span></a></li>
                              <li><a href="#" class="dark-bg text-white"><img
                                          src="{{ asset('assets/frontend/assets/img/icons/opencart-icon-white.svg') }}"
                                          alt="icon">
                                      <span>WordPress</span></a></li>
                              <li><a href="#" class="dark-bg text-white"><img
                                          src="{{ asset('assets/frontend/assets/img/icons/prestashop-icon-white.svg') }}"
                                          alt="icon">
                                      <span>WordPress</span></a></li>
                              <li><a href="#" class="dark-bg text-white"><img
                                          src="{{ asset('assets/frontend/assets/img/icons/drupal-icon-white.svg') }}"
                                          alt="icon">
                                      <span>WordPress</span></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--application hosting section end-->
  @endsection
