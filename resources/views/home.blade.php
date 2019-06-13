@extends('layouts.master')
@section('pre')
	@php
	$title = "Associate Consultants";
	$menu_item = 'home';
@endphp
@endsection
@section('content')
	<main>
		<div class="intro intro-carousel">
			<div id="carousel" class="owl-carousel owl-theme">
				@foreach (App\Slider::all() as $slider)
					<div class="carousel-item-a intro-item bg-image" style="background-image: url('{{Voyager::image($slider->image)}}')">
						<div class="overlay overlay-a"></div>
						<div class="intro-content display-table">
							<div class="table-cell">
								<div class="container">
									<div class="row">
										<div class="col-lg-8">
											<div class="intro-body">
												<h1 class="intro-title mb-4">{{$slider->name}}</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
		<section id="about_us">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<img src="{{url('/img/logo.png')}}" alt="">
					</div>
					<div class="col-sm-6">
						<div class="title-box-d">
							<h3 class="title-d">About Us</h3>
						</div>
						<div class="property-description">
							<p class="description color-text-a">
								Associate Consultants is an answer for all structural engineering & design demands. We have the capability of handling all type of project, be it a dream Bungalow or a huge township Projects, our services are always provided in a timely fashion with unpatrolled solutions. We take an enthusiastic initiative in all of our projects & strive for nothing less than excellence.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="our_services">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title-box-d">
							<h3 class="title-d">Our Services</h3>
						</div>
					</div>
					@php
					$services = [
						array('name' => 'Structural Engineering', 'image' => 'structural.svg'),
						array('name' => 'PMC', 'image' => 'pmc.svg'),
						array('name' => 'Township Planning', 'image' => 'township.svg'),
						array('name' => 'Civil Engineering', 'image' => 'civil.svg'),
						array('name' => 'Infrastrucural Engineering', 'image' => 'infrastrucural.svg'),
						array('name' => 'Construction Engineering', 'image' => 'construction.svg'),
						array('name' => 'Enviormental Engineering', 'image' => 'enviormental.svg'),
						array('name' => 'Statutory Documentation', 'image' => 'statutory.svg'),
						array('name' => 'Reinforcement Detailing and Drawings', 'image' => 'reinforcement_detailing.svg'),
						array('name' => 'Water Management', 'image' => 'water_management.svg'),
						array('name' => 'Quantity Surveying', 'image' => 'quantity_surveying.svg'),
						array('name' => 'Geotechnical', 'image' => 'geotechnical.svg'),
					]
					@endphp
				</div>
				<div class="row">
					@foreach ($services as $service)
						<div class="col-sm-3">
							<div class="service">
								<div class="icon">
									<img src="/img/services/{{$service['image']}}" alt="">
								</div>
								<h4 class="service-text">{{$service['name']}}</h4>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section>
		<section id="our_strengths">
			<div class="overlay overlay-b"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center">
							<div class="title-box">
								<h2 class="title-a">Our Strengths</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					@php
					$strengths = [
						array('name'=>'Years Of Experience', 'number'=>'45', 'image'=>'exp.svg'),
						array('name'=>'Satisfying Clients', 'number'=>'260', 'image'=>'clients.svg'),
						array('name'=>'Number of Projects', 'number'=>'520', 'image'=>'projects.svg'),
					];
					@endphp
					@foreach ($strengths as $strength)
						<div class="col-sm-4">
							<div class="counter">
								<img src="/img/{{$strength['image']}}" alt="" class="counter-image">
								<p class="counter-number">{{$strength['number']}}</p>
								<h4 class="counter-text">{{$strength['name']}}</h4>
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
