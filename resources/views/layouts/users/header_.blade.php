<style>
    /* Dropdown Button */
.dropbtn {
  background-color: #fff;
  /* color: white; */
  /* padding: 16px; */
  /* font-size: 16px; */
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
/* .dropdown:hover .dropbtn {background-color: #3e8e41;} */
</style>

<div class="search-wrap">
    <div class="container">
      <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
      <form action="#" method="post">
        <input type="text" class="form-control" placeholder="Search...">
      </form>  
    </div>
  </div>

  <div class="container">
    <div class="d-flex align-items-center justify-content-between">
      <div class="logo">
        <div class="site-logo">
          <a href="{{route('beranda')}}" class="js-logo-clone">KAOSAN</a>
        </div>
      </div>
      <div class="main-nav d-none d-lg-block">
        <nav class="site-navigation text-right text-md-center" role="navigation">
          <ul class="site-menu js-clone-nav d-none d-lg-block">
            <li class="active"> 

              <li><a href="{{route('beranda')}}">Home</a></li>
            
              <li><a href="{{route('products')}}">Product</a></li>
              <li><a href="{{route('costums')}}">Custom Design</a></li>
              {{-- <li><a href="contact.html">Contact</a></li>  --}}
          </ul>
        </nav>
      </div>
      <div class="icons">
        @guest
            <a href="{{ route('login') }}" class="icons-btn d-inline-block">
                <span class="icon-sign-in"></span>
            </a>
        @else
            {{-- <a href="#" class="icons-btn d-inline-block">
                <b> Halo, {{ Auth::user()->name }} </b>
            </a>  --}}
            <div class="dropdown">
                {{-- <button class="dropbtn">Dropdown</button> --}}
                <a href="#" class="dropbtn">
                    <b> Halo, {{ Auth::user()->name }} </b>
                </a>
                <div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div>
       
        @endguest
        {{-- <a href="{{ route('login') }}" class="icons-btn d-inline-block">
          <span class="icon-sign-in"></span>
        </a> --}}
        <a href="#" class="icons-btn d-inline-block js-search-open">
          <span class="icon-search"></span>
        </a>
        <a href="cart.html" class="icons-btn d-inline-block bag">
          <span class="icon-shopping-bag"></span>
          <span class="number">1</span>
        </a>
        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none">
          <span class="icon-menu"></span>
        </a>
      </div>
    </div>
  </div>
</div>