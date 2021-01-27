<!DOCTYPE html>
<html lang="lang=" {{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeXsite</title>
    <link rel="icon" href="static/image/Asset36.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Navigation Part -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light custom-navbar topnav fixed-top">
        <a class="navbar-brand" href="#">#codeXsite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarDropdown">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item"> <a class="nav-link" href="/home">&nbsp;Home</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="{% url 'services' %}">&nbsp;Services</a></li>
                <li class="nav-item"> <a class="nav-link" href="#Portfolio">&nbsp;Portfolio</a></li> -->
                <li class="nav-item"> <a class="nav-link" href="/about">&nbsp;About</a> </li>
                <li class="nav-item"> <a class="nav-link" href="/contact">&nbsp;Contact us</a> </li>
            </ul>
        </div>
    </nav>
    <!-- END NAVIGATION -->

    <!-- <div class="show-contact-msg"> -->
    <!-- @if(Session::get('status'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{(Session::get('status'))}}</strong>
        </div>
        @endif -->
    <!-- </div> -->


    <section class="body-color">
        <div class="container mt-5">
            
        <div class="row pt-3">
                @if(Session::get('status'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{(Session::get('status'))}}</strong>
                </div>
                @endif
            </div>

            <div class="row mt-0">
                <div class="col-md-12">
                    <h2 class="contact-header">How can we help you?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="desc_txt">Get all-in-one development solutions and services related to your inquiries.
                        Fill out and send a form. Our Sales<br>
                        Team will contact you promptly. </p>
                </div>
            </div>

            

            <form method="post" action="{{ route('contact.store') }}">

                <!-- CROSS Site Request Forgery Protection -->
                @csrf
                <div class="row">
                    <div class="col-md-6 contact-form">

                        <div class="form-group">
                            <!-- <label for="name"></label> -->
                            <input type="text" required="required" required="required" class="form-control" name="uname" placeholder="Name*">
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" name="phone" required="required" placeholder="Phone*">
                        </div>

                        <select class="form-control" name="budget">
                            <option value="Budget">Budget*</option>
                            <option value="Less then $1000">Less then <i class="fa fa-inr"></i>1000</option>
                            <option value="$1000 - $5000"><i class="fa fa-inr"></i>1000 - <i class="fa fa-inr"></i>5000
                            </option>
                            <option value="$5000 - $10000"><i class="fa fa-inr"></i>5000 - <i class="fa fa-inr"></i>10000</option>
                            <option value="$10000 - $20000"><i class="fa fa-inr"></i>10000 - <i class="fa fa-inr"></i>20000</option>
                            <option value="$20000 and Above"><i class="fa fa-inr"></i>20000 and Above</option>
                        </select>

                    </div>

                    <div class="col-md-6 contact-form">
                        <div class="form-group">
                            <input type="email" required="required" class="form-control" name="email" required="required" placeholder="Email*">
                        </div>

                        <div class="form-group">
                            <input type="phone" required="required" class="form-control" name="wpnumber" placeholder="WhatsApp Number">
                        </div>

                        <!-- <div class="form-group">
                                <input type="file" class="form-control" id="attachment-contact" required="required">
                            </div> -->
                    </div>

                    <div class="col-md-12 mt-3">
                        <textarea name="description" class="form-control" id="" cols="100%" rows="5" placeholder="Brief About the project"></textarea>
                    </div>

                    <div class="col-md-12 mt-4">
                        <div class="row justify-content-start">
                            <div class="col-md-2">
                                <div class="">
                                    <button type="submit" class="btn btn-primary btn-contact-submit font-setting d-flex align-items-center text-uppercase" name="submit" id="submit">Submit
                                        <i class="fa fa-arrow-right ml-auto"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>




    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/4872f3e6f5.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>