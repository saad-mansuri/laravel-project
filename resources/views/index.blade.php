<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeXsite</title>
    <link rel="icon" href="image/Asset36.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Navigation Part -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light custom-navbar topnav fixed-top">
        <a class="navbar-brand" href="#">#codeXsite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown"
            aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarDropdown">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item"> <a class="nav-link" href="/home">&nbsp;Home</a></li>
                <li class="nav-item"> <a class="nav-link" href="#services">&nbsp;Services</a></li>
                <li class="nav-item"> <a class="nav-link" href="#Portfolio">&nbsp;Portfolio</a></li>
                <li class="nav-item"> <a class="nav-link" href="/about">&nbsp;About</a> </li>
                <li class="nav-item"> <a class="nav-link" href="/contact">&nbsp;Contact us</a> </li>
            </ul>
        </div>
    </nav>
    <!-- END NAVIGATION -->

    <section class="img-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>codeXsite Web Solutions</h1>
                        <!-- <h3>Where Awesomeness Is Brought To Life.</h3> -->
                        <!-- <hr class="intro-divider"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Features Section -->
    <section class="service-section-2 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 pt-5">
                    <div class="inner-box">
                        <i class="fa fa-bullseye"></i>
                        <h5><b>Our Mission</b></h5>
                        <p class="text-justify">
                            To become a one-stop API hub to provide various services related to telecom, Utility, FMCG
                            and financial inclusions products.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 pt-5">
                    <div class="inner-box">
                        <i class="fa fa-calculator"></i>
                        <h5><b>Our Plan</b></h5>
                        <p class="text-justify">
                            To achieve this we have a professional team with extensive cross functional expertise in the
                            Payments & Value added Services
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 pt-5">
                    <div class="inner-box">
                        <i class="fa fa-low-vision"></i>
                        <h5><b>Our Vision</b></h5>
                        <p class="text-justify">
                            To achieve 1 Lac + transaction Count per day by joining hands with various Distribution
                            network of B2B & B2C Channel partners.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section END -->

    <!-- Services Section -->
    <section class="my-5 pb-5" id="services">
        <div class="container" >

            <div class="row">
                <div class="col-md-12">
                    <h2 class="operators-title">Services</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p class="desc_txt">We provide stellar solutions from Startup to Enterprise level company. As one of
                        the frontiers in mobile and web development company, we make sure that you get proper exposure
                        of your target audience and increase the number of customers on the mobile app or website.</p>

                    <p class="desc_txt my-3">We plan to revamp business tasks with mobile app development, custom
                        software application development, Big Data, the Internet of Things (IoT), website development,
                        Blockchain development, etc. Conquering these fields is something we constantly strive for and
                        we'll continue to do so as we take the utmost pride in being the best IT services and IT
                        solutions company. </p>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-md-3">
                    <a href="/webdevelop">
                        <div class="operator-part pt-3">
                            <img class="img-operator" src="{{asset('image/website.png')}}" alt="website">
                            <div class="row my-3">
                                <span>Web Development</span>
                            </div>
                            <div class="row pb-2">
                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="/mobappdevelop">
                        <div class="operator-part pt-3">
                            <img class="img-operator" src="{{asset('image/android.png')}}" alt="website">
                            <div class="row my-3">
                                <span>Mobile App</span>
                            </div>
                            <div class="row pb-2">
                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ">
                    <a href="/iosappdevelop">
                        <div class="operator-part pt-3">
                            <img class="img-operator" src="{{asset('image/IOS.png')}}" alt="IOSapp">
                            <div class="row my-3">
                                <span>IOS App</span>
                            </div>
                            <div class="row pb-2">
                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ">
                    <a href="/windowappdevelop">
                        <div class="operator-part pt-3">
                            <img class="img-operator" src="{{asset('image/window.png')}}" alt="window">
                            <div class="row my-3">
                                <span>Window App</span>
                            </div>
                            <div class="row pb-2">
                                <!-- <img class="right-arrow" src="{% static 'image/rightarrow.png' %}" alt=""> -->
                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3 ">
                    <a href="#Design">
                        <div class="operator-part pt-3">
                            <img class="img-operator" src="{{asset('image/PngItem_233600.png')}}" alt="webdesign">
                            <div class="row my-3">
                                <span>Design</span>
                            </div>
                            <div class="row pb-2">
                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ">
                    <a href="#Digital-Marketing">
                        <div class="operator-part pt-3">
                            <img class="img-operator" src="{{asset('image/digitalmarketing.png')}}" alt="digitalmarketing">
                            <div class="row my-3">
                                <span>Digital Marketing</span>
                            </div>
                            <div class="row pb-2">
                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ">
                    <a href="#Block-chain">
                        <div class="operator-part pt-3">
                            <img class="img-operator" src="{{asset('image/blockchain.png')}}" alt="window">
                            <div class="row my-3">
                                <span>Block-chain</span>
                            </div>
                            <div class="row pb-2">
                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ">
                    <a href="#Window-App">
                        <div class="operator-part pt-3">
                            <img class="img-operator" src="{{asset('image/window.png')}}" alt="window">
                            <div class="row my-3">
                                <span>Window App</span>
                            </div>
                            <div class="row pb-2">
                                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <!-- <div class="row mt-5">
                <a href="/services">
                    <div class="btn-primary btn-explore">
                        <p> Let's Explore <i class="fa fa-arrow-right fa-1.5x" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div> -->


        </div>
    </section>

    <!-- Services Section END-->


    <!--Industries We serve Section -->

    <section class="industry-response-4-desktop">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="industri-title">Industries We Serve</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p class="desc_txt">Industries, well they change over time. And every once in a while, they face
                        different challenges, by keeping this thing in mind, we gather all requirements and provide
                        significant solution to raise competitiveness and taste the success in every industry that we
                        serve.</p>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                    <a href="#Health-Care">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-heartbeat font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Health Care</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#Education">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-user-graduate font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Education</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#E-Commerce">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fa fa-shopping-basket font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>E-Commerce</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#Hotel&Restaurants">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-utensils font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Hotel & Restaurants</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-md-3">
                    <a href="#Travel&Tourism">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-route font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Travel & Tourism</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>




                <div class="col-md-3">
                    <a href="#Banking&Finance">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-university font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Banking & Finance</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#Logistic&Shipping">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-dolly-flatbed font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Logistic & Shipping</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#Social-Networking">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-project-diagram font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Social Networking</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Industries We serve Section END-->




    <!--Industries We serve Section For Responsive-->
    <section class="industry-response-4-mobile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="industri-title">Industries We serve</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    <a href="#">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-heartbeat font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Health Care</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-user-graduate font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Education</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fa fa-shopping-basket font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>E-Commerce</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-utensils font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Hotel & Restaurants</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-md-3">
                    <a href="#">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-route font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Travel & Tourism</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-university font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Banking & Finance</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-dolly-flatbed font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Logistic & Shipping</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="#">
                        <div class="industri-serve">
                            <div class="industri">
                                <i class="fas fa-project-diagram font-size-icon-is"></i>
                                <div class="row my-3">
                                    <span>Social Networking</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!--Industries We serve Section END-->





    <section class="mt-2 mb-4 pt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="about-codex-title">About Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="content-codex">
                        <p class="text-justify font-size-21">codeXsite is well known to craft the most
                            innovative software development. We offer mobile apps like
                            (Android apps, Ios app), website development and Windows apps development.
                            Our skilled team &amp; our products are engineered to bring growth to your business.
                            We believe
                            in delivering the services without compromising on time and quality.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-codex">
                        <p class="text-justify font-size-21">

                            codeXsite is well known to craft the most
                            innovative software development. We offer mobile apps like
                            (Android apps, Ios app), website development and Windows apps development.
                            Our skilled team &amp; our products are engineered to bring growth to your business.
                            We believe
                            in delivering the services without compromising on time and quality.

                            <!-- We create perfect solutions to solve your specificproblems.
                            The solutions are designed as per your business processes to satisfy
                            your exclusive needs of making your workflow easier, faster and more efficient.-->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Sec END -->



    <!-- Footer Section -->
    <section>
        <footer>
            <nav class="navbar bg-light justify-content-center my-footer">
                <b>
                    <p></p>Copyright<sup>©</sup> #codeXsite.<p></p>
                </b>
            </nav>
        </footer>
    </section>
    <!-- Footer Section END-->


    <!-- Operators Section END-->

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/4872f3e6f5.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>