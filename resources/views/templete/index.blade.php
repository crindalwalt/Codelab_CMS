<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('templete_assets/img/favicon.png') }}" type="image/png">

    <title>Shine - TailwindCSS Startup and SaaS Landing Page Template</title>

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templete_assets/css/LineIcons.2.0.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templete_assets/css/animate.css') }}">
    <!-- Tiny Slider  -->
    <link rel="stylesheet" type="text/css" href="{{ 'templete_assets/css/tiny-slider.css' }}">
    <!-- Tailwind css -->
    <link rel="stylesheet" type="text/css" href="{{ 'templete_assets/css/tailwind.css' }}">
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap" class="relative">
      <!-- Navbar Start -->
      <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
          <div class="container">
              <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                  <a class="navbar-brand" href="/">
                    <img src="{{ asset('templete_assets/img/logo.svg') }}" alt="Logo">
                  </a>
                  <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="toggler-icon"></span>
                      <span class="toggler-icon"></span>
                      <span class="toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                          <li class="nav-item">
                            <a class="page-scroll active" href="#hero-area">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#services">Services</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#feature">feature</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#team">Team</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#testimonial">Testimonial</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#pricing">Pricing</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#contact">Contact</a>
                          </li>
                      </ul>
                  </div>
                  <div class="header-btn hidden sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
                    <a class="text-blue-600 border border-blue-600 px-10 py-3 rounded-full duration-300 hover:bg-blue-600 hover:text-white" href="{{route('dashboard')}}">Admin</a>
                  </div>
              </nav>
          </div>
      </div>
      <!-- Navbar End -->
    </header>
    <!-- Header Area wrapper End -->

    <!-- Hero Area Start -->
    <section id="hero-area" class="bg-blue-100 pt-48 pb-10">
      <div class="container">
        <div class="flex justify-between">
          <div class="w-full text-center">
            <h2 class="text-4xl font-bold leading-snug text-gray-700 mb-10 wow fadeInUp" data-wow-delay="1s">Startup and SaaS Landing Page
              <br class="hidden lg:block"> Built with TailwindCSS</h2>
            <div class="text-center mb-10 wow fadeInUp" data-wow-delay="1.2s">
              <a href="#"
                rel="nofollow"
                class="btn">Download Now</a>
            </div>
            <div class="text-center wow fadeInUp" data-wow-delay="1.6s">
              <img class="img-fluid mx-auto" src="{{ asset('templete_assets/img/hero.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Area End -->

    <!-- Services Section Start -->
    <section id="services" class="py-24">
      <div class="container">
        <div class="text-center">
          <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
        </div>
        <div class="flex flex-wrap">
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon text-5xl">
                <i class="lni lni-cog"></i>
              </div>
              <div>
                <h3 class="service-title">Web Development</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                  incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon text-5xl">
                <i class="lni lni-bar-chart"></i>
              </div>
              <div>
                <h3 class="service-title">Graphic Design</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                  incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon text-5xl">
                <i class="lni lni-briefcase"></i>
              </div>
              <div>
                <h3 class="service-title">Business Branding</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                  incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon text-5xl">
                <i class="lni lni-pencil-alt"></i>
              </div>
              <div>
                <h3 class="service-title">Content Writing</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                  incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="1.5s">
              <div class="icon text-5xl">
                <i class="lni lni-mobile"></i>
              </div>
              <div>
                <h3 class="service-title">App Development</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                  incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="1.8s">
              <div class="icon text-5xl">
                <i class="lni lni-layers"></i>
              </div>
              <div>
                <h3 class="service-title">Digital Marketing</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                  incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->


    <!-- Feature Section Start -->
    <div id="feature" class="bg-blue-100 py-24">
      <div class="container">
        <div class="flex flex-wrap items-center">
          <div class="w-full lg:w-1/2">
            <div class="mb-5 lg:mb-0">
              <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Learn More About Us</h2>

              <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 lg:w-1/2">
                  <div class="m-3">
                    <div class="icon text-4xl">
                      <i class="lni lni-layers"></i>
                    </div>
                    <div class="features-content">
                      <h4 class="feature-title">Built with TailwindCSS</h4>
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.</p>
                    </div>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/2">
                  <div class="m-3">
                    <div class="icon text-4xl">
                      <i class="lni lni-gift"></i>
                    </div>
                    <div class="features-content">
                      <h4 class="feature-title">Free to Use</h4>
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.</p>
                    </div>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/2">
                  <div class="m-3">
                    <div class="icon text-4xl">
                      <i class="lni lni-laptop-phone"></i>
                    </div>
                    <div class="features-content">
                      <h4 class="feature-title">Fully Responsive</h4>
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.</p>
                    </div>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/2">
                  <div class="m-3">
                    <div class="icon text-4xl">
                      <i class="lni lni-leaf"></i>
                    </div>
                    <div class="features-content">
                      <h4 class="feature-title">Easy to Customize</h4>
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/2">
            <div class="mx-3 lg:mr-0 lg:ml-3 wow fadeInRight" data-wow-delay="0.3s">
              <img src="{{ asset('templete_assets/img/feature/img-1.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->

    <!-- Team Section Start -->
    <section id="team" class="py-24 text-center">
      <div class="container">
        <div class="text-center">
          <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Our Team</h2>
        </div>
        <div class="flex flex-wrap justify-center">
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('templete_assets/img/team/img1.jpg') }}" alt="">
                <div class="team-overlay">
                  <ul class="flex justify-center">
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-indigo-500">
                        <i class="lni lni-facebook-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-blue-400">
                        <i class="lni lni-twitter-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-red-500">
                        <i class="lni lni-instagram-original" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">John Doe</h3>
                <p>UX UI Designer</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('templete_assets/img/team/img2.jpg') }}" alt="">
                <div
                  class="team-overlay">
                  <ul class="flex justify-center">
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-indigo-500">
                        <i class="lni lni-facebook-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-blue-400">
                        <i class="lni lni-twitter-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-red-500">
                        <i class="lni lni-instagram-original" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Sarah Doe</h3>
                <p>Front-End Developer</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('templete_assets/img/team/img3.jpg') }}" alt="">
                <div class="team-overlay">
                  <ul class="flex justify-center">
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-indigo-500">
                        <i class="lni lni-facebook-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-blue-400">
                        <i class="lni lni-twitter-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-red-500">
                        <i class="lni lni-instagram-original" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Rob Hope</h3>
                <p>Front-end Developer</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>
      </div>
    </section>
    <!-- Team Section End -->

    <!-- Clients Section Start -->
    <div id="clients" class="py-16 bg-blue-100">
      <div class="container">
        <div class="text-center">
          <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">As Seen On</h2>
        </div>
        <div class="flex flex-wrap justify-center">
          <div class="w-1/2 md:w-1/4 lg:w-1/4">
            <div class="m-3 wow fadeInUp" data-wow-delay="0.3s">
              <img class="client-logo" src="{{ asset('templete_assets/img/clients/img1.svg') }}" alt="">
            </div>
          </div>
          <div class="w-1/2 md:w-1/4 lg:w-1/4">
            <div class="m-3 wow fadeInUp" data-wow-delay="0.6s">
              <img class="client-logo" src="{{ asset('templete_assets/img/clients/img2.svg') }}" alt="">
            </div>
          </div>
          <div class="w-1/2 md:w-1/4 lg:w-1/4">
            <div class="m-3 wow fadeInUp" data-wow-delay="0.9s">
              <img class="client-logo" src="{{ asset('templete_assets/img/clients/img3.svg') }}" alt="">
            </div>
          </div>
          <div class="w-1/2 md:w-1/4 lg:w-1/4">
            <div class="m-3 wow fadeInUp" data-wow-delay="1.2s">
              <img class="client-logo" src="{{ asset('templete_assets/img/clients/img4.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Clients Section End -->

    <!-- Testimonial Section Start -->
    <section id="testimonial" class="py-24 bg-gray-800">
      <div class="container">
        <div class="flex justify-center mx-3">
          <div class="w-full lg:w-7/12">
            <div id="testimonials" class="testimonials">
              <!-- testimonial item start -->
              <div class="item focus:outline-none">
                <div class="text-center py-10 px-8 md:px-10 rounded border border-gray-900">
                  <div class="text-center">
                    <p class="text-gray-600 leading-loose">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                  <div class="my-3 mx-auto w-24 h-24 shadow-md rounded-full">
                    <img class="rounded-full p-2 w-full" src="{{ asset('templete_assets/img/testimonial/img1.jpg') }}" alt="">
                  </div>
                  <div class="mb-2">
                    <h2 class="font-bold text-lg uppercase text-blue-600 mb-2">Fajar</h2>
                    <h3 class="font-medium text-white text-sm">Euphoriya</h3>
                  </div>
                </div>
              </div>
              <!-- testimonial item end -->
              <!-- testimonial item start -->
              <div class="item focus:outline-none">
                <div class="text-center py-10 px-8 md:px-10 rounded border border-gray-900">
                  <div class="text-center">
                    <p class="text-gray-600 leading-loose">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                  <div class="my-3 mx-auto w-24 h-24 shadow-md rounded-full">
                    <img class="rounded-full p-2 w-full" src="{{ asset('templete_assets/img/testimonial/img2.jpg') }}" alt="">
                  </div>
                  <div class="mb-2">
                    <h2 class="font-bold text-lg uppercase text-blue-600 mb-2">Mila</h2>
                    <h3 class="font-medium text-white text-sm">PageBulb</h3>
                  </div>
                </div>
              </div>
              <!-- testimonial item end -->
              <!-- testimonial item start -->
              <div class="item focus:outline-none">
                <div class="text-center py-10 px-8 md:px-10 rounded border border-gray-900">
                  <div class="text-center">
                    <p class="text-gray-600 leading-loose">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                  <div class="my-3 mx-auto w-24 h-24 shadow-md rounded-full">
                    <img class="rounded-full p-2 w-full" src="{{ asset('templete_assets/img/testimonial/img1.jpg') }}" alt="">
                  </div>
                  <div class="mb-2">
                    <h2 class="font-bold text-lg uppercase text-blue-600 mb-2">Rob</h2>
                    <h3 class="font-medium text-white text-sm">OnePageLove</h3>
                  </div>
                </div>
              </div>
              <!-- testimonial item end -->

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Pricing section Start -->
    <section id="pricing" class="py-24">
      <div class="container">
        <div class="flex flex-wrap justify-center md:justify-start">
          <!-- single pricing table starts -->
          <div class="w-3/4 sm:w-2/3 md:w-1/2 lg:w-1/3">
            <div class="pricing-box wow fadeInLeft" data-wow-delay="1.2s">
              <div class="mb-3">
                <h3 class="package-name">Basic</h3>
              </div>
              <div class="mb-5">
                <p class="text-gray-700">
                  <span class="font-bold text-2xl">$12.90</span>
                  <span class="font-medium text-sm">/ Month</span>
                </p>
              </div>
              <ul class="mb-16">
                <li class="text-gray-500 leading-9">Up to 5 projects </li>
                <li class="text-gray-500 leading-9">Up to 10 collabrators</li>
                <li class="text-gray-500 leading-9">2gb of storage</li>
              </ul>
              <a href="#" class="btn">Get It</a>
            </div>
          </div>
          <!-- single pricing table ends -->
          <!-- single pricing table starts -->
          <div class="w-3/4 sm:w-2/3 md:w-1/2 lg:w-1/3">
            <div class="pricing-box bg-blue-100 wow fadeInLeft" data-wow-delay="1.2s">
              <div class="mb-3">
                <h3 class="package-name">PROFESIONAL</h3>
              </div>
              <div class="mb-5">
                <p class="text-gray-700">
                  <span class="font-bold text-2xl">$49.90</span>
                  <span class="font-medium text-sm">/ Month</span>
                </p>
              </div>
              <ul class="mb-16">
                <li class="text-gray-500 leading-9">Up to 10 projects </li>
                <li class="text-gray-500 leading-9">Up to 20 collabrators</li>
                <li class="text-gray-500 leading-9">10gb of storage</li>
                <li class="text-gray-500 leading-9">Real-time collabration</li>
              </ul>
              <a href="#" class="btn">Get It</a>
            </div>
          </div>
          <!-- single pricing table ends -->
          <!-- single pricing table starts -->
          <div class="w-3/4 sm:w-2/3 md:w-1/2 lg:w-1/3">
            <div class="pricing-box">
              <div class="mb-3">
                <h3 class="package-name">EXPERT</h3>
              </div>
              <div class="mb-5">
                <p class="text-gray-700">
                  <span class="font-bold text-2xl">$89.90</span>
                  <span class="font-medium text-sm">/ Month</span>
                </p>
              </div>
              <ul class="mb-16">
                <li class="text-gray-500 leading-9">unlimited projects </li>
                <li class="text-gray-500 leading-9">Unlimited collabrators</li>
                <li class="text-gray-500 leading-9">Unlimited of storage</li>
                <li class="text-gray-500 leading-9">Real-time collabration</li>
                <li class="text-gray-500 leading-9">24x7 Support</li>
              </ul>
              <a href="#" class="btn">Get It</a>
            </div>
          </div>
          <!-- single pricing table ends -->
        </div>
      </div>
    </section>
    <!-- Pricing Table Section End -->

    <!-- carousel-area Section Start -->
    <section class="carousel-area bg-gray-800 py-32">
      <div class="container">
        <div class="flex">
          <div class="w-full relative">
            <div class="portfolio-carousel">
              <div>
                <img class="w-full" src="{{ asset('templete_assets/img/slide/img1.jpg') }}" alt="">
              </div>
              <div>
                <img class="w-full" src="{{ asset('templete_assets/img/slide/img2.jpg') }}" alt="">
              </div>
              <div>
                <img class="w-full" src="{{ asset('templete_assets/img/slide/img3.jpg') }}" alt="">
              </div>
              <div>
                <img class="w-full" src="{{ asset('templete_assets/img/slide/img4.jpg') }}" alt="">
              </div>
              <div>
                <img class="w-full" src="{{ asset('templete_assets/img/slide/img5.jpg') }}" alt="">
              </div>
              <div>
                <img  class="w-full" src="{{ asset('templete_assets/img/slide/img6.jpg') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- carousel-area Section End -->

    <!-- Subscribe Section Start -->
    <section id="Subscribes" class="text-center py-20 bg-blue-100">
      <div class="container">
        <div class="flex justify-center mx-3">
          <div class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2">
            <h4 class="mb-3 section-heading wow fadeInUp" data-wow-delay="0.3s">Start For Free</h4>
            <p class="mb-4 text-gray-600 leading-loose text-sm wow fadeInUp" data-wow-delay="0.6s">Existing customized ideas through client-based deliverables. <br> Compellingly unleash fully tested outsourcing</p>
            <form for="">
              <div class="wow fadeInDown" data-wow-delay="0.3s">
                <input type="Email" class="w-full mb-5 bg-white border border-blue-300 rounded-full px-5 py-3 duration-300 focus:border-blue-600 outline-none" name="email" placeholder="Email Address">
                <button class="border-0 bg-blue-600 text-white rounded-full w-12 h-12 duration-300 hover:opacity-75" type="submit"><i class="lni lni-arrow-right"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Subscribe Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="py-24">
      <div class="container">
        <div class="text-center">
          <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide wow fadeInDown" data-wow-delay="0.3s">Contact</h2>
        </div>

        <div class="flex flex-wrap contact-form-area wow fadeInUp" data-wow-delay="0.4s">
          <div class="w-full md:w-1/2">
            <div class="contact">
              <h2 class="uppercase font-bold text-xl text-gray-700 mb-5 ml-3">Contact Form</h2>
              <form id="contactForm" action="{{ asset('templete_assets/contact.php') }}">
                <div class="flex flex-wrap">
                  <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                    <div class="mx-3">
                      <input type="text" class="form-input rounded-full" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                    </div>
                  </div>
                  <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                    <div class="mx-3">
                      <input type="text" placeholder="Email" id="email" class="form-input rounded-full" name="email" required data-error="Please enter your email">
                    </div>
                  </div>
                  <div class="w-full">
                    <div class="mx-3">
                      <input type="text" placeholder="Subject" id="subject" name="subject" class="form-input rounded-full" required data-error="Please enter your subject">
                    </div>
                  </div>
                  <div class="w-full">
                    <div class="mx-3">
                      <textarea class="form-input rounded-lg" id="message" name="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                    </div>
                  </div>
                  <div class="w-full">
                    <div class="submit-button mx-3">
                      <button class="btn" id="form-submit" type="submit">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <div class="ml-3 md:ml-12 wow fadeIn">
              <h2 class="uppercase font-bold text-xl text-gray-700 mb-5">Get In Touch</h2>
              <div>
                <div class="flex flex-wrap mb-6 items-center">
                  <div class="contact-icon">
                    <i class="lni lni-map-marker"></i>
                  </div>
                  <p class="pl-3">Skopje, Macedonia</p>
                </div>
                <div class="flex flex-wrap mb-6 items-center">
                  <div class="contact-icon">
                    <i class="lni lni-envelope"></i>
                  </div>
                  <p class="pl-3">
                    <a href="#" class="block">email@gmail.com</a>
                    <a href="#" class="block">tomsaulnier@gmail.com</a>
                  </p>
                </div>
                <div class="flex flex-wrap mb-6 items-center">
                  <div class="contact-icon">
                    <i class="lni lni-phone-set"></i>
                  </div>
                  <p class="pl-3">
                    <a href="#" class="block">+42 374 5967</a>
                    <a href="#" class="block">+99 123 5967</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
        <div class="mx-6 mb-6">
            <div class="flex">
                <div class="w-full">
                    <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707"></object>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Section End -->

	  <!-- Footer Section Start -->
    <footer id="footer" class="bg-gray-800 py-16">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="mx-3 mb-8">
              <div class="footer-logo mb-3">
                <img src="{{ asset('templete_assets/img/logo.svg') }}" alt="">
              </div>
              <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam excepturi quasi, ipsam
                voluptatem.</p>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.4s">
            <div class="mx-3 mb-8">
              <h3 class="font-bold text-xl text-white mb-5">Company</h3>
              <ul>
                <li><a href="#" class="footer-links">Press Releases</a></li>
                <li><a href="#" class="footer-links">Mission</a></li>
                <li><a href="#" class="footer-links">Strategy</a></li>
              </ul>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.6s">
            <div class="mx-3 mb-8">
              <h3 class="font-bold text-xl text-white mb-5">About</h3>
              <ul>
                <li><a href="#" class="footer-links">Career</a></li>
                <li><a href="#" class="footer-links">Team</a></li>
                <li><a href="#" class="footer-links">Clients</a></li>
              </ul>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.8s">
            <div class="mx-3 mb-8">
              <h3 class="font-bold text-xl text-white mb-5">Find us on</h3>

              <ul class="social-icons flex justify-start">
                <li class="mx-2">
                  <a href="#"
                    class="footer-icon hover:bg-indigo-500">
                    <i class="lni lni-facebook-original" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="#"
                    class="footer-icon hover:bg-blue-400">
                    <i class="lni lni-twitter-original" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="#"
                    class="footer-icon hover:bg-red-500">
                    <i class="lni lni-instagram-original" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="#"
                    class="footer-icon hover:bg-indigo-600">
                    <i class="lni lni-linkedin-original" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <section class="bg-gray-800 py-6 border-t-2 border-gray-700 border-dotted">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full text-center">
            <p class="text-white">Designed and Developed by <a class="text-white duration-300 hover:text-blue-600" href="https://tailwindtemplates.co" rel="nofollow">TailwindTemplates</a> and <a class="text-white duration-300 hover:text-blue-600" href="https://uideck.com" rel="nofollow">UIdeck</a></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
      <i class="lni lni-arrow-up"></i>
    </a>

    <!-- Preloader -->
   <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- All js Here -->
    <script src="{{ asset('templete_assets/js/wow.js') }}"></script>
    <script src="{{ asset('templete_assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('templete_assets/js/contact-form.js') }}"></script>
    <script src="{{ asset('templete_assets/js/main.js') }}"></script>
  </body>
</html>
