@extends('layouts.master')
@section('pre')
@php
$title = "About Us | Associate Consultants";
$menu_item = 'about';
$slides = [
    "slide1.jpeg",
    "slide2.jpeg",
    "slide3.jpeg",
    "slide4.jpeg",
    "slide5.jpeg",
]
@endphp
@endsection
@section('content')
<main>
    <div class="intro intro-carousel">
        <div id="carousel" class="owl-carousel owl-theme">
            @foreach ($slides  as $slide)
            <div class="carousel-item-a intro-item bg-image" style="background-image: url('/img/about/{{$slide}}')">
                <div class="overlay overlay-a"></div>
            </div>
            @endforeach
        </div>
    </div>
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">About Associate Consultants</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                About
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section id="aboutus-full">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/img/about1.jpg" alt="About Us" class="wow fadeInLeft">
                </div>
                <div class="col-sm-6">
                    <div class="title-box-d">
                        <h1 class="title-d">About Us</h1>
                    </div>
                    <ul>
                        <li>Associated Consultants is leading structural consultancy firm started by Mr. Vikas Gokhale in 1983. </li>
                        <li>Associated consultants With more than 33 years of experience in the construction industry we have grown into a national multi-disciplinary organization. Successfully we have completed more than 2000 jobs including residential, commercial, multiplexes, industrial buildings with reputed Builders and Architects.</li>
                        <li>We primarily focus on all structural design solutions and building design services, including concrete and steel detailing services for all types of high rise and low rise residential and commercial buildings. We are well known for perfection and provide economic and efficient solutions which are safe and conform to accepted standards.</li>
                        <li>Our highly skilled team comprises of professional structural engineers and designers, familiar with international steel and concrete design and detailing standards and codes. Due to the versatility of our engineering teams we are able to offer a wide range of services.</li>
                        <li>Our team tailors client specific solutions, using cutting edge technology and innovative methods which can lead to cost and programme savings for our clients.</li>
                        <li>Our strength is our Client satisfaction. We strive to exceed client requirements by providing them with unique and valued solution. We utilize our experience and awareness of market design trends to encourage extremely effective designs and provide guidance and foresight to our clients.</li>
                    </ul>
                </div>
            </div>
            <div class="row section-t4">
                <div class="col-sm-6">
                    <div class="title-box-d">
                        <h1 class="title-d">Our Mission</h1>
                    </div>
                    <p>Associate consultants are dedicated to using a progressive design and team oriented approach to provide structural engineering services in ethical manner that contribute to the success of our clients, employees and community.</p>
                </div>
                <div class="col-sm-6">
                    <img src="/img/about2.jpg" alt="Our Mission" class="wow fadeInRight">
                </div>
            </div>
            <div class="row section-t4">
                <div class="col-sm-6">
                    <img src="/img/about3.jpg" alt="Our Vision" class="wow fadeInLeft">
                </div>
                <div class="col-sm-6">
                    <div class="title-box-d">
                        <h1 class="title-d">Our Vision</h1>
                    </div>
                    <ul>
                        <li>Associate consultants are committed to bringing the best structural design experience to our valued clients around the world through its innovative solution offerings.</li>
                        <li>We strive to extend our vast experience and positive reputation in structural engineering.</li>
                        <li>Through our professional expertise in structural engineering and design, we guide and support our clients so that you can make a difference in our world.</li>
                        <li>We work tirelessly to ensure that our projects are mutually successful for all and endeavour to forge relationships that stand the test of time.</li>
                        <li>We work for our clients to give innovative solution in the safer, faster, cleaner and more economically than ever before.</li>
                    </ul>
                </div>
            </div>
            <div class="row section-t4">
                <div class="col-sm-6">
                    <div class="title-box-d">
                        <h1 class="title-d">Our Values</h1>
                    </div>
                    <ul>
                        <li>Quality Service</li>
                        <li>Proactive Communication</li>
                        <li>Teamwork</li>
                        <li>Unwavering Integrity</li>
                        <li>Progressive Approach</li>
                        <li>Being and Developing Leaders</li>
                        <li>Retaining and Recruiting High-Quality Personnel</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <img src="/img/about4.jpg" alt="Our Vision" class="wow fadeInRight">
                </div>
            </div>
            <div class="row section-t4">
                <div class="col-sm-12">
                    <div class="title-box-d">
                        <h1 class="title-d">Our Management</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="/img/vikas_gokhale.jpg" alt="Vikas Gokhale" class="wow fadeInLeft">
                </div>
                <div class="col-sm-6">
                    <div class="section-t3">
                        <h3>Mr. Vikas V. Gokhale</h3>
                        <h3><small>Principal Consultant</small></h3>
                        <ul>
                            <li>Graduated from VJTI in 1979, stood 1st in the Bombay University in “Structural Analysis & Design”.</li>
                            <li>He is involved actively in many seminars giving lectures on Seismic Design of Structures, Project Management Consultancy, etc.</li>
                            <li>He is also involved in restoration of dilapidated buildings.</li>
                            <li>Apart from the academic career, he is attached with many social, spiritual & religious organizations.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row section-t4">
                @php
                $peoples = [
                array(
                'name' => 'Mr. Rohit Varma',
                'post' => 'Associate',
                'desc' => 'Graduated from Mumbai University with design of Prestressed Structures. Currently working as Associate.
                Has vast experience in designing multistoried buildings, commercial buildings including hospitals, theatres, colleges, industrial structures etc. Very well conversant with computer aided design using ETABS & STAAD.',
                'image' => 'rohit_varma.jpg',
                ),
                array(
                'name' => 'Mr. Umesh Joshi',
                'post' => 'Associate',
                'desc' => 'Graduated from Mumbai University and Post Graduated from Pune university. Has been involved in Design
                and co-ordination of residential, commercial projects, High Rise Structures, etc.',
                'image' => 'umesh_joshi.jpg',
                ),
                array(
                'name' => 'Mr. Mayur Patil',
                'post' => 'Associate',
                'desc' => 'Senior Engineer, Graduated from Pune University and Post Graduate from NIT Surat with honors .
                Has vast experience in analysis and design of High-Rises upto 70 storied luxury skyscrapers.',
                'image' => 'mayur_patil.jpg',
                )
                ];
                $inc = 1;
                @endphp
                @foreach ($peoples as $people)
                @php
                $inc++;
                @endphp
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="{{$inc*300}}">
                    <div class="card-box-d">
                        <div class="card-img-d">
                            <img src="img/{{$people['image']}}" alt="{{$people['name']}}" class="img-d img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                            <div class="card-header-d">
                                <div class="card-title-d align-self-center">
                                    <h3 class="title-d" style="color: #FFF;">
                                        {{$people['name']}}
                                        <br><small>{{$people['post']}}</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body-d">
                                <p class="content-d" style="color: #FFF;">
                                    {{$people['desc']}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center" style="padding-top:10px;">
                        <h3>
                            {{$people['name']}}
                            <br><small>{{$people['post']}}</small>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
@section('post')
@endsection
