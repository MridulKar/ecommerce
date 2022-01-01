@extends('layout')
@section('content')



	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="/customer_login" method="post">
							{{ csrf_field() }}
							<input type="text" placeholder="email or phone"  name="email"  />
							<input type="password" placeholder="Password" name="password" />
							{{session('message')}}
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="/customer_signup" method="post">
							{{ csrf_field() }}
							<input type="text" placeholder="Name" name="name" />
							<input type="text" placeholder="Email Address" name="email"/>
							<input type="password" placeholder="Password" name="password" />
							<input type="text" placeholder="phone" name="phone"/>
							<input type="text" placeholder="address" name="address" />
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	@endsection