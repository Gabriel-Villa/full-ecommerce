<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #F4F4F4 !important;">
    <div class="container-fluid">

      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <a class="navbar-brand mt-2 mt-lg-0" href="{{ route('index') }}">
          <img
            src="{{ asset('images/logo.png') }}"
            height="50"
            alt="logo"
            loading="lazy"
          />
        </a>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
          </li>
        </ul>

      </div>
  
      <div class="d-flex align-items-center">
        <a href="{{ route('carrito.index') }}" class="position-relative border-0" style="margin-right: 18px;">
          <i class="fas fa-shopping-cart text-dark" style="font-size: 18px;"></i>
          @if (Cart::count() > 0)
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px;">
              {{ Cart::count() }}
              <span class="visually-hidden">unread messages</span>
            </span>
          @endif
        </a>
       
        <div class="dropdown">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
          @guest
            <i class="fa-solid fa-user"></i>
          @else
            <p style="border: 1px solid grey; border-radius: 100%; padding: 5px 13px; margin-top: 11px !important;">{{ substr(Auth::user()->name, 0, 1) }}</p>
          @endguest
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            @guest
              <li>
                <a class="dropdown-item" href="{{ route('register') }}">Registro</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('login-driver', ['github']) }}">Login con github <i class="fa-brands fa-github"></i></a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('login-driver', ['google']) }}">Login con google <i class="fa-brands fa-google"></i></a>
              </li>
            @else
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
            @endguest
            
          </ul>
        </div>
        
      </div>
    </div>
  </nav>