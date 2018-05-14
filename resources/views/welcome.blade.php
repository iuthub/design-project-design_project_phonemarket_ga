@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Zebo market</title>
		<!-- <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}"> -->
		<link rel="stylesheet" href="{{ url('css/style.css') }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">
			<!-- Landing picture row -->
			<div class="row">
				
				<div class="col-md-9">
					<div class="card mb-8 box-shadow">
						<img class="card-img-top" src="{{ url('images/landing_page_picture.png') }}" alt="landing_page_picture">
					</div>
				</div>
				<div class="col-md-3">
					<div class="card mb-4 box-shadow">
						<img class="card-img-top" src="{{ url('images/galaxy-s9.jpg') }}" alt="landing_page_picture">
					</div>
				</div>
			</div>

			<h1 style="color: blue;">List of phones</h1>
			<div class="col-md-9">
				@foreach($phones->all() as $phone)
				<?php
				$url = '../storage/upload/' . $phone->photo;
				?>
				<div class="col-md-4" style="float: left; display: inline; margin-top: 20px;">
					<div class="card mb-8 box-shadow">
						<img class="card-img-top" src="{{ url($url) }}" alt="Card image cap">
						<div class="card-body">
							<h6 style="text-align: end;">{{ $phone->name }} <span style="color: green; margin-left: 10px"><b>${{ $phone->price }}<b></span> </h6>
							<p style="text-align: end; font-size: 12px">Room: {{ $phone->room_num }}</p>
							<hr>
							<div class="d-flex justify-content-between align-items-center">
								<p>{{ $phone->description }}</p>
							</div>
						</div>
					</div>
				</div>	
				@endforeach
			</div>
		
		</div>
</body>
</html>
@endsection