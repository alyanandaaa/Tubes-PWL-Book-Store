<style>
  a, a:hover{
    text-decoration: none;
    color: grey;
  }
</style>

<body style="background-color: #ff9900">
  <center><h1 class="text-light fas fa-spinner" style="margin-top: 30px;"> &nbsp;What Are You Searching For?</h1></center>

  <div class="container">
    <br>
    <br>
    <br>
    <br>

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-9 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div style="background-color: white">          
          <div class="col-lg-12">
            <div class="p-8">
              <div>

                <div>
                   <br>
                       <h3 class="text-dark fas fa-user-edit"> &nbsp;Register</h3>
                       <hr class="bg-dark">    
                       <br>                      
                </div>                 
              </div>
              <form method="post" action="<?php echo base_url('index.php/register/index') ?>" class="user">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" autofocus placeholder="Your Name" name="nama">
                  <?php echo form_error('nama','<div class="text-danger small ml-3">','</div>'); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Your Username" name="username">
                  <?php echo form_error('username','<div class="text-danger small ml-3">','</div>'); ?>
                </div>                

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" placeholder="Password" name="password_1">
                    <?php echo form_error('password_1','<div class="text-danger small ml-3">','</div>'); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" placeholder="Repeat Password" name="password_2">
                  </div>
                </div>

                <center><button type="submit" class="btn btn-user text-light" style="width: 30%; background-color: #4d2e00">Register Account</button></center> 

              </form>
              <hr class="bg-gradient-dark">              
              <div class="text-center">
                <a class="small" href="<?php echo base_url('index.php/auth/login') ?>">Already have an account? Login!</a>
                <br>
                <a href="<?php echo base_url('') ?>" class="fa fa-home"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
