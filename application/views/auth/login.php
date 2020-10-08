

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-8 col-md-5">

        <div class="card o-hidden border-0 shadow-lg mt-5 ">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
          
            
              <div class="col-lg-15 pl-5 pr-5">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>

                  <?= $this->session->flashdata('message');?>
                </div>

                  <form class="user" method="post" action="<?=base_url('auth'); ?>">

                    <div class="form-group">
                      <input type="email" name="email" value="<?php echo set_value('email'); ?>"class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                       <?= form_error('email', '<small class="text-danger pl-3">', '</small>')?>     
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                         <?= form_error('password', '<small class="text-danger pl-3">', '</small>')?>     
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" href="#" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>

                      <h6 align="center" style="margin-bottom: 50px">dont have any account? <a href="<?php echo site_url('auth/register')?>" style="text-decoration: none; color: blue">Create account</a></h6>
            
                  </form>
                  <hr>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
