<?php 
include 'connect.php';
include 'dbcon.php';
?>


<link rel="stylesheet" type="text/css" href="login.css">
 <center>
        <div class="card container-fluid" >
              <form method="post" action="logins.php">
               


          <!-- <div class="card"> -->
            <div class="row">
                <div class="col-md-6" id="bem">
                    <div class="card-text" >
                        <h1 style="color: DodgerBlue;">KQIBA</h1>
                        <img src="images/p.png" class="control">
                        <h2 class="text-over-img" style="color: white">Welcome <span style="color: dodgerblue">Back!</span></h2>    
                    </div>              
                </div>

                <div class="col-md-6" style="margin-top: 30px;padding-right: 2em;">
                   <?php 
                session_start();                                                             

                if (isset($_SESSION['error'])) {
                  ?>
                    <div class="alert alert-danger">
                      <strong>Incorrect Name or Password</strong>
                    </div>
                    <?php
                    unset($_SESSION['error']);
                  }
                    ?>
                    <div>
                    <h3>Admin<span style="color: dodgerblue"> LOGIN</span></h3><br>
                         <label for="fname"><b>Firstname</b></label><br>
                             <input type="text" placeholder="Enter Firstname" name="user" required class="form-control" maxlength=""/><br>

                       <label for="password"><b>Password</b></label>
                          <input type="password" placeholder="Input password" name="pass" required class="form-control" maxlength="12"/><br>

                           <label class="forgot-password"><a href="admin.php">Forgot Password ?<a></label><br><br> 

                          

                </div>
                   <input type="submit" name="" value="Login" class="btn btn-primary" style="float: left;">
            </div>
        </div>
      </form>
    </div>
  </center>
