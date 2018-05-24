<!doctype html>
<html lang="en">
<head>
    <title>Colorlib Medi+</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets1/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/fonts/flaticon/font/flaticon.css')}}">


    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('assets1/css/style.css')}}">
</head>
<body>

<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-5">
                    <ul class="social list-unstyled">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-7 text-right">
                    <p class="mb-0">
                        <a href="#" class="cta-btn" data-toggle="modal" data-target="#modalAppointment">Make an
                            Appointment</a></p>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="conteiner" style="margin:30px;">
    <div class="row">
        <div class="col-lg-3" style="margin-bottom:10px;">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    {{$user->name}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$user->email}}</li>
                    <li class="list-group-item">{{$user->birth_date}}</li>
                    <li class="list-group-item">{{$user->address}}</li>
                    <li class="list-group-item">{{$user->phone}}</li>
                    <li class="list-group-item">{{$user->blod_type}}</li>
                    <li class="list-group-item">{{$user->sex}}</li>
                    <li class="list-group-item">{{$user->type}}</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @if($user->type=='darivatelj')
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home" aria-selected="true">Potvrdili</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                           aria-controls="profile" aria-selected="false">Odbili</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                           aria-controls="contact" aria-selected="false">Donirali</a>
                    </li>
                @elseif($user->type=='trazitelj')
                    <li class="nav-item">
                        <a class="nav-link active" id="zahtjevi-tab" data-toggle="tab" href="#zahtjevi" role="tab"
                           aria-controls="zahtjevi" aria-selected="true">Potvrdili</a>
                    </li>
                @endif
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @foreach($confirms as $confirm)
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ime pacijenta</th>
                                <th scope="col">Datum rođenja pacijenta</th>
                                <th scope="col">Adresa pacijenta</th>
                                <th scope="col">Broj telefona pacijenta</th>
                                <th scope="col">Krvna grupa pacijenta</th>
                                <th scope="col">Spol pacijenta</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Podnositelj zahtjeva</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{$confirm->claim->id}}</th>
                                <td>{{$confirm->claim->patient_name}}</td>
                                <td>{{$confirm->claim->patient_birth}}</td>
                                <td>{{$confirm->claim->patient_address}}</td>
                                <td>{{$confirm->claim->patient_phone}}</td>
                                <td>{{$confirm->claim->patient_blood}}</td>
                                <td>{{$confirm->claim->patient_sex}}</td>
                                <td>{{$confirm->claim->description}}</td>
                                <td>{{$confirm->claim->user->name}}</td>
                            </tr>
                            </tbody>
                        </table>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @foreach($rejects as $reject)
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ime pacijenta</th>
                                <th scope="col">Datum rođenja pacijenta</th>
                                <th scope="col">Adresa pacijenta</th>
                                <th scope="col">Broj telefona pacijenta</th>
                                <th scope="col">Krvna grupa pacijenta</th>
                                <th scope="col">Spol pacijenta</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Podnositelj zahtjeva</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{$reject->claim->id}}</th>
                                <td>{{$reject->claim->patient_name}}</td>
                                <td>{{$reject->claim->patient_birth}}</td>
                                <td>{{$reject->claim->patient_address}}</td>
                                <td>{{$reject->claim->patient_phone}}</td>
                                <td>{{$reject->claim->patient_blood}}</td>
                                <td>{{$reject->claim->patient_sex}}</td>
                                <td>{{$reject->claim->description}}</td>
                                <td>{{$reject->claim->user->name}}</td>
                            </tr>
                            </tbody>
                        </table>

                    @endforeach
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    @foreach($donates as $donate)
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ime pacijenta</th>
                                <th scope="col">Datum rođenja pacijenta</th>
                                <th scope="col">Adresa pacijenta</th>
                                <th scope="col">Broj telefona pacijenta</th>
                                <th scope="col">Krvna grupa pacijenta</th>
                                <th scope="col">Spol pacijenta</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Podnositelj zahtjeva</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{$donate->claim->id}}</th>
                                <td>{{$donate->claim->patient_name}}</td>
                                <td>{{$donate->claim->patient_birth}}</td>
                                <td>{{$donate->claim->patient_address}}</td>
                                <td>{{$donate->claim->patient_phone}}</td>
                                <td>{{$donate->claim->patient_blood}}</td>
                                <td>{{$donate->claim->patient_sex}}</td>
                                <td>{{$donate->claim->description}}</td>
                                <td>{{$donate->claim->user->name}}</td>
                            </tr>
                            </tbody>
                        </table>

                    @endforeach
                </div>
                <div class="tab-pane fade show active" id="zahtjevi" role="tabpanel" aria-labelledby="zahtjevi-tab">
                    @foreach($claims as $claim)
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ime pacijenta</th>
                                <th scope="col">Datum rođenja pacijenta</th>
                                <th scope="col">Adresa pacijenta</th>
                                <th scope="col">Broj telefona pacijenta</th>
                                <th scope="col">Krvna grupa pacijenta</th>
                                <th scope="col">Spol pacijenta</th>
                                <th scope="col">Opis</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{$claim->id}}</th>
                                <td>{{$claim->patient_name}}</td>
                                <td>{{$claim->patient_birth}}</td>
                                <td>{{$claim->patient_address}}</td>
                                <td>{{$claim->patient_phone}}</td>
                                <td>{{$claim->patient_blood}}</td>
                                <td>{{$claim->patient_sex}}</td>
                                <td>{{$claim->description}}</td>
                            </tr>
                            </tbody>
                        </table>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row mb-5 element-animate">
            <div class="col-md-3 mb-5">
                <h3>Services</h3>
                <ul class="footer-link list-unstyled">
                    <li><a href="#">Find a doctor</a></li>
                    <li><a href="#">Urgent Care</a></li>
                    <li><a href="#">Emergency Care</a></li>
                    <li><a href="#">Procedures &amp; Treatments</a></li>
                    <li><a href="#">Online Services</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <h3>Latest News</h3>
                <ul class="footer-link list-unstyled">
                    <li><a href="#">News &amp; Press Releases</a></li>
                    <li><a href="#">Health Care Professional News</a></li>
                    <li><a href="#">Events &amp; Conferences</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <h3>About</h3>
                <ul class="footer-link list-unstyled">
                    <li><a href="#">About The Hospital</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Accreditations &amp; Awards</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Feedback</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <h3>Location &amp; Contact</h3>
                <p class="mb-5">134 Street Name, City Name Here, United States</p>

                <h4 class="text-uppercase mb-3 h6 text-white">Email</h4>
                <p class="mb-5"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></p>

                <h4 class="text-uppercase mb-3 h6 text-white">Phone</h4>
                <p>+1 24 435 3533</p>

            </div>
        </div>

        <div class="row pt-md-3 element-animate">
            <div class="col-md-12">
                <hr class="border-t">
            </div>
            <div class="col-md-6 col-sm-12 copyright">
                <p>&copy; 2018 Colorlib Medi+. Designed &amp; Developed by <a href="https://colorlib.com/">Colorlib</a>
                </p>
            </div>
            <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->


<!-- Modal -->
<div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="form-group">
                        <label for="appointment_name" class="text-black">Full Name</label>
                        <input type="text" class="form-control" id="appointment_name">
                    </div>
                    <div class="form-group">
                        <label for="appointment_email" class="text-black">Email</label>
                        <input type="text" class="form-control" id="appointment_email">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="appointment_date" class="text-black">Date</label>
                                <input type="text" class="form-control" id="appointment_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="appointment_time" class="text-black">Time</label>
                                <input type="text" class="form-control" id="appointment_time">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="appointment_message" class="text-black">Message</label>
                        <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="{{asset('assets1/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets1/js/popper.min.js')}}"></script>
<script src="{{asset('assets1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets1/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets1/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets1/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('assets1/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets1/js/main.js')}}"></script>
</body>
</html>