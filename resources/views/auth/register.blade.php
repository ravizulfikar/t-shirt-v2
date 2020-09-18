@extends('layouts.auth')

@section('content')
	<!--begin::Signup-->
	<div class="login-form login-signup pt-11">
		<!--begin::Form-->
		<form class="form" method="POST" action="{{ route('register') }}">
			@csrf
			<!--begin::Title-->
			<div class="text-center pb-8">
				<h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign Up</h2>
				<p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p>
			</div>
			<!--end::Title-->
			<!--begin::Form group-->
			<div class="form-group">
				<input id="name" name="name" class="form-control @error('name') is-invalid @enderror form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="Fullname" autocomplete="off" required/>
				@error('name')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>
			<!--end::Form group-->
			<!--begin::Form group-->
			<div class="form-group">
				<input id="email" class="form-control @error('email') is-invalid @enderror form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" required/>
				@error('email')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>
			<!--end::Form group-->
			<!--begin::Form group-->
			<div class="form-group">
				<input id="password" class="form-control @error('password') is-invalid @enderror form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Password" name="password" required autocomplete="new-password" />
				@error('password')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>
			<!--end::Form group-->
			<!--begin::Form group-->
			<div class="form-group">
				<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Confirm password" name="password_confirmation" id="password-confirm" required autocomplete="new-password" />
			</div>
			<!--end::Form group-->
			<!--begin::Form group-->
			<div class="form-group">
				<label class="checkbox mb-0">
				<input type="checkbox" name="agree" required/>I Agree the
				<a href="#">terms and conditions</a>.
				<span></span></label>
			</div>
			<!--end::Form group-->
			<!--begin::Form group-->
			<div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
				<button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Sign Up</button>
				{{-- <button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Cancel</button> --}}
			</div>
			<!--end::Form group-->
		</form>
		<!--end::Form-->
	</div>
	<!--end::Signup-->
@endsection