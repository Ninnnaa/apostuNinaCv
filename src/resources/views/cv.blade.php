<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nina Apostu</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar"></div>
    </div>
</div>
<!-- ./Preloader -->

<!-- header -->
<header class="navbar-fixed-top">
    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>
<!-- ./header -->

<!-- home -->
<div class="section" id="home" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="disply-table">
            <div class="table-cell" data-aos="fade-up" data-aos-delay="0">
                <h4>{{$generalData->first_name}} {{$generalData->last_name}}</h4>
                <h1>{{$generalData->current_position}}</h1>
            </div>
        </div>
    </div>
</div>
<!-- ./home -->

<!-- about -->
<div class="section" id="about">
    <div class="container">
        <div class="col-md-6" data-aos="fade-up">
            <h4>01</h4>
            <h1 class="size-50">Know <br /> About me</h1>
            <div class="h-50"></div>
            <p>{{$generalData->description}}</p>
            <div class="h-50"></div> <img src="img/signature.png" width="230" alt="" />
            <div class="h-50"></div>
        </div>
        <div class="col-md-6 about-img-div">
            <div class="about-border" data-aos="fade-up" data-aos-delay=".5"></div>
            <img src="img/about-img.jpg" width="400" class="img-responsive" alt="" align="right" data-aos="fade-right" data-aos-delay="0" />
        </div>
    </div>
</div>
<!-- ./about -->

<!-- experience  -->
<div class="section" id="experience">
    <div class="container">
        <div class="col-md-12">
            <h4>02</h4>
            <h1 class="size-50">My <br /> Experience</h1>
            <div class="h-50"></div>
        </div>
        <div class="col-md-12">
            <ul class="timeline">
                @foreach ($experiences as $experience)
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".2">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">{{date('d/m/Y', strtotime($experience->start_date))}} - {{date('d/m/Y', strtotime($experience->end_date))}}</p>
                            <h3>{{ $experience->job_title }}</h3>
                            <h4>{{ $experience->company_name }}</h4>
                            <p>{{$experience->job_description}}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- ./experience -->

<!-- skills -->
<div class="section" id="skills">

    <div class="container">
        <div class="col-md-12">
            <h4>03</h4>
            <h1 class="size-50">My <br /> Skills</h1>
            <div class="h-50"></div>
        </div>
        <div class="col-md-12 d-flex flex-wrap">
            @foreach ($skills as $skill)
                <p class="timeline-event-thumbnail ml-10" style="margin:4%">{{$skill->skill_title}}</p>
            @endforeach
        </div>
    </div>

</div>
<!-- ./skills -->

<!-- contact -->
<div class="section" id="contact">
    <div class="container">
        <div class="col-md-4">
            <h4>04</h4>
            <h1 class="size-50">Contact Me</h1>
            <div class="h-50"></div>
            <h3>Phone Number</h3>
            <p>+{{$generalData->phone}}</p>
            <h3>Location</h3>
            <p>{{$generalData->current_location}}</p>
            <h3>Email</h3>
            <p>{{$generalData->email}}</p>

            <div class="clearfix"></div>
            <div class="h-50"></div>
        </div>
        <div class="col-md-4" data-aos="fade-up">
            <img src="img/contactme.png" width="630" alt="" />
        </div>
    </div>
</div>
<!-- ./contact -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!--  plugins  -->
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/aos.js"></script>

<!--  main script  -->
<script src="js/custom.js"></script>
</body>

</html>
