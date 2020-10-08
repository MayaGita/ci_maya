


  <div class="container">
        <div class="row justify-content-center">

    <div class=" col-xl-5 card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-1">
        <!-- Nested Row within Card Body -->
        <div class="row">
   
          <div class="col-lg-15">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/register');?>">
                <div class="form-group ">
                 
                    <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control form-control-user" id="exampleFirstName" placeholder="User Name">  
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>')?>     
                </div>
                <div class="form-group">
                  <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                   <?= form_error('email', '<small class="text-danger pl-3">', '</small>')?>     
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                     <?= form_error('password', '<small class="text-danger pl-3">', '</small>')?>     
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="repeat_password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                     <?= form_error('repeat_password', '<small class="text-danger pl-3">', '</small>')?>     
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                <hr>
               
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo site_url("auth/index"); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


