<?php include ("load_header.php"); ?>

<section class="vh-100" style="background-color: #2c3e50;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">

            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="assets/images/freya_1.jpg"
              alt="register form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>

            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <!-- action register -->
                <form action="controller/ctrl_register.php" method="POST">

                  <!--  ... code HTML form register ...  -->
                  <div class="d-flex align-items-center mb-3 pb-1 ">
                    <center>

                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><img src="assets/images/logo_dakota.png" width="10%"> Register New Account</h5>
                    </center>
                  </div>

                  <!-- Register Area -->

                  <!-- Text -->
                  <div class="form-outline mb-4">
                    <label class="form-label" >Name</label>
                    <input type="text" name="nama" class="form-control form-control-lg" />
                  </div>

                  <!-- Email -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Username</label>
                    <input type="text" id="form2Example27" name="username" class="form-control form-control-lg" />
                  </div>

                  <!-- Username -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
                  </div>

                  <!-- register -->
                  <div class="pt-1 mb-4">
                    <button class="btn btn-danger btn-lg btn-block" type="submit" name="register">Register</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">have an account? <a href="form_login.php"
                    style="color: #393f81;">Login here</a></p>
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

