  <!-- <div class="jumbotron big-banner" style="height:500px; padding-top: 150px;"> -->

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
        <div class="mx-1 my-5">
          <div class="card-body p-0">

            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block"></div> -->
              <!-- <img class="col-lg-6 d-none d-lg-block" src="<?= base_url('assets/img/loginscreen.jpg');?>"> -->
              <img class="col-lg-6 d-none d-lg-block animated--grow-in" src="<?= base_url('assets/img/logologin2.png');?>">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Login</h1>
                  </div>

                    <?= $this->session->flashdata('message')?>

                  <form class="user" method="post" action="<?= base_url('auth/index'); ?>">

                    <!-- input email -->
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user font-weight-bold" id="email" name="email" placeholder="Email" value="<?= set_value('email');?>">
                      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <!-- input password -->
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user font-weight-bold" id="password" name="password" placeholder="Password">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <button type="submit" class="btn btn-success btn-user btn-block font-weight-bold">
                      Login
                    </button>
                    </form>
                  <hr>
                  <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div> -->
                  <!-- <div class="text-center">
                    <a class="small font-weight-bold" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<!-- </div> -->
