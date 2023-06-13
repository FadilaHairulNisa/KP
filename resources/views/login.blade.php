<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIP</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{ asset('css/styles.min.css')}}" />
</head>

<body>
    <div class="container vh-100 d-flex align-items-center justify-content-center" >
    <section class="">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          </div>

          <div class="divider d-flex align-items-center my-4">
            <h1 class="text-center fw-bold mx-3 mb-0">Masuk</h1>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Masukan Alamat Email" />
            <label class="form-label" for="form3Example3">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Masukan Kata Sandi" />
            <label class="form-label" for="form3Example4">Kata Sandi</label>
          </div>


          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Ingat saya?
              </label>
            </div>
            <a href="#!" class="text-body">Lupa Kata Sandi?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Masuk</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Belum Punya Akun? <a href="#!"
                class="link-danger">Daftar</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
 
</section>
    </div>

  <script src="{{ asset('libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('js/sidebarmenu.js')}}"></script>
  <script src="{{ asset('js/app.min.js')}}"></script>
  <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{ asset('libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{ asset('js/dashboard.js')}}"></script>
</body>

</html>