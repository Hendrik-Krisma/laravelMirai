
<!DOCTYPE html>
<html lang="en">

@include ('components.cssWebsite')

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=""
        target="_blank">
        <img src="{{ asset('assets/images/mirai.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Mirai Dessert</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">

   <!-- Left Side Bar -->
   @include ('components.sideNavbar')
    <!-- Left Side Bar -->



  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include ('components.topNavbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">

    @yield('content')
    
    @include ('components.footerDashboard')
    </div>
  </main>

  <!-- Plugin -->
  @include ('components.pluginDashboard')
  <!-- Plugin -->

  <!--   Core JS Files   -->
  @include ('components.scriptDashboard')
</body>


</html>