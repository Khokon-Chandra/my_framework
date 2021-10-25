

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
             <?php $this->form->begin("register","POST"); ?>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <?= $this->form->field($model,"firstname")->setPlaceholder("First Name") ?>
                  </div>
                  <div class="col-sm-6">
                     <?= $this->form->field($model,"lastname")->setPlaceholder("Last Name") ?>
                  </div>
                </div>
                <?= $this->form->field($model,"email")->setPlaceholder("E-Mail Address") ?>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                     <?= $this->form->field($model,"password")->setPlaceholder("Password")->setType("password") ?>
                  </div>
                  <div class="col-sm-6">
					  <?= $this->form->field($model,"confirmPassword")->setPlaceholder("Confirm Password")->setType("password")?>
				  </div>
                </div>
				  <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">

                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
                <?php $this->form->end(); ?>
              <hr>
              <div class="text-center">
                <a class="small" href="/forgotpassword">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="/login">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

