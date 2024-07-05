    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo">
              <a href="index.html"
                ><img
                  src="{{asset('images/logowawaw.png')}}"
                  style="width: 50px; height: 50px"
              /></a>
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}" wire:navigate>Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}" wire:navigate>About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('product') }}" wire:navigate>Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('blog') }}" wire:navigate>Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button
                  class="btn btn-outline-success my-2 my-sm-0"
                  type="submit"
                >
                  GET STARTED
                </button>
              </form>
              <div class="search_icon">
                <ul>
                  <li>
                    <a href="#"><img src="{{asset('images/user-icon.png')}}" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="{{asset('images/bag-icon.png')}}" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="{{asset('images/search-icon.png')}}" /></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <!-- header section end -->
      </div>
      <!-- header section end -->