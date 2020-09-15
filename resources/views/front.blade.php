
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>So Coaching</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= asset('img/core-img/favicon.ico') ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +91 8433466260</a>
                <a href="#"><span>Email:</span> admission@socoaching.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <a class="nav-brand" href="#">
                        <img src="<?= asset('img/core-img/logo.png') ?>">
                    </a>

                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#courses">Courses</a></li>
                                <li><a href="#instructor">Instructors</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Guest</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="/login">Login</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="<?= asset('img/core-img/guest.png') ?>">
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/bg1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Join Us Today</h2>
                        <a href="#" class="btn clever-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <section class="cool-facts-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <div class="icon">
                            <img src="img/core-img/docs.png" alt="">
                        </div>
                        <h2><span class="counter">900</span></h2>
                        <h5>Success Stories</h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <div class="icon">
                            <img src="img/core-img/star.png" alt="">
                        </div>
                        <h2><span class="counter">15</span></h2>
                        <h5>Dedicated Tutors</h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <div class="icon">
                            <img src="img/core-img/events.png" alt="">
                        </div>
                        <h2><span class="counter">20</span></h2>
                        <h5>AC classrooms</h5>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <div class="icon">
                            <img src="img/core-img/earth.png" alt="">
                        </div>
                        <h2><span class="counter">20</span></h2>
                        <h5>Available Courses</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" id= "courses" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Courses We Offer</h3>
                    </div>
                </div>
            </div>


            <div class="row">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100">
                        <img src="img/courses/maths.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Mathematics</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">View Teachers</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">9th - 12th</a>
                            </div>
                            <p>We have highly qualifies teachers for maths for better understanding and timely doubt sessions.</p>
                        </div>
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free">Difficult</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100">
                        <img src="img/courses/Science.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Science</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">View Teachers</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">9th - 10th</a>
                            </div>
                            <p>We have teachers who can instruct students in subject-specific lessons. They create lesson plans; evaluate student performances; and teach using lectures, technology and hands-on learning experiences.</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free">Difficult</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100">
                        <img src="img/courses/physics.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Physics</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">View Teachers</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">11th - 12th</a>
                            </div>
                            <p>We have teachers who can teach children this subject according to their needs and wants (competition or academics).</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free">Difficult</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100">
                        <img src="img/courses/chemistry.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Chemisty</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">View Teachers</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">11th - 12th</a>
                            </div>
                            <p>We have highly qualifies Chemistry teachers who can not only teach but also  supervise laboratory activities for students.</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#">Easy</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100">
                        <img src="img/courses/biology.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Biology</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">View Teachers</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">11th - 12th</a>
                            </div>
                            <p>We have teachers who develop engaging curricula including lab experiments and other scientific investigations; they also present lessons and evaluate student performance.</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free">Difficult</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100">
                        <img src="img/courses/counselling.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Counselling</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">View Counsellers</a>
                                <a href="#"></a>
                            </div>
                            <p>We have Counsellers who provide support to students experiencing emotional difficulties by helping them to identify and work through their issues.</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Popular Courses End ##### -->

    <!-- ##### Best Tutors Start ##### -->
    <section class="best-tutors-area section-padding-100" id="instructor">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>The Best Tutors in Town</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel">


                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/teachers/priyanshu.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Priyanshu Garg</h5>
                                <span>Teacher- Maths (11th - 12th)</span>
                                <p>Ph.D.(Maths)- IIT Delhi</p>
                                <div class="social-info">
                                    <a href="https://www.facebook.com/priyanshu.garg.56"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/priyanshu.garg.20/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>



                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/teachers/sanskarGoyal.jpg" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Sanskar Goyal</h5>
                                <span>Teacher- Chemistry (11th - 12th)</span>
                                <p>B. Tech - IIT Madras <br> M. Tech - IIT Bombay</p>
                                <div class="social-info">
                                    <a href="https://www.facebook.com/sanskarg9"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/sanskarr.goyal/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/teachers/rohit.jpg" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Rohit Jain</h5>
                                <span>Teacher- Biology(11th - 12th)</span>
                                <p>B. Tech - IIT Madras <br> M. Tech - IIT Bombay</p>
                                <div class="social-info">
                                    <a href="https://www.facebook.com/xRohitJ"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/the.rohitjain/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/teachers/ashish.jpg" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Ashish Singh</h5>
                                <span>Teacher- Science(9th - 10th)</span>
                                <p>B. Tech - IIT Madras <br> M. Tech - IIT Bombay</p>
                                <div class="social-info">
                                    <a href="https://www.facebook.com/profile.php?id=100005505693053"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/singh_ashish26/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/teachers/mridul.jpg" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Mridul Kumar</h5>
                                <span>Teacher- Accounts(11th - 12th)</span>
                                <p>B. Tech - IIT Madras <br> M. Tech - IIT Bombay</p>
                                <div class="social-info">
                                    <a href="https://www.facebook.com/mridul.kumar.54379"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/m_ri_dul_999/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/teachers/harsh.jpg" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Harsh Mishra</h5>
                                <span>Teacher- English(9th - 10th)</span>
                                <p>B. Tech - IIT Madras <br> M. Tech - IIT Bombay</p>
                                <div class="social-info">
                                    <a href="https://www.facebook.com/harsh.mishra.1654"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/harshm._/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/teachers/ritvik.jpg" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Ritvik Aggarwal</h5>
                                <span>Teacher- English(11th - 12th)</span>
                                <p>B. Tech - IIT Madras <br> M. Tech - IIT Bombay</p>
                                <div class="social-info">
                                    <a href="https://www.facebook.com/ritvik.aggarwal.52.34.ritz101"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/ritvik.agg/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/teachers/siddhant.jpg" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>Siddhant Ranjan Singh</h5>
                                <span>Counsellor- All(9th - 12th)</span>
                                <p>B. Tech - IIT Madras <br> M. Tech - IIT Bombay</p>
                                <div class="social-info">
                                    <a href="https://www.facebook.com/siddhantranjansingh"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/siddhantranjansingh/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Best Tutors End ##### -->

    <!-- ##### Register Now Start ##### -->
    <section class="register-now section-padding-100-0 d-flex justify-content-between align-items-center" style="background-image: url(img/core-img/texture.png);">
        <!-- Register Contact Form -->
        <div class="register-contact-form mb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="forms">
                            <h4>Check Scholarship Availability</h4>
                            <p>We have a scholarship program for our astonishing students to help them reducing the financial burden on their parents such
                            that they can actively engage in studies. <br>
                            Go to your profiles section(for already enrolled students) and then click on apply for scholarships to request for the scholarship.
                            <br> We will notify you if you are eligible for it.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register Now Countdown -->
        <div class="register-now-countdown mb-100">
            <h3>Register Now</h3>
            <p>For registration purposes the child should come in person with his/her ward to the admission office. For contact information check contact section above. Hurry Now, Time remaining for scholarship availing is.</p>
            <div class="register-countdown">
                <div class="events-cd d-flex flex-wrap" data-countdown="2019/11/01"></div>
            </div>
        </div>
    </section>
    <!-- ##### Register Now End ##### -->

    <!-- ##### Upcoming Events Start ##### -->
    <section class="upcoming-events section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Important Notifications</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e3.jpg" alt="">
                            <h6 class="event-date">October 26</h6>
                            <h4 class="event-title">Class 11th new physics batch</h4>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e3.jpg" alt="">
                            <h6 class="event-date">October 7</h6>
                            <h4 class="event-title">Class 10th new Maths Batch</h4>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/arro2.jpg" alt="">
                            <h6 class="event-date">More Notifications:</h6><br><br>
                            <a href="/notifications"><h4 class="event-title">Click here to See all notifications</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Notificatios End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +91 7906536827</a>
                <a href="#"><span>Email:</span> admission@socoaching.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
