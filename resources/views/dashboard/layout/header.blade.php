<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">MP | Dashbord</a>
<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="navbar-nav">
  <div class="nav-item text-nowrap">
    <form action="/logout" method="POST">
    @csrf
    <button type="submit" class="border-0 px-3 bg-dark text-white">Logout<span data-feather="log-out"></span></button>
    </form>
  </div>
</div>