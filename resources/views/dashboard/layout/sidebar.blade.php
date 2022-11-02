<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Reservasi") ? 'active' : '' }}" aria-current="page" href="/reservasidata">
            <span data-feather="home"></span>
            <i class="bi bi-calendar-plus"></i> Reservasi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Buku Menu") ? 'active' : '' }}" href="/bukumenudata">
            <span data-feather="file"></span>
            <i class="bi bi-inboxes"></i> Buku Menu
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Promo") ? 'active' : '' }}" href="/promo">
            <span data-feather="file"></span>
            <i class="bi bi-bag-heart-fill"></i> Promo
          </a>
        </li>
      </ul>
    </div>
  </nav>
