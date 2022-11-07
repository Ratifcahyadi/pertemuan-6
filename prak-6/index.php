<?php
include ("load_header.php");
?>

<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

  <section class="vh-100" style="background-color: #2c3e50;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">

              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="assets/images/freya_3.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <!-- action login -->
                  <form action="controller/ctrl_login.php" method="POST">

                    <!--  ... code HTML form login ...  -->
                    <div class="d-flex align-items-center mb-3 pb-1 ">
                      <center>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><img src="assets/images/logo_dakota.png" width="10%"> Sign into your account</h5>
                      </center>
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" >Username</label>
                      <input type="text" name="username" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Password</label>
                      <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />

                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-danger btn-lg btn-block" type="submit">Login</button>
                    </div>

                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="form_register.php"
                      style="color: #393f81;">Register here</a></p>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
include ("load_footer.php");
?>

