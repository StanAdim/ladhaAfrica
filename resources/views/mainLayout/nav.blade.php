<div class="navBar">
  <div class="in-navBar">
    <div class="nav-left">
      <div class="nav-logo">
        <div class="logo"><a href="{{route('welcome')}}">Ladha Africa</a></div>
      </div>
    </div>
    <div class="nav-right">
            <div class="explore">
              <div class="explore-title" onclick="showExplore()"><span>Explore</span></div>
              <div class="explore-menu">
                <ul>
                  <li><a href="#">Life Style</a></li>
                  <li><a href="#">Wedding Celemony</a></li>
                  <li><a href="#">Anivesary</a></li>
                  <li><a href="#">Kitchen Party</a></li>
                  <li><a href="#">Birthdays</a></li>
                  <li><a href="#">Send Off Party</a></li>
                </ul>
              </div>
            </div>
            <div class="advertise">
              <div class="advertise-title" onclick="showAdvertise()"><span>Advertise</span></div>
              <div class="advertise-menu">
                <ul>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Products</a></li>
                  <li><a href="#">Catering</a></li>
                  <li><a href="#">Transport</a></li>
                </ul>
              </div>
            </div>
            <div class="account">
              <div class="account-title" onclick="showAccount()"><span>My Account</span></div>
              <div class="account-menu">
                <ul>
                  @guest
                  <li><a href="{{route('login')}}">Login</a></li>
                  @if(Route::has('register'))
                  <li><a href="{{route('register')}}">Register</a></li>
                    @endif
                    @else
                    <li><a href="{{route('home')}}">{{Auth::user()->name}}</a></li>
                    <li>
                      <a href="{{route('logout')}}"
                      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                </form>
                      </li>                 

                  @endguest
                </ul>
              </div>
            </div>
            <div class="about">
              <div class="about-title"><span>About Us</span></div>
            </div>
    </div>
  </div>
</div>
