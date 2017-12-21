<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('app/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/style.css') }}">
    <link href="{{ asset('app/css/carousel.css') }}" rel="stylesheet">
    <title>Online Pharmacy</title>
</head>

<body>
    <div class="container">
        <!-- HEADING SECTION -->
        <section id="heading-section" class="px-5 py-2">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('app/img/pharmacy.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <div class="input-group mt-4">
                        <input type="text" class="form-control" placeholder="Search for medicine" aria-describedby="basic-addon2">
                        <input type="button" value="SEARCH" class="btn btn-primary  mr-4">


                        <button type="button" class="btn btn-secondary mr-4" data-toggle="modal" data-target="#myModal" data-backdrop="false">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;
                            <span>({{ Cart::content()->count() }})</span>
                            Shopping Cart
                        </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title align-center">{{ Cart::total() }} Taka</h4>
          <button type="button" class="close btn btn-xs btn-danger" data-dismiss="modal">&times;</button>
        </div>
        {{-- <div class="modal-body">
          <p>Some text in the modal.</p>
        </div> --}}

        <div class="text-center">
            <a href="/cart">
                <div class="btn btn-medium btn-primary">
                    <span class="text">View cart</span>
                </div>
            </a>
        </div>
        <hr>
      </div>

    </div>
  </div>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"> </i> &nbsp;&nbsp;User Account
                            </button>
                            @if (Auth::check())
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('user.logout') }}">
                                        <i class="fa fa-user-times" aria-hidden="true"> </i>Logout</a>
                                    </div>
                            @else
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('user.signup') }}">
                                        <i class="fa fa-user-plus" aria-hidden="true"> </i>Signup/Login</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NAVIGATION SECTION -->
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse bg-faded mb-3">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">HOME </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="madicines.html">MEDICINES</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="topmedicine.html">TOP MEDICINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.html">CART</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- MEDICINE SECTION -->
        <div class="container">
            @yield('content')
        </div>
       <!-- FOOTER SECTION -->
{{-- <footer id="main-footer" class="bg-inverse fixed-bottom">
    <div class="row">
        <div class="col text-center">
            <div class="py-3">
                <h1 class="h3">Online Pharmacy</h1>
                <p>Copyright &copy; 2017</p>
            </div>
        </div>
    </div>
</footer> --}}
</div>

    <script src="{{ asset('app/js/jquery.min.js')}}"></script>
    <script src="{{ asset('app/js/tether.min.js')}}"></script>
    <script src="{{ asset('app/js/bootstrap.min.js')}}"></script>
</body>

</html>
