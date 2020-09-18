@extends('layouts.auth')

@section('content')
    <!--begin::Forgot-->
    <div class="login-form login-forgot py-11">
        <!--begin::Form-->
        <form class="form" action="{{ route('password.email') }}">
            @csrf
            <!--begin::Title-->
            <div class="text-center pb-8">
                <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Forgotten Password ?</h2>
                <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
            </div>
            <!--end::Title-->
            <!--begin::Form group-->
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!--end::Form group-->
            <!--begin::Form group-->
            <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Send Password Reset Link</button>
                {{-- <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Cancel</button> --}}
            </div>
            <!--end::Form group-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Forgot-->

@endsection