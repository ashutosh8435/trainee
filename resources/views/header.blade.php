<div class="header_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
                </div>
                <div class="col-md-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="/">HOME</a></li>                                                    
                            @guest
                            <li >
                                <a  href="{{ url('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li >
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                           
                       
                            <li> <a href="{{ url('about') }}">About</a></li>
                            <li><a href="{{ url('price') }}">Price</a></li>
                            <li><a href="{{ url('gym') }}">gym</a></li>
                            <li><a href="{{ url('contact') }}">CONTACT US</a></li>
                           <li> <a   href="/" > USER:
                                    {{ Auth::user()->name }}
                                </a></li>
                            <!-- <li><a href="#"><img src="images/search-icon.png"></a></li> -->
                            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="/">Home</a>
                  <a href="{{ url('gymadmin2') }}">gym admin</a>
                  <a href="{{ url('priceadmin') }}">Price admin</a>
                  <a href="blog">Blog admin</a>
                  <a href="category">Category admin</a>
                  
                
                               

                                <div  aria-labelledby="navbarDropdown">
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            
                  <!-- <a href="{{url('auth/login')}}">LOGIN</a>
                  <a href="{{'auth/registr'}}">REGISTER</a> -->
                </div>
                </div>
                <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/toggle.png" class="toggle_menu"></span>
                </div>  
                </li>
                @endguest
                        </ul>
                    </div>
            </div>
        </div>
    </div>