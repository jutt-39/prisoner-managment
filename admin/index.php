<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login | com</title>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
 
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style type="text/css">
    #margin{
      margin-top: 190px;
      margin-left: 400px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
   <section class="content">
      <div class="container-fluid">
        <div id="margin" class="row">
         
          <div class="col-md-6">
           
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Login Form </h3>
              </div>
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter username or email">
                  </div>
              
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password">
                  </div>
                 
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Check me for login</label>
                  </div>
                </div>
               

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
           </form>
              </div>
              
            </div>
            
          </div>
          
        </div>
        
      </div>
    </section>
     <?php 
     error_reporting("0");
  if(isset($_POST['submit'])){
    session_start();
$useremail=$_POST['email'];
$userpassword=$_POST['password'];
$_SESSION['deshbord']=$userpassword;

function find_prisoner($useremail,$userpassword)
   {
    $conection=mysqli_connect('localhost','root','','prison');
$data=mysqli_query($conection,"select *from user");
while($show=mysqli_fetch_array($data)){
 
     $email=$show['email'];
     $password=$show['password'];
     $status=$show['statusid'];
     $type=$show['typeid'];
      
          if ($useremail==$email && $userpassword==$password && $type==1 && $status==1) 
          {
            
            return 1;

          }

   }
return  ;
  }
  $check=find_prisoner($useremail,$userpassword);
 if ($check==1) 
 {
      header("location:deshboard.php");
 }
 else{
  echo "<script>alert('Sorry invalid username and password')</script>";
  
     }
   }





    ?>

  
  

 
 


<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>

<script src="dist/js/demo.js"></script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
 