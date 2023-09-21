<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-light text-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
          <div class="nav">
              <div class="sb-sidenav-menu-heading"></div>
              <a class="nav-link" href="{{ url('/dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-house-laptop fa-lg"></i></div>
                Dashboard
            </a>

            <hr class="sidebar-divider my-1">
            <a class="nav-link" href="{{ url('/reject') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-house-laptop fa-lg"></i></div>
                Data Reject
            </a>

            <hr class="sidebar-divider my-1">
            <a class="nav-link" href="{{ url('/gejala') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-house-laptop fa-lg"></i></div>
                Data Gejala
            </a>

            <hr class="sidebar-divider my-1">
            <a class="nav-link" href="{{ url('/relasi') }}">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group fa-lg"></i></div>
                Relasi Kerusakan
            </a>
          </div>
      </div>
      <div class="sb-sidenav-footer">
          <div class="small ">Welcome, </div>
          <span class="fw-bold">Admin </span>
          {{-- <span class="fw-bold">{{ Auth::User()->name }} </span> --}}
          <a class="float-end text-danger" href="{{ url('/login/des') }}"> <i class="fa-solid fa-right-from-bracket fa-lg "></i></a>
      </div>
  </nav>
</div>
