<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Warung Maharrani</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <hr class="w-100">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
          <div class="container">
              <ul class="mt-1">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><form action="/logout" method="POST">
                          @csrf
                          <button type="submit" class="dropdown-item" style="background: transparent; border:none;">Logout</button>
                      </form></li>
                      </ul>
                    </li>
              </ul>
          </div>

        </div>
    </div>
  </header>
