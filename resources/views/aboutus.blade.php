@extends('layouts.master')
@section('pre')
	@php
	$title = "About Us | Associate Consultants";
	$menu_item = 'about';
@endphp
@endsection
@section('content')
	<main>
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
						<img src="/img/about_us.jpg" alt="About Us">
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
			</div>
		</section>
	</main>
@endsection
@section('post')
@endsection
