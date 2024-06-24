@include('components.cssWebsite')

<main class="main-content  mt-0">
  <section>
    <div class="page-header min-vh-75">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain mt-8">
              <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-success text-gradient">Selamat Datang</h3>
                <p class="mb-0">Silahkan isi Username dan Password</p>
              </div>
              <div class="card-body">
                <form action="/loginproses" method="post" role="form">
                  @csrf
                  <label>Username</label>
                  <div class="mb-3">
                    <input type="type" class="form-control" name="username" placeholder="username">
                  </div>
                  <label>Password</label>
                  <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <!-- <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div> -->
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-success w-100 mt-4 mb-0">Sign in</button>
                  </div>
                </form>
              </div>
              <!-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Don't have an account?
                  <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>
                </p>
              </div> -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
              <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                style="background-image: url({{asset('/assets/images/miraibg2.jpg')}}); background-position:center;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <!-- <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Company
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            About Us
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Team
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Products
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Blog
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Pricing
          </a> -->
          Data Miraie's siap untuk dikelola!
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <!-- <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a> -->
          <a href="https://www.instagram.com/mirai_official.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
            target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <!-- <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a> -->
          <a href="https://github.com/" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright ©
            <script>
              document.write(new Date().getFullYear())
            </script> Mirai Dessert
          </p>
        </div>
      </div>
    </div>
  </footer>
</main>



@include ('components.pluginDashboard')
@include ('components.scriptDashboard')