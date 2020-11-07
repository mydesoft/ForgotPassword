@extends('layouts.master')

@section('title', 'Login')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="offset-1 col-md-8">
				<div class="card border-info mb-3">
					<div class="card-header" style="background-color:#17a2b8;">
						<h4 class="text-white">Login Here</h4>
					</div>

					<div class="card-body">
						<form method = "POST" action="{{route('user.login')}}">
							{{csrf_field()}}
							<div class="form-group">
								<label for="email"> <i class="fa fa-user-circle"></i> Email</label>
								<input type="text" name="email" class="form-control" required>
							</div>

							<div class="form-group">
								<label for="password"><i class="fa fa-pencil-square"></i> Password</label>
								<input type="password" name="password" class="form-control" required>
							</div>

							
							<div class="row">
								<div class="col-md-4 offset-4">
									<div class="form-group">
								       <button class="btn btn-info btn-lg"> <i class="fa fa-sign-in"></i> Login</button>
							        </div>
								</div>

								<p><a href="/forgotpassword">Forgot Password?</a></p>
							</div>
							

							

						</form>

					</div>

					
				</div>
			</div>
		</div>
	</div>
	

@endsection