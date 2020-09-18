@extends('layouts.users.users')

@section('content')
    
<div class="site-blocks-cover" data-aos="fade">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto order-md-2 align-self-start">
        <div class="site-block-cover-content">
        <h2 class="sub-title">Create your imagination with</h2>
        <h1>Your Design</h1>
        <p><a href="Custom.html" class="btn btn-black rounded-0">Design Now</a></p>
        </div>
      </div>
      <div class="col-md-6 order-1 align-self-end">
        <img src="{{asset('extension/images/model_3.jpeg')}}" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>


@include('layouts.users.populer_')

@include('layouts.users.most_')


<div class="site-blocks-cover inner-page py-5" data-aos="fade">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto order-md-2 align-self-start">
        <div class="site-block-cover-content">
        <h2 class="sub-title">#New Summer Collection 2019</h2>
        <h1>New Shoes</h1>
        <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
        </div>
      </div>
      <div class="col-md-6 order-1 align-self-end">
        <img src="{{asset('extension/images/model_6.png')}}" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>

@endsection