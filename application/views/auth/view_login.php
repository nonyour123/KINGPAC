<style>
   html, body {
  width: 100%;
  height: 100%;
}

.bg-img {
  position: relative;
  width: 100%;
  height: 100%;
  background: url('http://unsplash.it/1200x800') center center no-repeat;
  background-size: cover;
  
  &:before {
    content: '';
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-image: linear-gradient(to bottom right,#3393FF,#e31b01);
	opacity: .6; 
  }
} 

</style>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kingpac Group</title>
  <link rel="shortcut icon" type="image/png" href="{base_url}src/assets/images/logos/kingpac.png" />
  <link rel="stylesheet" href="{base_url}src/assets/css/styles.min.css" />
</head>

<body>
  
  
<div class="bg-img">
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100 mb-4">
                  <img src="{base_url}src/assets/images/logos/kingpac.png" width="180" alt="">
                </a>

                <form autocomplete="off">
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" >
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <!-- <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label> -->
                    </div>
                  </div>
                  <!-- <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-5 rounded-2">Sign In</a> -->
                  <div class="d-grid gap-2">
                    <button id="btnLogin" type="button" class="btn btn-Warning w-100 py-8 fs-4 mb-5 rounded-2">
                      Login
                    </button>
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-1 mb-0 fw-bold">© 2024  King Pac Industrial Co.,Ltd.</p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  
  
  <!-- ============================================================== -->
  <!-- Create function baseUrl  -->
  <!-- ============================================================== -->



  <script>
  
    function base_url(url) {
        return '<?php echo $base_url; ?>' + url;
    }

    </script>

  <!-- ============================================================== -->
  <!-- All Required js -->
  <!-- ============================================================== -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="{base_url}src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="{base_url}src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{base_url}src/assets/js/login.js"></script>
  
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->

</body>

</html>