@extends('layouts.master')

@section('title', 'ResetPassword')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="offset-1 col-md-8">
				<div class="card ">
					
					<div class="card-body">
					
						<form method = "POST" action="/resetlink">
							@csrf
							<div class="form-group mb-4">
								<label>Email</label>
								<input type="text" name ="email" class="form-control"  placeholder="Your Email">
							</div>

							<div class="form-group">
								<button class="btn btn-info btn-lg">Send Reset Link</button>
							</div>
						</form>

					</div>

					
				</div>
			</div>
		</div>
	</div>
	

@endsection