<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/15bc5dc973.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('site/style.css') }}" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light headerfixed" id="home-link">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('site/img/logo.png') }}" alt="" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link font20 bottom-border" aria-current="page" href="#" id="home-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font20 bottom-border" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font20 bottom-border" aria-current="page" href="#service">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font20" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font20 bottom-border" aria-current="page" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="me-4">
                    <i class="fa-solid fa-headphones primarycolor font20"></i>
                    <a href="tel:+91-8840354461" class="font20 blackcolor">+91-8840354461</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <main id="main">
        <section id="main-carousel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col px-0">
                        <div class="carousel slide kb-carousel carousel-fade" id="carouselKenBurns"
                            data-bs-ride="carousel">
                            <!-- Carousel Items -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('site/img/slider-image1.jpg') }}" class="d-block w-100" alt="Slide 1">
                                    <div class="carousel-caption kb-caption kb-caption-left">
                                        <h1 data-animation="animated">Ken Burns</h1>
                                        <h3 data-animation="animated">A zoom effect with CSS3</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('site/img/slider-image2.jpg') }}" class="d-block w-100" alt="Slide 2">
                                    <div class="carousel-caption kb-caption kb-caption-right">
                                        <h1 data-animation="animated">Catch Your Eye</h1>
                                        <h3 data-animation="animated">It attracts the attention of customers</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('site/img/slider-image1.jpg') }}" class="d-block w-100" alt="Slide 3">
                                    <div class="carousel-caption kb-caption kb-caption-center">
                                        <h1 data-animation="animated">Super Effect</h1>
                                        <h3 data-animation="animated">Demonstrate your benefits</h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel Arrows -->
                            <button class="carousel-control-prev kb-control-prev" type="button"
                                data-bs-target="#carouselKenBurns" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next kb-control-next" type="button"
                                data-bs-target="#carouselKenBurns" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <div class="row margintop" id="about">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
            <div class="left-about padding10">
                <img src="{{ asset('site/img/about-img.jpg') }}" alt="" class="img-fluid animateimge targetimge">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-lg-5 ">
            <div class="about-right padding10">
                <div>
                    <h6 class="mt-lg-3 fw-bold primarycolor">About Us</h6>
                    <p class="blackcolor font30 width75 fw-bold">Quick Transport and Logistics Solutions</p>
                    <p class="lightblack">
                        Vikas Logistics is a company that specializes in efficient, reliable, and timely transportation
                        and
                        logistics services. They offer a range of solutions including:</p>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6 col-md-6">
                        <div>
                            <i class="fa-solid fa-globe globe"></i>
                            <div class="mt-3">
                                <h5>Global Coverage</h5>
                                <p class="lightblack">Delivering goods across borders via air, sea, or land with access
                                    to
                                    major shipping routes and hubs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <i class="fa-solid fa-truck-fast globe"></i>
                        <div class="mt-3">
                            <h5>Global Coverage</h5>
                            <p class="lightblack">Delivering goods across borders via air, sea, or land with access to
                                major
                                shipping routes and hubs.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="./index.html" class="explore-more">Explore More</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row margintop">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div>
                    <div>
                        <h6 class="mt-3 fw-bold primarycolor">Some Facts</h6>
                        <p class="blackcolor font30  fw-bold">#1 Place To Manage All Of Your Shipments</p>
                        <p class="lightblack">
                            #1 Place to Manage All of Your Shipments is your ultimate hub for organizing, tracking, and
                            optimizing all aspects of your shipping process. Whether you're managing domestic or
                            international freight, this solution offers a centralized platform to streamline your
                            logistics. With real-time tracking, automated notifications, and detailed reporting, it
                            ensures you have complete control and visibility over your shipments.</p>
                    </div>
                    <div class="d-flex gap-5">
                        <div class="headphone"><i class="fa-solid fa-headphones "></i></div>
                        <div class="contact-headphone">
                            <p class="fw-bold">Call for any query!</p>
                            <h5 class="primarycolor fw-bold">+012 345 6789</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mt-5 mt-lg-0">
                <div class="row mt-md-5">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="client-box">
                            <i class="fa-solid fa-users"></i>
                            <p class="mt-4 fw-bold " id="counter">0</p>
                            <h5>Happy Clients</h5>
                        </div>
                        <div class="client-box mt-4 bg-info">
                            <i class="fa-solid fa-ship"></i>
                            <p class="mt-4 fw-bold " id="counter1">0</p>
                            <h5>Complete Shipments</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 right-client ">
                        <div class="client-box mt-4 bg-success">
                            <i class="fa-solid fa-star"></i>
                            <p class="mt-4 fw-bold " id="counter2">0</p>
                            <h5>Customer Reviews</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-3 margintop" id="service">
            <div>
                <h6 class="mt-3 fw-bold primarycolor text-center">Our Services</h6>
                <p class="blackcolor font30 text-center fw-bold">Explore Our Services</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-md-4 col-sm-12">
                <div class="p-3 our-service">
                    <div>
                        <div class="box-overflow">
                            <img src="{{ asset('site/img/image1.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <p class="air-freight">Air Freight</p>
                        <p class="lightblack">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <div class="read-more">
                            <a href="#"><i class="fa-solid fa-arrow-right"></i><span>Read More</span></a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-4 col-sm-12">
                <div class="p-3 our-service">
                    <div>
                        <div class="box-overflow">
                            <img src="{{ asset('site/img/image4.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <p class="air-freight">Ocean Freight</p>
                        <p class="lightblack">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <div class="read-more">
                            <a href="#"><i class="fa-solid fa-arrow-right"></i><span>Read More</span></a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-4 col-sm-12">
                <div class="p-3 our-service">
                    <div>
                        <div class="box-overflow">
                            <img src="{{ asset('site/img/image5.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <p class="air-freight">Road Freight</p>
                        <p class="lightblack">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <div class="read-more">
                            <a href="#"><i class="fa-solid fa-arrow-right"></i><span>Read More</span></a>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-md-4 col-sm-12">
                <div class="p-3 our-service">
                    <div>
                        <div class="box-overflow">
                            <img src="{{ asset('site/img/image6.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <p class="air-freight">Train Freight</p>
                        <p class="lightblack">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <div class="read-more">
                            <a href="#"><i class="fa-solid fa-arrow-right"></i><span>Read More</span></a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-4 col-sm-12">
                <div class="p-3 our-service">
                    <div>
                        <div class="box-overflow">
                            <img src="{{ asset('site/img/image7.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <p class="air-freight">Customs Clearance</p>
                        <p class="lightblack">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <div class="read-more">
                            <a href="#"><i class="fa-solid fa-arrow-right"></i><span>Read More</span></a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-4 col-sm-12">
                <div class="p-3 our-service">
                    <div>
                        <div class="box-overflow">
                            <img src="{{ asset('site/img/image8.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <p class="air-freight">Warehouse Solutions</p>
                        <p class="lightblack">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <div class="read-more">
                            <a href="#"><i class="fa-solid fa-arrow-right"></i><span>Read More</span></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row   margintop">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div>
                    <h6 class="mt-3 fw-bold primarycolor">Our Features</h6>
                    <p class="blackcolor font30  fw-bold">We Are Trusted Logistics Company Since 1990</p>
                    <div>
                        <div class="our-features mt-5">
                            <div>
                                <i class="fa-solid fa-globe globe"></i>
                            </div>
                            <div>
                                <h6>Worldwide Service</h6>
                                <p class="lightblack">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit
                                    clita duo justo magna erat amet</p>
                            </div>


                        </div>
                        <div class="our-features mt-5">
                            <div>
                                <i class="fa-solid fa-truck-fast globe"></i>
                            </div>
                            <div>
                                <h6>Worldwide Service</h6>
                                <p class="lightblack">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit
                                    clita duo justo magna erat amet</p>
                            </div>


                        </div>
                        <div class="our-features mt-5">
                            <div>
                                <i class="fa-solid fa-headphones globe"></i>
                            </div>
                            <div>
                                <h6>Worldwide Service</h6>
                                <p class="lightblack">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit
                                    clita duo justo magna erat amet</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 dnone">
                <div class="mt-4">
                    <img src="{{ asset('site/img/image2.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

        </div>
        <div class="row mt-5" id="contact">
            <div class="col-lg-5 col-md-12 col-sm-12 mt-5">
                <div>
                    <h6 class="mt-3 fw-bold primarycolor">Get A Quote</h6>
                    <p class="blackcolor font30  fw-bold">Request A Free Qoute!</p>
                    <p class="lightblack mt-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                        amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet
                    </p>
                    <div class="d-flex gap-5">
                        <div class="headphone"><i class="fa-solid fa-headphones " aria-hidden="true"></i></div>
                        <div class="contact-headphone">
                            <p class="fw-bold">Call for any query!</p>
                            <h5 class="primarycolor fw-bold">+012 345 6789</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 mt-5">
                <div class="p-5 bgcontact">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0 inpstyle" placeholder="Your Name" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0 inpstyle" placeholder="Your Email" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0 inpstyle" placeholder="Your Mobile" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0 inpstyle">
                                    <option selected="" class="inpstyle">Select A Freight</option>
                                    <option value="1">Freight 1</option>
                                    <option value="2">Freight 2</option>
                                    <option value="3">Freight 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 inpstyle" placeholder="Special Note" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn  w-100 py-3 submitbtn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="row mt-lg-3">
            <div>
                <h6 class="mt-3 fw-bold primarycolor text-center">Our Team</h6>
                <p class="blackcolor font30 text-center fw-bold">Expert Team Members</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mt-5 col-sm-12">
                <div class="p-3 our-service">
                    <div>
                        <div class="box-overflow">
                            <img src="{{ asset('site/img/image3.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <p class="air-freight">Full Name</p>
                        <p class="lightblack">Designation.</p>
                        <div class="read-more">
                            <div class="share">
                                <i class="fa-solid fa-share" aria-hidden="true"></i>
                                <span class="d-flex">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                                </span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 col-sm-12">
                <div class="p-3 our-service">
                    <div>
                        <div class="box-overflow">
                            <img src="{{ asset('site/img/image9.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <p class="air-freight">Full Name</p>
                        <p class="lightblack">Designation.</p>
                        <div class="read-more">
                            <div class="share">
                                <i class="fa-solid fa-share" aria-hidden="true"></i>
                                <span class="d-flex">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                                </span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 col-sm-12">
                <div class="p-3 our-service">
                    <div>
                        <div class="box-overflow">
                            <img src="{{ asset('site/img/image10.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <p class="air-freight">Full Name</p>
                        <p class="lightblack">Designation.</p>
                        <div class="read-more">
                            <div class="share">
                                <i class="fa-solid fa-share" aria-hidden="true"></i>
                                <span class="d-flex">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                                </span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5 col-sm-12">
                <div class="p-3 our-service">
                    <div>
                        <div class="box-overflow">
                            <img src="{{ asset('site/img/image11.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <p class="air-freight">Full Name</p>
                        <p class="lightblack">Designation.</p>
                        <div class="read-more">
                            <div class="share">
                                <i class="fa-solid fa-share" aria-hidden="true"></i>
                                <span class="d-flex">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                                </span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div>
                <div>
                    <h6 class="mt-3 fw-bold primarycolor text-center">Testimonial</h6>
                    <p class="blackcolor font30 text-center fw-bold">Our Clients Say!</p>
                </div>
                <div>
                    <div class="content-wrapper">
                        <div class="wrapper-for-arrows">
                            <div style="opacity: 0;" class="chicken"></div>
                            <div id="reviewWrap" class="review-wrap">
                                <div id="imgDiv" class="">
                                </div>
                                <div id="personName"></div>
                                <div id="profession"></div>
                                <div id="description">
                                </div>
                            </div>

                            <div class="left-arrow-wrap arrow-wrap">
                                <div class="arrow" id="leftArrow"></div>
                            </div>
                            <div class="right-arrow-wrap arrow-wrap">
                                <div class="arrow" id="rightArrow"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>


    <div class="footercolor">
        <div class="container">
            <footer class="py-5">
                <div class="row">
                    <div class="col-lg-3">
                        <h5 class="whitecolor">Address</h5>
                        <ul class="nav flex-column mt-4">
                            <li class="nav-item mb-2">
                                <div class="d-flex">
                                    <div class="mt-1">
                                        <i class="fa-solid fa-location-dot me-3 "></i>
                                    </div>

                                    <a href="" class="whitecolor whitecoloritem">Shop no 20 c shankar market delhi</a>
                                </div>
                            </li>
                            <li class="nav-item mb-2">
                                <div class="d-flex">
                                    <div class="mt-1">
                                        <i class="fa-solid fa-phone me-3 "></i>
                                    </div>

                                    <span>
                                        <a href="tel: +91-8840354461" class="whitecolor whitecoloritem">+91-8840354461</a> /
                                        <a href="tel: +91-7271920999" class="whitecolor whitecoloritem">+91-7271920999</a> /
                                        <a href="tel: +91-7860578111" class="whitecolor whitecoloritem">+91-7860578111</a>
                                    </span>
                                </div>
                            </li>
                            <li class="nav-item mb-2">
                                <div class="d-flex ">
                                    <div>
                                        <i class="fa-regular fa-envelope me-3 "></i>
                                    </div>
                                    <a href="mailto:vikaslogistics14320@gmail.com" class="whitecolor whitecoloritem">vikaslogistics14320@gmail.com</a>
                                </div>
                            </li>

                        </ul>
                        <ul class="ps-0 d-flex gap-1 mt-3">
                            <li class="footeritem">
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="footeritem">
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li class="footeritem">
                                <a href=""><i class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li class="footeritem">
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 mt-5  mt-lg-0">
                        <h5>Important Links</h5>
                        <ul class="nav flex-column mt-4">
                            <li class="nav-item mb-2 ">
                                <div class="d-flex gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                    <a href="#" class="nav-link p-0 whitecolor whitecoloritem">Home</a>
                                </div>
                            </li>
                            <li class="nav-item mb-2 ">
                                <div class="d-flex gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                    <a href="#" class="nav-link p-0 whitecolor whitecoloritem">About</a>
                                </div>
                            </li>
                            <li class="nav-item mb-2 ">
                                <div class="d-flex gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                    <a href="#" class="nav-link p-0 whitecolor whitecoloritem">Service</a>
                                </div>
                            </li>
                            <li class="nav-item mb-2 ">
                                <div class="d-flex gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                    <a href="#" class="nav-link p-0 whitecolor whitecoloritem">Contact</a>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-3 mt-5  mt-lg-0">
                        <form>
                            <h5 class="textcenter">Newsletter</h5>
                            <p class="textcenter">Dolor amet sit justo amet elitr clita ipsum elitr est. </p>
                            <div class="w-100 gap-2">
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address"
                                    required><br>
                                <button class="btn bgprimarycolor w-100 btnsubscribe" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6080913.846100792!2d72.7170415!3d25.0728932!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c47b2bbe70b55%3A0x6ef3694e3392a949!2sChandramukhi%20Guest%20House!5e1!3m2!1sen!2sin!4v1726860901196!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row mt-5">
                    <div class="text-center">
                        <p class="text-center">© 2024 Company, Inc. All rights reserved.</p>
                    </div>

                </div>
            </footer>
        </div>
    </div>


</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="{{ asset('site/script.js') }}"></script>