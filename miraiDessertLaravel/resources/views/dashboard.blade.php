
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/images/Mirai.png') }}">
  <title>
    Mirai Dessert Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
</head>

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
    <?php //@include('sideNavbar'); ?>
    <!-- Left Side Bar -->

    <!-- Bottom Left Side Bar -->
    <?php //@include 'bottomLeftSideNavbar.php'; ?>
    <!-- Bottom Left Side Bar -->

    @yield('sideNavbar')
    @yield('tes')


  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @yield('topNavbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">

      <!-- Extra Component -->
      <?php //@include 'extraComponent.php'; ?>
      <!-- Extra Component -->
      <?php
      $section = isset($_GET['section']) ? $_GET['section'] : "";
      if ($section == "") {
        @include "./Orders/tableOrders.blade.php";
        error_reporting();
      } else if ($section == "ordersPage") {
        @include "./Orders/tableOrders.blade.php";
      } else if ($section == "invoicesPage") {
        @include "./Invoices/invoices.blade.php";
      } else {
        @include "blank_page.php";
      }
      ?>

      <!-- <?php //@include './Orders/tableOrders.php'; ?> -->

      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">

                <script>
                  document.write(new Date().getFullYear())
                </script>,
                Mirai Dessert <i class="fa fa-heart"></i>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.instagram.com/mirai_official.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                    class="nav-link text-muted" target="_blank">Mirai Dessert Instagram</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <!-- Plugin -->
  <?php @include 'pluginDashboard.blade.php'; ?>
  <!-- Plugin -->

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        },],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(85, 130, 28, 0.5)');
    gradientStroke1.addColorStop(0.2, 'rgba(85, 130, 28, 0.1)');
    gradientStroke1.addColorStop(0, 'rgba(85, 130, 28, 0.1)');

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["1 Maret", "6 Maret", "10 Maret", "15 Maret", "18 Maret", "22 Maret", "26 Maret", "30 Maret"],
        datasets: [{
          label: "Rupiah",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#55821C",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          fill: true,
          data: [75, 300, 50, 280, 360, 120, 500, 60],
          maxBarThickness: 6

        },

        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  <!-- Search Function -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {

      $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {

          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        })
      })

    })
  </script>
</body>


</html>