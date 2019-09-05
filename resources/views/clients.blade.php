@extends('layouts.master')
@section('pre')
	@php
	$title = "Clients | Associate Consultants";
	$menu_item = 'clients';
@endphp
@endsection
@section('content')
	<main>
		<section class="intro-single">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-8">
						<div class="title-single-box">
							<h1 class="title-single">Our Clients</h1>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Clients
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section id="clients">
			<div class="container">
				<div class="row">
					@foreach (App\Client::all() as $client)
						<div class="col-sm-4">
							<div class="client">
								<img src="{{Voyager::image($client->image)}}"/>
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
