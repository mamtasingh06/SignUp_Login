
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
       <div class="row justify-content-center mt-5">
           <div class="col-md-5 ">
               <div class="text-center">
                   <b class="fs-3 gfca">Create Account</b>
                   <p>Get started with your free account</p>
               </div>
               <div class="text-center bg-danger text-white mx-5 py-2">
                   <b class="fs-5 me-1">G</b> Login with Gmail
               </div>
               <div class="text-center bg-primary mt-3 mx-5 py-2 text-white">
                   <b class="fs-5 me-1">f</b>
                   Login with facebook
               </div>
               <div class="text-center m-3">
                   OR
               </div>
               <form action="" method="POST">
                    <div class="form-group mx-5 mb-2 ">
                        <label for="fullname">Full Name</label>
                        <div class="input-group">
                          <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i>
                          </span>
                          <input type="text" class="form-control" id="name" name="name" value="Enter name" required>
                        </div>
                        
                    </div>
                    <div class="form-group mx-5 mb-2">
                        <label for="email">Email</label>
                        <div class="input-group">
                           <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-fill"></i>
                           </span>
                            <input type="email" class="form-control" id="email" name="email" value="Enter email" required>
                        </div>
                    </div>
                    <div class="form-group mx-5 mb-2">
                        <label  for="phone">Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i>
                            </span>
                            <input type="tel" class="form-control" id="phone" name="phone" value="Phone Number" required>
                        </div>
                        
                    </div>
                    <div class="form-group mx-5 mb-2">
                        <label  for="password">Password</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" 
                            value="enter password" required>  
                        </div>
                        
                    </div>
                    <div class="form-group mx-5 mb-3">
                        <label  for="rpassword">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" id="cpassword" name="cpassword"
                             value="Cinfirm password" required> 

                        </div>
                        
                    </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn=lg mx-5 text-center btnn"
                     name="submit" style="width:250px;">Create Account</button>
                  </div>
                </form>
                <div class="mt-2 text-center">
                    <p>Have an account?<a href="login.php">Log In</a></p>
                    
                </div>
           </div>
       </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
</body>
</html>