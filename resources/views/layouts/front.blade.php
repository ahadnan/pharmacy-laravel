<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('app/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('app/toastr/toastr.min.css') }}">
    <title>Care Pharmacy</title>
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

                        <form class="navbar-form" action="{{ route('search') }}" method="get" role="search">
                        {{-- <form class="navbar-form" action="{{ url('/search') }}" method="get" role="search"> --}}
                            {{ csrf_field() }}
                            <div class="input-group add-on">
                                <input type="text" class="form-control" name="searchItem" id="searchItem" placeholder="Search for medicine" aria-describedby="basic-addon2">

                                <div class="input-group-btn">
                                    <button class="btn btn-default mr-4" type="submit"><i class="fa fa-search"></i>Search</button>
                                </div>
                            </div>
                        </form>

                        <button type="button" class="btn btn-secondary mr-4" data-toggle="modal" data-target="#myModal" data-backdrop="false">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;
                            <small><span>({{ Cart::content()->count() }})</span></small>
                            Cart
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-sm">

                            <!-- Modal content-->
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title text-center">{{ Cart::total() }} Taka</h4>
                                    <button type="button" class="close btn btn-xs btn-danger" data-dismiss="modal">&times;</button>
                                </div>
                                <br>
                                @if (Cart::content()->count() == 0)
                                    <div class="modal-body">
                                        <h5 class="text-center">Nothing!! Go Buy Someting</h5>
                                    </div>
                                    <br>
                                    @else
                                        <h5 class="text-center">You Have {{ Cart::content()->count() }} Items To Buy</h5>
                                @endif
                                <br>
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
                                    <a class="dropdown-item" href="{{ route('profile.orders') }}">
                                        <i class="fa fa-user-circle" aria-hidden="true"> </i> Your Order</a>
                                    <a class="dropdown-item" href="{{ route('user.logout') }}">
                                        <i class="fa fa-user-times" aria-hidden="true"> </i> Logout</a>
                                </div>
                            @else
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('user.signup') }}">
                                        <i class="fa fa-user-plus" aria-hidden="true"> </i> Signup/Login</a>
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
                        <a class="nav-link" href="{{ route('index') }}">HOME </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('upload') }}">UPLOAD PRESCRIPTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('requesting') }}">REQUESTING MEDICINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- MEDICINE SECTION -->
        <div class="container">
            @yield('content')
        </div>
        <br><br><br><br>
       <!-- FOOTER SECTION -->

</div>
    {{-- <footer id="main-footer" class="bg-inverse">
        <div class="row">
            <div class="col text-center">
                <div class="py-3">
                    <h1 class="h3">Online Pharmacy</h1>
                    <p>Copyright &copy; 2017</p>
                </div>
            </div>
        </div>
    </footer> --}}
    <footer id="main-footer" class="bg-inverse ">

            <div class="col text-center">
                <div class=" container-fluid py-3">
                    <h1 class="h3">Care Pharmacy</h1>
                    <p>Copyright &copy; 2017</p>
                </div>
            </div>

    </footer>

    <script src="{{ asset('app/js/jquery.min.js')}}"></script>
    <script src="{{ asset('app/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('app/js/tether.min.js')}}"></script>
    <script src="{{ asset('app/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('app/toastr/toastr.min.js')}}"></script>

    <script>
        @if (Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif

        @if (Session::has('info'))
            toastr.info('{{ Session::get('info') }}');
        @endif


        @php
            $pros = DB::table('products')->get()
        @endphp

        $(function(){
            var source = [
                    @foreach ($pros as $pro)
                    {
                        value:"{{ url('/')}}/product/{{ $pro->id }}",
                        label:"{{ $pro->name }}"
                    },
                    @endforeach
            ];

            $("#searchItem").autocomplete({
                source: source,
                autofocus: true,
                select: function(event,ui){
                    window.location.href = ui.item.value;
                }
            });
        });


    // $( function() {
    //   $( "#searchItem" ).autocomplete({
    //     source: 'http://pharmacy.dev/search',
    //     autofocus: true
    //   });
    // } );
    </script>
</body>

</html>
