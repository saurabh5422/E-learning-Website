<?php 
require ("connection.php");
?>

<?php 
    if(isset($_POST['login']))
    {
          // echo "hi";
          $sql = "SELECT * from login WHERE username = '" . $_POST['username'] . "' and pass = '" . $_POST['password'] . "'";
        $result=mysqli_query($con,$sql);
        // echo mysqli_num_rows($result); exit;
        if(mysqli_num_rows($result)==1)
        {
          
      header("Location: welcome.php");
          
        }
        else
        {
          echo "<script>alert('Invalid Credential')</script>";
        }
    }

    ?>




<!-- ============================================================================= -->





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <title>login</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 


      <!-- navbar -->
<nav class="navbar navbar-expand-sm navbar-dark  flex-sm-nowrap flex-wrap">
    <div class="container-fluid">
        <button class="navbar-toggler flex-grow-sm-1 flex-grow-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5">
            <span class="navbar-toggler-icon"></span>
        </button>
        <span class="navbar-brand flex-grow-1">E-Learning</span>
        <div class="navbar-collapse collapse flex-grow-1 justify-content-center" id="navbar5">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Home.html">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" hrwhite">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="courses.html">COURSES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">CONTACT</a>
              </li>
            </ul>
        </div>
        <div class="flex-grow-1">
            <!--spacer-->
        </div>
    </div>
  </nav>
   
      <!-- Navbar  -->
    <div class="container-fluid cdemo">
        
            <div id="loginbox"  class="col-sm-6 mx-auto formbg" >                    
                <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Already User? Sign In</div>
                            
                        </div>     
    
                        <div style="padding-top:30px" class="panel-body" >
    
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                
                            <form  method="post" id="loginform" class="form-horizontal" role="form">
                                        
                                <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                        </div>
                                    
                                <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                        </div>
                                        
    
                                    
                                <div class="input-group">
                                          <div class="checkbox">
                                            <label>
                                              <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                            </label>
                                          </div>
                                        </div>
    
    
                                    <div style="margin-top:10px" class="form-group">
                                        <!-- Button -->
    
                                        <div class="col-sm-12 controls">
                                       <center><button id="btn-login" href="" name="login" class="btn btn-success">Login  </button><center>
                                          <div style="float:right;  position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                                        </div>
                                    </div>

                                    
    
    
                                    <div class="form-group">
                                        <div class="col-md-12 control">
                                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                Don't have an account! 
                                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                                Sign Up Here
                                            </a>
                                            </div>
                                        </div>
                                    </div>    
                                </form>     
    
    
    
                            </div>                     
                        </div>  
            </div>
            <!-- signin -->
            <div id="signupbox" style="display:none; " class="col-sm-6 mx-auto formbg">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">Sign Up</div>
                                
                            </div>  
                            <div class="panel-body" >
                                <form  method="post" id="signupform" class="form-horizontal" role="form">
                                    
                                    <div id="signupalert" style="display:none" class="alert alert-danger">
                                        <p>Error:</p>
                                        <span></span>
                                    </div>
                                        
                                    
                                    <div class="form-group">
                                        <label for="firstname" class="col-md-3 control-label">UserName</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="username" placeholder="User Name">
                                        </div>
                                    </div>

                                                                          
                                    
                                    <div class="form-group">
                                        <label for="password" class="col-md-3 control-label">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>

                                  

                                        
                                
                                    <div class="form-group">
                                        <!-- Button -->                                        
                                        <div class="col-md-offset-3 col-md-9">
                                      <center>  <button id="btn-signup" href="#" name="signup" class="btn btn-success">signup  </button> <center>
                                            <div style="float:right;  position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                                             
                                        </div>
                                    </div>
                                    <?php 
    if(isset($_POST['signup']))
    {
        $usr= $_POST['username'];
        $ps= $_POST['password'];
        $query=" INSERT INTO login(username,pass) VALUE ('$usr','$ps')";
        if(mysqli_query($con,$query))
        {
         echo "<script> alert('Successfuly Record Inserted')</script>"; 
            
        }
        else
        {
            echo "<script> alert('Already Have an Account')</script>";
        }
        
        mysqli_close($con);
    }

    ?>
                                    
                                    
                                    
                                    
                                </form>
                             </div>
                        </div>
    
                   
                   
                    
            
        </div>
    </div>
        
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
  
          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">E-Learning</h5>
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
 <!-- Grid column -->
 <div class="col-md-3 mx-auto">
  
  <!-- Links -->
  <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

  <ul class="list-unstyled">
    <li>
      <a href="#!"  style="color: #FF8D09;">Home</a>
    </li>
    <li>
      <a href="#!" style="color: #FF8D09;">About</a>
    </li>
    <li>
      <a href="#!"  style="color: #FF8D09;">Courses</a>
    </li>
    <li>
      <a href="#!" style="color: #FF8D09;">Contact</a>
    </li>
  </ul>

</div>
<!-- Grid column -->

<hr class="clearfix w-100 d-md-none">

<!-- Grid column -->
<div class="col-md-3 mx-auto">

  <!-- Links -->
  <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Popular Courses</h5>

  <ul class="list-unstyled">
    <li>
      <a href="#!" style="color: #FF8D09;" >Course 1</a>
    </li>
    <li>
      <a href="#!" style="color: #FF8D09;" >Course 2</a>
    </li>
    <li>
      <a href="#!" style="color: #FF8D09;" >Course 3</a>
    </li>
    <li>
      <a href="#!" style="color: #FF8D09;" >Course 4</a>
    </li>
  </ul>

</div>
<!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
    <hr>
  
    
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-1"><p>© 2021 Copyright: SKAITS</p>
    </div>
    <!-- Copyright -->
  
  </footer>

</body>
</html>