@extends('layouts.master')

@section('title', 'ResetPassword')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="offset-1 col-md-8">
				<div class="card ">
					
					<div class="card-body">
					
						<form method = "POST" action="/reset/password">
							@csrf

							<div class="form-group mb-4">
								<label>Email</label>
								<input type="email" name ="email" class="form-control"  placeholder="Please Enter Your Mail">
							</div>

							<div class="form-group mb-4">
								<label>New Password</label>
								<input type="password" name ="password" class="form-control"  placeholder="Your New Password">
							</div>

							<div class="form-group mb-4">
								<label>Confirm Password</label>
								<input type="password" name ="password_confirmation" class="form-control"  placeholder="Confirm Password">
							</div>

							<div class="form-group mb-4">
								<input type="hidden" name ="token" class="form-control"  value="{{$token}}">
							</div>

							<div class="form-group">
								<button class="btn btn-info btn-lg">Reset</button>
							</div>
						</form>

					</div>

					
				</div>
			</div>
		</div>
	</div>
	

@endsection