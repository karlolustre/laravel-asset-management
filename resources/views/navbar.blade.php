<nav class="navbar navbar-expand-md navbar-light shadow-sm bg-pastel-blue nav-height">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/menu/catalog') }}">
                     <img class="logo-scooter mb-2" src="{{URL::asset('/images/sa3.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth
                    <ul class="navbar-nav mr-auto mt-2">
                         <li class="nav-item"><a class="nav-link" href="{{ url('/admin/catalog_admin')}}"><i class="fas fa-cogs"></i></a></li>
                    </ul>

                    <!-- Middle of navbar -->
                    <ul class="navbar-nav mx-auto mt-2 bg-pastel-blue">

                    @endauth

                            

                    </ul>
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        {{-- My Cart --}}
                        @auth
                        <li class="nav-item"><a class="nav-link" href="{{ url('/menu/catalog')}}"><i class="fas fa-archive"></i>Catalog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/orders')}}"><i class="fas fa-road"></i></i>myRentals</a></li>
                        <li class="nav-item">
                           <a class="nav-link" 
                                href="{{ url('/menu/mycart') }}"> <i class="fas fa-shopping-cart"></i>Cart 
                                @if(Session::has('cart'))
                                    {{ array_sum(Session::get('cart')) }}
                                @endif
                           </a>
                        </li>
                        @endauth
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <i class="fas fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>