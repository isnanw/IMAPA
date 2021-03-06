<section class="login-block">
  <!-- Container-fluid starts -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <form class="md-float-material form-material" method="POST" action="<?= base_url('auth/registration') ?>">
          <div class="text-center">
            <!-- <img src="assets/images/logo.png" alt="logo.png"> -->
          </div>
          <div class="auth-box card">
            <div class="card-block">
              <div class="row m-b-20">
                <div class="col-md-12">
                  <h3 class="text-center txt-primary">Sign up</h3>
                </div>
              </div>
              <div class="form-group form-primary">
                <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name'); ?>">
                <span class="form-bar"></span>
                <label class="float-label">Choose Username</label>
              </div>
              <div class="form-group form-primary">
                <input type="text" name="email" id="email" class="form-control" value="<?= set_value('email'); ?>">
                <span class="form-bar"></span>
                <label class="float-label">Your Email Address</label>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-primary">
                    <input type="password" name="password1" class="form-control">
                    <span class="form-bar"></span>
                    <label class="float-label">Password</label>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-primary">
                    <input type="password" name="password2" class="form-control">
                    <span class="form-bar"></span>
                    <label class="float-label">Confirm Password</label>
                  </div>
                </div>
              </div>
              <div class="row m-t-25 text-left">
                <div class="col-md-12">
                  <div class="checkbox-fade fade-in-primary">
                    <label>
                      <input type="checkbox" value="">
                      <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                      <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row m-t-30">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
                </div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-10">
                  <p class="text-inverse text-left">
                    <a class="" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                  </p>
                </div>
                <div class="col-md-2">
                  <img src="<?= base_url('Asset/') ?>images/auth/Logo-small-bottom.png" alt="small-logo.png">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- end of col-sm-12 -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container-fluid -->
</section>