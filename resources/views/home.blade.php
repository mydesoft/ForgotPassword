@extends('layouts.master')

@section('title', 'home')

@section('content')
		
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-1">
				{{-- @include('includes.message') --}}
				<div class="card border-info mb-3">
					<div class="card-header" style="background-color:#17a2b8;">
						<h4 class="text-white">Dashboard</h4>
					</div>

					<div class="card-body">
						You are logged in!
					</div>
				</div>
			</div>
		</div>
	</div>
	

@endsection