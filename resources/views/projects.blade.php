@extends('layouts.master')
@section('pre')
	@php
	$title = "Our Projects | Associate Consultants";
	$menu_item = 'projects';
@endphp
@endsection
@section('content')
	<main>
		<section class="intro-single">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-8">
						<div class="title-single-box">
							<h1 class="title-single">Our Projects</h1>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Projects
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section id="project_all">
			<div class="container">
				<div class="row">
					@foreach (App\Project::all() as $project)
						<div class="col-sm-4">
							<div class="project-card">
								<div class="img-box">
									<img src="{{Voyager::image($project->image)}}" alt="{{$project->name}}">
								</div>
								<div class="overlay">
									<h2 class="project-title">{{$project->name}}<h2>
								</div>
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
