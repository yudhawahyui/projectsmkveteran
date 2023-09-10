<!DOCTYPE html>
<html lang="en">

<head>
    <title>Unicat</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('front-end/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('front-end/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/styles/responsive.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li>
                                            <div class="question">Have any questions?</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <div>001-1234-88888</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <div>info.deercreative@gmail.com</div>
                                        </li>
                                    </ul>
                                    <div class="row ml-auto g-3">
                                        <div class="top_bar_login mr-2">
                                            <div class="login_button">
                                                <span class="text-">
                                                    <a href="/register">Register</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="top_bar_login">
                                            <div class="login_button">
                                                <span class="text-">
                                                    <a href="/login">Login</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_text">SMKS Veteran<span> Cirebon</span></div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li class="active"><a href="#">Home</a></li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Sekolah
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">Ekstrakulikuler</a>
                                            </div>
                                        </li>
                                        <li><a href="courses.html">Profile Sekolah</a></li>
                                        <li><a href="#">Tentang Kami</a></li>
                                    </ul>
                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Home -->

        <div class="home">
            <div class="position-relative">
                <img src="{{ asset('front-end/images/home_slider_1.jpg') }}" class="d-block w-100 position-absolute z-0" alt="..." style="">
                <div class="postion-absolute" style="top:350px; left:25%; width:40%">
                    <div class="logo_text">
                        <h1>Selamat Datang DI <span>SMK Veteran Kota Cirebon</span></h1>
                        <p>Website Resmi SMK Veteran Kota Cirebon</p>
                    </div>
                </div>

            </div>

            {{-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('front-end/images/home_slider_1.jpg') }}" class="d-block w-100" alt="...">
                        <p>Info</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('front-end/images/home_slider_1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('front-end/images/home_slider_1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="carousel" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </div>
                <div class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </div>
            </div> --}}

            <!-- Home Slider Nav -->

            {{-- <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div> --}}
        </div>

        <!-- Features -->

        <div class="features">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">Profile PPDB SMK Veteran Cirebon</h2>
                            <div class="section_subtitle">
                                <p>Situs ini dipersiapkan sebagai pengganti pusat informasi dan pengolahan seleksi data
                                    siswa peserta PPDB SMK Veteran Cirebon Periode 2024 / 2025 secara online real time
                                    process untuk pelaksanaan PPDB Online. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row features_row">

                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="{{ asset('front-end/front-end/images/icon_1.png') }}"
                                    alt=""></div>
                            <h3 class="feature_title">Visi Misi</h3>
                            <div class="feature_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>

                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="{{ asset('front-end/front-end/images/icon_2.png') }}"
                                    alt=""></div>
                            <h3 class="feature_title">Sejarah Sekolah</h3>
                            <div class="feature_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>

                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="{{ asset('front-end/front-end/images/icon_3.png') }}"
                                    alt=""></div>
                            <h3 class="feature_title">Prestasi</h3>
                            <div class="feature_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>

                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="{{ asset('front-end/front-end/images/icon_4.png') }}"
                                    alt=""></div>
                            <h3 class="feature_title">Alamat Lengkap</h3>
                            <div class="feature_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Popular Courses -->

        <div class="courses">
            <div class="section_background parallax-window" data-parallax="scroll"
                data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">Popular Online Courses</h2>
                            <div class="section_subtitle">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu.
                                    Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row courses_row">

                    <!-- Course -->
                    <!-- Features Item -->
                    <div class="col-lg-4 course_col">
                        <div class="course">
                            <div class="course_image"><img src="{{ asset('front-end/images/course_1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="course_body">
                                <h3 class="course_title"><a href="course.html">Otomatisasi dan Tata Kelola
                                        Pemasaran</a></h3>
                                <div class="course_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                            <div class="course_footer">
                                <div
                                    class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="course_info">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <span>20 Student</span>
                                    </div>
                                    <div class="course_info">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5 Ratings</span>
                                    </div>
                                    <div class="course_price ml-auto">$130</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course -->
                    <div class="col-lg-4 course_col">
                        <div class="course">
                            <div class="course_image"><img src="{{ asset('front-end/images/course_2.jpg') }}"
                                    alt="">
                            </div>
                            <div class="course_body">
                                <h3 class="course_title"><a href="course.html">Bisnis Daring Dan Pemasaran</a></h3>
                                <div class="course_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                            <div class="course_footer">
                                <div
                                    class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="course_info">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <span>20 Student</span>
                                    </div>
                                    <div class="course_info">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5 Ratings</span>
                                    </div>
                                    <div class="course_price ml-auto">Free</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course -->
                    <div class="col-lg-4 course_col">
                        <div class="course">
                            <div class="course_image"><img src="{{ asset('front-end/images/course_3.jpg') }}"
                                    alt="">
                            </div>
                            <div class="course_body">
                                <h3 class="course_title"><a href="course.html">Tehnik Komputer Dan jaringan</a></h3>
                                <div class="course_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                            <div class="course_footer">
                                <div
                                    class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="course_info">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <span>20 Student</span>
                                    </div>
                                    <div class="course_info">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5 Ratings</span>
                                    </div>
                                    <div class="course_price ml-auto"><span>$320</span>$220</div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col">
                        <div class="courses_button trans_200"><a href="#">view all courses</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latest News -->

        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">Latest News</h2>
                            <div class="section_subtitle">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu.
                                    Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row news_row">
                    <div class="col-lg-7 news_col">
                        <!-- News Post Large -->
                        <div class="news_post_large_container">
                            <div class="news_post_large">
                                <div class="news_post_image"><img
                                        src="{{ asset('template/front-end/images/news_1.jpg') }}" alt="">
                                </div>
                                <div class="news_post_large_title"><a href="blog_single.html">Here’s What You Need to
                                        Know About Online Testing for the ACT and SAT</a></div>
                                <div class="news_post_meta">
                                    <ul>
                                        <li><a href="#">admin</a></li>
                                        <li><a href="#">november 11, 2017</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Policy analysts generally agree on a need for reform, but not on which path
                                        policymakers should take. Can America learn anything from other nations...</p>
                                </div>
                                <div class="news_post_link"><a href="blog_single.html">read more</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 news_col">
                        <div class="news_posts_small">
                            <!-- News Posts Small -->
                            <div class="news_post_small">
                                <div class="news_post_small_title"><a href="blog_single.html">Home-based business
                                        insurance issue (Spring 2017 - 2018)</a></div>
                                <div class="news_post_meta">
                                    <ul>
                                        <li><a href="#">admin</a></li>
                                        <li><a href="#">november 11, 2017</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- News Posts Small -->
                            <div class="news_post_small">
                                <div class="news_post_small_title"><a href="blog_single.html">2018 Fall Issue: Credit
                                        Card Comparison Site Survey (Summer 2018)</a></div>
                                <div class="news_post_meta">
                                    <ul>
                                        <li><a href="#">admin</a></li>
                                        <li><a href="#">november 11, 2017</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- News Posts Small -->
                            <div class="news_post_small">
                                <div class="news_post_small_title"><a href="blog_single.html">Cuentas de cheques
                                        gratuitas una encuesta de Consumer Action</a></div>
                                <div class="news_post_meta">
                                    <ul>
                                        <li><a href="#">admin</a></li>
                                        <li><a href="#">november 11, 2017</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- News Posts Small -->
                            <div class="news_post_small">
                                <div class="news_post_small_title"><a href="blog_single.html">Troubled borrowers have
                                        fewer repayment or forgiveness options</a></div>
                                <div class="news_post_meta">
                                    <ul>
                                        <li><a href="#">admin</a></li>
                                        <li><a href="#">november 11, 2017</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="footer_background"
                style="background-image:url('{{ asset('template/front-end/images/footer_background.png') }}')"></div>
            <div class="container">
                <div class="row footer_row">
                    <div class="col">
                        <div class="footer_content">
                            <div class="row">

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer About -->
                                    <div class="footer_section footer_about">
                                        <div class="footer_logo_container">
                                            <a href="#">
                                                <div class="footer_logo_text">SMK Veteran</div>
                                            </a>
                                        </div>
                                        <div class="footer_about_text">
                                            <p>Penerimaan Peserta Didik Baru 2024/2025</p>
                                        </div>
                                        <div class="footer_social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer Contact -->
                                    <div class="footer_section footer_contact">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_contact_info">
                                            <ul>
                                                <li>Email: Info.deercreative@gmail.com</li>
                                                <li>Phone: +(88) 111 555 666</li>
                                                <li>40 Baria Sreet 133/2 New York City, United States</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col clearfix">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_mobile">
                                        <div class="footer_title">Mobile</div>
                                        <div class="footer_mobile_content">
                                            <div class="footer_image"><a href="#"><img
                                                        src="{{ asset('front-end/images/mobile_1.png') }}"
                                                        alt=""></a></div>
                                            <div class="footer_image"><a href="#"><img
                                                        src="{{ asset('front-end/images/mobile_2.png') }}"
                                                        alt=""></a></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('front-ened/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('front-ened/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-ened/plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('front-ened/plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('front-ened/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('front-ened/plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('front-ened/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('front-ened/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('front-ened/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('front-ened/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('front-ened/js/custom.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script> --}}

</body>

</html>
