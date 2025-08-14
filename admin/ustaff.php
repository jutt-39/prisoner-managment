<?php
  $update=$_REQUEST['update'];
  
  $conection=mysqli_connect('localhost','root','','prison');
  $data=mysqli_query($conection,"select *from staff where staffid='$update'");

  $show=mysqli_fetch_array($data);
  $staffid=$show['staffid'];

                 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Staff</title>

  
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
            <h1>Staff Update</h1>
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
                <h3 class="card-title">Please Update Everything Carefully </h3>
              </div>

              
              
              <form method="POST">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value="<?php echo $show['name']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="text" name="age" value="<?php echo $show['age']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Join Date</label>
                    <input type="text" name="join" value="<?php echo $show['joiningdate']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" value="<?php echo $show['address']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label class="exampleInputEmail1">Jails</label>
                    <select  name="jailid"  class="form-control">
                      <?php 
                     $jailid= $show['jailid'];
                      $conection=mysqli_connect('localhost','root','','prison');
                      $data=mysqli_query($conection,"select *from jail where jailid='$jailid'");
                       $other=mysqli_query($conection,"select *from jail where jailid !='$jailid'");
                       $show=mysqli_fetch_array($data);

                      ?>
                      <option value="<?php echo $show['jailid']; ?>"><?php echo $show['name']; ?></option>
                      <?php 
                      while($display=mysqli_fetch_array($other)){
                      ?>
                      <option value="<?php echo $display['jailid']; ?>"><?php echo $display['name']; ?></option>
                      <?php 
                    }
                    ?>

                          
                    </select>

                  

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
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
 
  $name=$_POST['name'];
  $age=$_POST['age'];
  $join=$_POST['join'];
  $address=$_POST['address'];
  $jailid=$_POST['jailid'];
  
   

 $conection=mysqli_connect('localhost','root','','prison');
 $data=mysqli_query($conection,"update  staff set name='$name',age='$age',joiningdate='$join',address='$address',jailid='$jailid' where staffid='$update'");
   echo "<script>window.location.href='stafftable.php'</script>";


  
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
