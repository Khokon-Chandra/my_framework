    <!-- Outer Row -->


      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>

                    <?php $this->form->begin('login','POST') ?>
                    <?= $this->form->field($model,"email")->setType("email")->setPlaceholder("Enter Email") ?>
                    <?= $this->form->field($model,"password")->setType("password")->setPlaceholder("Enter Password") ?>

                    <input type="submit" class="btn btn-primary btn-user btn-block" value ="login">
                    </a>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                    <?php $this->form->end() ?>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="/forgotpassword">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/register">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


 