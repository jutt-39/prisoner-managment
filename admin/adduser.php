<?php  
session_start();
if ($_SESSION['deshbord']=="") {
   header("location:http://localhost/prisoner/admin/");}

else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add | User</title>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
 
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="deshboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Contact</a>
      </li>
    </ul>


    <ul class="navbar-nav ml-auto">
    
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
   <?php  

 include 'sidebar.php';

    ?>
 
<div class="content-wrapper">
   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-6">
          <div class="col-sm-6">
            <h1>User Form</h1>
          </div>
          
        </div>
      </div>
    </section>
   

   <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <div class="col-md-12">
           
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Please Enter Everything Carefully </h3>
              </div>
              
              
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input  type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input  type="text" class="form-control" name="password" id="exampleInputEmail1" placeholder="Enter Password">
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control">
                      <option >Select Status</option>
                      <?php 
                       
                        $conection=mysqli_connect('localhost','root','','prison');
                         $data=mysqli_query($conection,"Select *from status");
                         while($show=mysqli_fetch_array($data)){
                         $statusid=$show['statusid'];
                      ?>
                      <option value="<?php echo $show['statusid']  ?>"> <?php echo $show['name'];  ?></option>
                      <?php 
                    }
                    ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Type</label>
                    <select name="type" class="form-control">
                      <option >Select Type</option>
                      <?php 
                       
                        $conection=mysqli_connect('localhost','root','','prison');
                         $data=mysqli_query($conection,"Select *from type");
                         while($show=mysqli_fetch_array($data)){
                         $typeid=$show['typeid'];
                      ?>
                      <option value="<?php echo $show['typeid']  ?>"> <?php echo $show['name'];  ?></option>
                      <?php 
                    }
                    ?>

                    </select>
                  </div>
                  <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
           

            
                  <div class="form-group">
                  </div>
                </form>
              </div>
              
            </div>
            
          </div>
          
        </div>
        
      </div>
    </section>
    
  </div>

  <?php 
  if(isset($_REQUEST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $status=$_POST['status'];
  $type=$_POST['type'];
 
 $conection=mysqli_connect('localhost','root','','prison');
 mysqli_query($conection,"insert into user(email,password,statusid,typeid) values('$email','$password','$status','$type')");
   echo "<script>window.location.href='usertable.php'</script>";

}


  ?>
  
  

  <aside class="control-sidebar control-sidebar-dark">

  </aside>
 
</div>

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
<?php   }  ?>