@extends('layouts.master')
@section('pre')
	@php
	$title = "Services | Associate Consultants";
	$menu_item = 'services';
@endphp
@endsection
@section('content')
	<main>
		<section class="intro-single">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-8">
						<div class="title-single-box">
							<h1 class="title-single">Our Services</h1>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Services
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section id="our_services">
			<div class="container">
				<div class="row">
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
	</main>
@endsection
@section('post')
@endsection
