<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow pink" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Navbar start -->
<div class="container-fluid nav-bar">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-4">
            <a href="{{ url('/')}}" class="navbar-brand">
                <h1 class="pink fw-bold mb-0">Althia<span class="text-dark">Event</span> </h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                    <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
                    <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>

                    @if(Auth::check()) <!-- Check if the user is authenticated -->
                        <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        @if(Auth::user()->role_as === 1) <!-- Check if the user has the 'admin' role -->
                            <a href="{{url('/admin/dashboard')}}" class="nav-item nav-link">Admin Dashboard</a>
                        @endif

                    @else
                        <a href="{{ url('/login') }}" class="nav-item nav-link">Login</a>
                        <a href="{{ url('/register') }}" class="nav-item nav-link">Register</a>
                    @endif


                </div>
                <a href="{{url('/add-booking')}}" class="btn bg-pink py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
