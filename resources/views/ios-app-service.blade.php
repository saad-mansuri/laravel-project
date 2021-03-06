<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeXsite</title>
    <link rel="icon" href="/image/Asset36.png">
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
                <!-- <li class="nav-item"> <a class="nav-link" href="/services">&nbsp;Services</a></li>
                <li class="nav-item"> <a class="nav-link" href="#Portfolio">&nbsp;Portfolio</a></li> -->
                <li class="nav-item"> <a class="nav-link" href="/about">&nbsp;About</a> </li>
                <li class="nav-item"> <a class="nav-link" href="/contact">&nbsp;Contact us</a> </li>
            </ul>
        </div>
    </nav>
    <!-- END NAVIGATION -->


    <div class="show-msg">
        @if(Session::get('status'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{(Session::get('status'))}}</strong>
            </div>
            @endif
    </div>


        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 main-head-service">
                    <p> <b>IOS APP DEVELOPMENT</b> COST CALCULATOR</p>
                </div>
            </div>

            <div class="row justify-content-start">
                <div class="col-md-6 mb-5 extra-margin">

                    <!-- What are you Working on? -->
                    <div class="row justify-content-start">
                        <h3 class="cost-cal-sentence">What are you Working on?</h3>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-md-3">

                            <!-- <input type="button" name="" id="" class="cost-cal-btn btn-calc" value="Names">  -->

                            <div class="btn btn-primary cost-cal-btn btn-calc mobileapp-btn-services-1" data-text="ecommerce">
                                E-Commerce
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="btn btn-primary cost-cal-btn btn-calc mobileapp-btn-services-1" data-text="education">
                                Education
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="btn btn-primary cost-cal-btn btn-calc mobileapp-btn-services-1" data-text="healthcare">
                                Health & Care
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="btn btn-primary cost-cal-btn btn-calc mobileapp-btn-services-1" data-text="hotel">
                                Hotel
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="btn btn-primary cost-cal-btn btn-calc mobileapp-btn-services-1" data-text="restaurants">
                                Restaurants
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="btn btn-primary cost-cal-btn btn-calc mobileapp-btn-services-1" data-text="travels">
                                Travels
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="btn btn-primary cost-cal-btn btn-calc mobileapp-btn-services-1" data-text="banking">
                                Bankig
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="btn btn-primary cost-cal-btn btn-calc mobileapp-btn-services-1" data-text="finance">
                                Finance
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="btn btn-primary cost-cal-btn btn-calc mobileapp-btn-services-1" data-text="shipping">
                                Shipping
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="btn btn-primary cost-cal-btn btn-calc mobileapp-btn-services-1" data-text="socialnetwork">
                                Social Network
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="btn btn-primary cost-cal-btn btn-calc mobileapp-btn-services-1" data-text="other">
                                Other
                            </div>
                        </div>
                    </div>


                    <div class="service-sentence-sec-1">
                        <div class="row app-sentence-1 justify-content-start">
                            <p class="text-justify">Is it a startup or a mobile app to support an existing business?</p>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-md-4">
                                <div class="btn btn-primary mobileapp-btn-services-2 btn-calc btn-calc"
                                    data-text="template">
                                    Startup
                                </div>
                                <!-- <button class="btn-primary mobileapp-btn-services-2">Startup</button> -->
                            </div>

                            <div class="col-md-4">
                                <div class="btn btn-primary mobileapp-btn-services-2 btn-calc btn-calc"
                                    data-text="template">
                                    Existing Business
                                </div>
                                <!-- <button class="btn-primary mobileapp-btn-services-2">Existing Business</button> -->
                            </div>

                        </div>
                    </div>


                    <div class="service-sentence-sec-1">
                        <div class="row app-sentence-1 justify-content-start">
                            <p>Select app technology:</p>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-md-3">
                                <div class="btn btn-primary mobileapp-btn-services-3 btn-calc btn-calc"
                                    data-text="template">
                                    Android
                                </div>

                                <!-- <button class="btn-primary mobileapp-btn-services-3">Android</button> -->
                            </div>
                            <div class="col-md-3">
                                <div class="btn btn-primary mobileapp-btn-services-3 btn-calc btn-calc"
                                    data-text="template">
                                    IOS
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="btn btn-primary mobileapp-btn-services-3 btn-calc btn-calc"
                                    data-text="template">
                                    Hybrid
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-sentence-sec-1">
                        <div class="row app-sentence-1 justify-content-start">
                            <p>Will your users require an account to login?</p>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-md-3">
                                <div style="margin:10px 0px 0px 10px" >
                                      <label id="sliderLabel">
                                            <input type="checkbox" data-text="other" class="btn-calc"/>
                                            <span id="slider">
                                                  <span id="sliderOn">YES</span>
                                                  <span id="sliderOff">NO</span>
                                                  <span id="sliderBlock"></span>
                                            </span>
                                      </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="service-sentence-sec-1">
                        <div class="row app-sentence-1 justify-content-start">
                            <p class="text-justify">Would your app need to take photos or watch videos.</p>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-md-3">
                                <div style="margin:10px 0px 0px 10px" >
                                      <label id="sliderLabel">
                                            <input type="checkbox" data-text="other" class="btn-calc"/>
                                            <span id="slider">
                                                  <span id="sliderOn">YES</span>
                                                  <span id="sliderOff">NO</span>
                                                  <span id="sliderBlock"></span>
                                            </span>
                                      </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="service-sentence-sec-1">
                        <div class="row app-sentence-1 justify-content-start">
                            <p>Does your app require card payments?</p>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-md-3">
                                <div style="margin:10px 0px 0px 10px" >
                                      <label id="sliderLabel">
                                            <input type="checkbox" data-text="other" class="btn-calc"/>
                                            <span id="slider">
                                                  <span id="sliderOn">YES</span>
                                                  <span id="sliderOff">NO</span>
                                                  <span id="sliderBlock"></span>
                                            </span>
                                      </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-sentence-sec-1">
                        <div class="row app-sentence-1 justify-content-start">
                            <p>Will you have a bookings system?</p>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-md-3">
                                <div style="margin:10px 0px 0px 10px" >
                                      <label id="sliderLabel">
                                            <input type="checkbox" data-text="other" class="btn-calc"/>
                                            <span id="slider">
                                                  <span id="sliderOn">YES</span>
                                                  <span id="sliderOff">NO</span>
                                                  <span id="sliderBlock"></span>
                                            </span>
                                      </label>
                                </div>
                            </div>
                        </div>
                    </div>










                    <!-- Custom design or a template? * -->
                    <div class="row justify-content-start">
                        <h3 class="cost-cal-sentence">Custom design or a template? *</h3>
                    </div>

                    <div class="row justify-content-start">
                        <div class="col-md-4">
                            <div class="btn btn-primary cost-cal-btn-5 btn-calc " data-text="custom-design">
                                Custom Design
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="btn btn-primary cost-cal-btn-5 btn-calc" data-text="template">
                                Template
                            </div>
                        </div>
                    </div>


                    <!-- What is the purpose of the website? -->
                    <div class="row justify-content-start">
                        <h3 class="cost-cal-sentence">What is the purpose of the your Project?</h3>
                    </div>

                    <div class="row justify-content-start">
                        <div class="col-md-4">
                            <div class="btn btn-primary cost-cal-purpose-btn btn-calc " data-text="template">
                                Build Trust
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="btn btn-primary cost-cal-purpose-btn btn-calc" data-text="template">
                                Reach Audience
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="btn btn-primary cost-cal-purpose-btn-3 btn-calc" data-text="template">
                                Generates Lead and sell
                            </div>
                        </div>
                    </div>
                    <!-- What is the purpose of the website? ENDDDDDDDDDDDDD -->


                    <!-- Do you need help with branding? * -->
                    <div class="row justify-content-start">
                        <h3 class="cost-cal-sentence">Do you need help with branding? *</h3>
                    </div>

                    <div class="row justify-content-start">
                        <div class="col-md-3">
                            <div style="margin:10px 0px 0px 10px" >
                                  <label id="sliderLabel">
                                        <input type="checkbox" data-text="other" class="btn-calc"/>
                                        <span id="slider">
                                              <span id="sliderOn">YES</span>
                                              <span id="sliderOff">NO</span>
                                              <span id="sliderBlock"></span>
                                        </span>
                                  </label>
                            </div>
                        </div>
                    </div>



                    <!-- Custom design or a template? * ENDDDDDDDDDDDDDDD -->

                    <!-- </form> -->

                </div>




                <div class="col-md-6 extra-margin">
                <div class="cost-section ">

                    <div class="row">
                        <div class="col-md-12 mobileappdev">
                            <p>IOS App Development Cost Estimate</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class=" justify-content-start">
                                <div class="mobile-app-1">
                                    <p>Planning :</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="justify-content-end">
                                <div class="mobile-app-2">
                                    <i class="fa fa-rupee"></i> <span id="planning">00000</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="justify-content-start">
                                <div class="mobile-app-1">
                                    <p>Design :</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="justify-content-end">
                                <div class="mobile-app-2">
                                    <i class="fa fa-rupee"></i> <span id="design">00000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="justify-content-start">
                                <div class="mobile-app-1">
                                    <p>Development :</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="justify-content-end">
                                <div class="mobile-app-2">
                                    <i class="fa fa-rupee"></i> <span id="development">00000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="justify-content-start">
                                <div class="mobile-app-1">
                                    <p>Testing :</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="justify-content-end">
                                <div class="mobile-app-2">
                                    <i class="fa fa-rupee"></i> <span id="testing">00000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <hr>
                    </div>

                    <!-- {% comment %} <div class="row">
                        <div class="col-md-6">
                            <div class="justify-content-start">
                                <div class="mobile-app-1">
                                    <p>Estimated Build Time:</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="justify-content-end">
                                <div class="mobile-app-2">
                                    <p>0 Month</p>
                                </div>
                            </div>
                        </div>
                    </div> {% endcomment %} -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="justify-content-start">
                                <div class="mobile-app-1">
                                    <p>Total Cost :</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="justify-content-end">
                                <div class="mobile-app-2">
                                    <i class="fa fa-rupee"></i> <span id="total">00000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="box">
                            <a class="button modal_show_popup" href="#popup1">Get Instant Quotes</a>
                            <!-- <Button>Get Instant Quotes</Button> -->
                        </div>
                    </div>

                    <div id="popup1" class="overlay">
                        <div class="popup">
                            <h2 class="mb-3"><b>Submit your project with contact details</b></h2>
                            <a class="close" href="#">&times;</a>
                            <form method="POST" action="/addiosdevelop">
                            @csrf
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <input class="form-control" style="text-align: center;" name="apps" type="text"
                                            placeholder="WEB DEVELOPMENT" value="IOS WEB DEVELOPMENT" readonly>
                                        </div>
                                    </div>
                                </div>


                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-6 contact-form">

                                            <div class="form-group">
                                                <!-- <label for="name"></label> -->
                                                <input type="text" required="required" required="required"
                                                class="form-control" name="username" placeholder="Name*">
                                            </div>
                                            <div class="form-group">
                                                <input type="phone" class="form-control" name="phone"
                                                required="required" placeholder="Phone*">
                                            </div>

                                            <!-- <select class="form-control" name="budget">
                                                <option value="Budget">Budget*</option>
                                                <option value="Less then $30000">Less then <i class="fa fa-inr"></i>30000
                                                </option>
                                                <option value="$10000 - $50000"><i class="fa fa-inr"></i>30000 - <i
                                                        class="fa fa-inr"></i>50000
                                                </option>
                                                <option value="$50000 - $100000"><i class="fa fa-inr"></i>50000 - <i
                                                        class="fa fa-inr"></i>100000</option>
                                                <option value="$100000 - $200000"><i class="fa fa-inr"></i>100000 - <i
                                                        class="fa fa-inr"></i>200000</option>
                                                <option value="$200000 and Above"><i class="fa fa-inr"></i>200000 and
                                                    Above</option>
                                            </select> -->

                                            <div class="form-group">
                                                <input type="text" class="form-control" readonly  name="budget" id="budget_show_model" value="" />
                                            </div>

                                        </div>

                                        <div class="col-md-6 contact-form">
                                            <div class="form-group">
                                                <input type="email" required="required" class="form-control"
                                                    name="email" required="required" placeholder="Email*">
                                            </div>

                                            <div class="form-group">
                                                <input type="phone" required="required" class="form-control"
                                                    name="wpnumber" placeholder="#WhatsApp">
                                            </div>

                                            <!-- <div class="form-group">
                                                <input type="file" class="form-control" id="attachment-contact">
                                            </div> -->
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <textarea name="description" class="form-control" id="" cols="100%" rows="5"
                                                placeholder="Brief About the project"></textarea>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <div class="row justify-content-start">
                                                <div class="col-md-2">
                                                    <div class="">
                                                        <button type="submit"
                                                            class="btn btn-primary w-100 font-setting d-flex align-items-center text-uppercase"
                                                            name="submit" id="submit">Submit
                                                            <i class="fa fa-arrow-right ml-auto"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                            </form>
                        </div>
                    </div>



                    {% comment %} <div class="row">
                        <div class="col-md-12 mx-2">
                            <a href="#DownloadPDF">Download free PDF sample cost estimate.</a>
                        </div>
                    </div> {% endcomment %}

                </div>
            </div>  
            </div>
        </div>

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://kit.fontawesome.com/4872f3e6f5.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"crossorigin="anonymous"></script>
    </body>

</html>


<script>
    $(document).ready(() => {

        function data() {
            return {
                'website': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'mobile': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'ios': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'window': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'ecommerce': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'education': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'healthcare': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'hotel': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'restaurants': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'travels': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'banking': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'finance': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'shipping': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'socialnetwork': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },

                'other': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },

                'custom-design': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
                'template': {
                    'planning': 3000,
                    'design': 5000,
                    'development': 10000,
                    'testing': 10000,
                },
            }
        }

        $('.btn-calc').on("click", function (e) {
            let $data = data()
            if ($(this).hasClass('active')) {
                $(this).removeClass('active')

                $.each($data[$(this).data('text')], function (k, v) {
                    $default = $(`#${k}`).html()
                    $default = parseInt($default) - v
                    $(`#${k}`).html($default == 0 ? "00000" : $default)
                })
            } else {
                $(this).addClass('active')
                $.each($data[$(this).data('text')], function (k, v) {
                    $default = $(`#${k}`).html()
                    $default = parseInt($default) + v
                    $(`#${k}`).html($default)
                })
            }
            $buttonActive = $('.btn-calc.active')
            let $total = 0;
            $.each($buttonActive, function (_, buttonactive) {
                $.each($data[$(buttonactive).data('text')], function (_, v) {
                    $total += v
                })
            })

            $('#total').html($total == 0 ? "00000" : $total)
            $('#budget_show_model').attr('value', $total)

        })
    })
</script>