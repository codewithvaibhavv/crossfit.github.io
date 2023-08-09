<!DOCTYPE html>
<html lang>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym ">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CrossFit</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
    <script>
        window.onload = () => {
            let button = document.querySelector("#btn");

            button.addEventListener("click", calculateBMI);
        };

        function calculateBMI() {


            let height = parseInt(document
                .querySelector("#height").value);


            let weight = parseInt(document
                .querySelector("#weight").value);

            let result = document.querySelector("#result");


            if (height === "" || isNaN(height))
                alert("Provide a valid Height!");

            else if (weight === "" || isNaN(weight))
                alert("Provide a valid Weight!");

            else {

                let bmi = (weight / ((height * height)
                    / 10000)).toFixed(2);

                if (bmi < 18.6)
                    alert("Under Weight :" + bmi);

                else if (bmi >= 18.6 && bmi < 24.9)
                    alert("Normal:" + bmi);

                else
                    alert("Over Weight :" + bmi);
            }
        }

    </script>


    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="#footer">About Us</a></li>
                <li><a href="./excercises.php">Excercises</a></li>
                <li><a href="#footer2">Bmi calculator</a></li>
                <li><a href="#gall">Gallery</a></li>
                <li><a href="#foot">Contact Us</a></li>

            </ul>
            </li>

            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
            <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
        </div>
    </div>

    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./home.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="#footer">About Us</a></li>
                            <li><a href="./excercises.php">Excercises</a></li>
                            <li><a href="#footer2">Bmi calculator</a></li>
                            <li><a href="#gall">Gallery</a></li>
                            <li><a href="#foot">Contact Us</a></li>
                        </ul>
                        </li>

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="to-social">
                            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> train hard</h1>
                                <a href="./excercises.php" class="primary-btn">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> train hard</h1>
                                <a href="./excercises.php" class="primary-btn">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="choseus-section spad">
        <div class="container" id="footer">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span> OUR MOTO !</span>
                        <h2>EAT HEALTHY BE HEALTHY !</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Cardio</h4>
                        <p>Cardio is defined as any type of exercise that gets your heart rate up and keeps it up for a
                            prolonged period of time. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Healthy Eating Habits</h4>
                        <p>Emphasizes fruits, vegetables, whole grains, and fat-free or low-fat milk and milk products.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Discipline Training</h4>
                        <p>self discipline is a learned behavior. It requires practice and
                            repetition in your day-to-day life.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique to your needs</h4>
                        <p>Blend of Massage and sharing mutual goals.Holistic approach to
                            enhance physical and mental wellness.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>EXCERCISES</span>
                        <h2>WORKOUT ROUTINES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-1.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Weightlifting</h5>
                            <a href="./excercises.php"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-2.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Cardio</span>
                            <h5>FULL BODY</h5>
                            <a href="./excercises.php"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-3.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Abs Workout</span>
                            <h5>KETTLEBELL POWER</h5>
                            <a href="./excercises.php"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-4.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Biceps</span>
                            <h4>Preacher Curl</h4>
                            <a href="./excercises.php"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-5.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Training</span>
                            <h4>Boxing</h4>
                            <a href="./excercises.phps"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-section set-bg" data-setbg="img/homedownbanner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                        <a href="#foot" class="primary-btn  btn-normal">CONTACT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bmi-calculator-section spad">
        <div class="container" id="footer2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title chart-title">
                        <span>check your body</span>
                        <h2>BMI CALCULATOR CHART</h2>
                    </div>
                    <div class="chart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Bmi</th>
                                    <th>WEIGHT STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="point">Below 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr>
                                    <td class="point">18.5 - 24.9</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td class="point">25.0 - 29.9</td>
                                    <td>Overweight</td>
                                </tr>
                                <tr>
                                    <td class="point">30.0 - and Above</td>
                                    <td>Obese</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title chart-calculate-title">
                        <span>check your body</span>
                        <h2>CALCULATE YOUR BMI</h2>
                    </div>
                    <div class="chart-calculate-form">
                        <p>The Body Mass Index (BMI) is a quick way to assess your body size simply with your weight and
                            height, regardless of your gender. Quickly calculate your BMI and find out which category
                            you fall into.</p>
                        <form action="#" method="post" onsubmit="calculateBMI(); return false;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" id="height" placeholder="Height / cm" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" id="weight" placeholder="Weight / kg" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="age" placeholder="Age">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="sex" placeholder="Sex">
                                </div>
                                <div class="col-lg-12">
                                    <button name="sub" id="btn">Calculate</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="gallery-section" id="gall">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-1.jpg">
                <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"> <i class="fa fa-picture-o"></i> </a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
                <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
                <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-6.jpg">
                <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container" id="foot">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <span>Contact Us</span>
                        <h2>GET IN TOUCH</h2>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-text">
                            <i class="fa fa-map-marker"></i>
                            <p>Ghaziabad<br /> UP 14</p>
                        </div>
                        <div class="cw-text">
                            <i class="fa fa-mobile"></i>
                            <ul>
                                <li>9760-653-801</li>
                                <li>7505-317-176</li>
                            </ul>
                        </div>
                        <div class="cw-text email">
                            <i class="fa fa-envelope"></i>
                            <p>vaibhav976065@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form action="connect.php" method="POST">
                            <input type="text" placeholder="Name" class="form-control" Name="name" id="name">
                            <input type="text" placeholder="Email" class="form-control" Name="email" id="email">
                            <input type="phone" placeholder="Phone" class="form-control" Name="phone" id="phone">
                            <input type="text" placeholder="Comment" class="form-control" Name="comment" id="comment">
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map" class="gs-item grid-wide set-bg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.867814036929!2d77.44518381502274!3d28.633723582417375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee22c60837b7%3A0x7c35343eceb7bde0!2sABES%20Engineering%20College!5e0!3m2!1sen!2sin!4v1677345579375!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Ghaziabad<br /> UP 14</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>9760-653-801</li>
                            <li>7505-317-176</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>vaibhav976065@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="./home.php"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>The meaning of life is not simply to exist, to survive, but to move ahead, to go up, to
                            conquer.<br>
                            Arnold Schwarzenegger, 7-time Mr Olympia</p>
                        <div class="fa-social">
                            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href="./home.php">About</a></li>
                            <li><a href="./excercises.php">Excercises</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="https://www.facebook.com">Subscribe</a></li>
                            <li><a href="#foot">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Tips & Guides</h4>
                        <div class="fw-recent">
                            <h6><a href="">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class="fw-recent">
                            <h6><a href="">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p>
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved - ABES ||
                            Shashank || Vaibhav Sharma</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html> 