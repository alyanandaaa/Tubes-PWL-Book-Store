<style>
  a, a:hover{
    text-decoration: none;
    color: grey;
  }
</style>

<body style="background-color: #ff9900">
  <center><h1 class="text-light fas fa-spinner" style="margin-top: 30px;"> &nbsp;What Are You Searching For?</h1></center>

  <div class="container">

    <!-- Outer Row -->
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">

      <div class="col-xl-8 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-9">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div style="background-color: white">              
              <div class="col-lg-12">
                <div class="p-1">
                  <div>

                    <div>
                      <br>
                       <h3 class="text-dark fas fa-user"> &nbsp;Sign In</h3>
                       <hr class="bg-dark">    
                       <br>                 
                    </div>
                  </div>
                  <?php echo $this->session->flashdata('text') ?>
                  <form method="post" action="<?php echo base_url('index.php/auth/login') ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" autofocus autocomplete="off" placeholder="Username" name="username">
                      <?php echo form_error('username','<div class="text-danger small ml-3">','</div>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user"  placeholder="Password" name="password">
                      <?php echo form_error('password','<div class="text-danger small ml-3">','</div>'); ?>                    
                    </div>  

                    <br>
                  <center> <button type="submit" class="btn btn-user text-light" style="width: 30%; background-color: #4d2e00">Login</button> </center>
                  <br>

                  </form>
                  <hr class="bg-dark">                  
                  <div class="text-center">
                    <a class="medium" href="<?php echo base_url('index.php/register/index') ?>">Create an Account!</a>
                    <br>
                    <a href="<?php echo base_url('') ?>" class="fa fa-home"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>  

</body>

</html>
