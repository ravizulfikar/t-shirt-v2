@extends('layouts.auth')

@section('content')
	<!--begin::Signin-->
	<div class="login-form login-signin py-11">
		<!--begin::Form-->
		<form class="form" method="POST" action="{{ route('login') }}">
			@csrf
			<!--begin::Title-->
			<div class="text-center pb-8">
				<h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h2>
				<span class="text-muted font-weight-bold font-size-h4">Or
				<a href="{{ route('register') }}" class="text-primary font-weight-bolder">Create An Account</a></span>
			</div>
			<!--end::Title-->
			<!--begin::Form group-->
			<div class="form-group">
				<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
				<input id="email" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg @error('email') is-invalid @enderror " type="email" name="email" required autocomplete="email" />
				@error('email')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
				
			</div>
			<!--end::Form group-->
			<!--begin::Form group-->
			<div class="form-group">
				<div class="d-flex justify-content-between mt-n5">
					<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
					<a href="{{ route('password.request') }}" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Forgot Password ?</a>
				</div>
				<input id="password" class="form-control @error('password') is-invalid @enderror form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password" required autocomplete="current-password" />
				@error('password')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>
			
			<div class="form-group">
				<label class="checkbox mb-0">
					<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>Remember Me &nbsp;
					<span></span>
				</label>
			</div>

			{{-- <div class="form-group row">
				<div class="col-md-6 offset-md-4">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

						<label class="form-check-label" for="remember">
							{{ __('Remember Me') }}
						</label>
					</div>
				</div>
			</div> --}}
			
			<!--end::Form group-->
			<!--begin::Action-->
			<div class="text-center pt-2">
				{{-- id="kt_login_signin_submit"  --}}
				<button type="submit" class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">Sign In</button>
			</div>
			<!--end::Action-->
		</form>
		<!--end::Form-->
	</div>
	<!--end::Signin-->
@endsection