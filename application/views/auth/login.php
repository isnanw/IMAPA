<section class="login-block">
  <!-- Container-fluid starts -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <!-- Authentication card start -->
        <form class="md-float-material form-material" method="POST" action="<?= base_url('auth'); ?>">
          <div class="text-center">
            <!-- <img src="<?= base_url('Asset/') ?>images/logo.png" alt="logo.png"> -->
          </div>
          <div class="auth-box card">
            <div class="card-block">
              <div class="row m-b-20">
                <div class="col-md-12">
                  <h3 class="text-center">Sign In</h3>
                </div>
              </div>
              <p class="text-center">
                <?= $this->session->flashdata('message'); ?>
              </p>
              <div class="form-group form-primary">
                <input type="text" name="email" class="form-control" id="email" value="<?= set_value('email') ?>">
                <span class="form-bar"></span>
                <label class="float-label">Your Email Address</label>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
              </div>
              <div class="form-group form-primary">
                <input type="password" name="password" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">Password</label>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
              </div>
              <div class="row m-t-25 text-left">
                <div class="col-12">
                  <div class="checkbox-fade fade-in-primary d-">
                    <label>
                      <input type="checkbox" value="">
                      <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                      <span class="text-inverse">View Password</span>
                    </label>
                  </div>
                  <div class="forgot-phone text-right f-right">
                    <!-- <a href="auth-reset-password.html" class="text-right f-w-600"> Forgot Password?</a> -->
                  </div>
                </div>
              </div>
              <div class="row m-t-30">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-10">
                  <div class="text-center">
                    <p class="text-inverse text-left"><a class="" href="<?= base_url('auth/registration') ?>">Create an Account!</a></p>
                  </div>
                </div>
                <div class="col-md-2">
                  <img src="<?= base_url('Asset/') ?>images/auth/Logo-small-bottom.png" alt="small-logo.png">
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- end of form -->
      </div>
      <!-- end of col-sm-12 -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container-fluid -->
</section>