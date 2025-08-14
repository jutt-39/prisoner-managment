<?php
  $update=$_REQUEST['update'];
  
  $conection=mysqli_connect('localhost','root','','prison');
  $data=mysqli_query($conection,"select *from visitor where visitorid='$update'");

  $show=mysqli_fetch_array($data);
  $visitorid=$show['visitorid'];

                 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Visitor</title>

  
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
            <h1>Visitor Update</h1>
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
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" value="<?php echo $show['address']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Relation</label>
                    <input type="text" name="relation" value="<?php echo $show['relation']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Purpose</label>
                    <input type="text" name="purpose" value="<?php echo $show['purpose']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Time</label>
                    <input type="text" name="time" value="<?php echo $show['time']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="text" name="date" value="<?php echo $show['date']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Prisoner</label>
                    <select  name="prisonerid"  class="form-control">
                      <?php 
                     $prisonerid= $show['prisonerid'];
                      $conection=mysqli_connect('localhost','root','','prison');
                      $data=mysqli_query($conection,"select *from prisoner where prisonerid='$prisonerid'");
                       $other=mysqli_query($conection,"select *from prisoner where prisonerid !='$prisonerid'");
                       $show=mysqli_fetch_array($data);

                      ?>
                      <option value="<?php echo $show['prisonerid']; ?>"><?php echo $show['name']; ?></option>
                      <?php 
                      while($display=mysqli_fetch_array($other)){
                      ?>
                      <option value="<?php echo $display['prisonerid']; ?>"><?php echo $display['name']; ?></option>
                      <?php 
                    }
                    ?>

                          
                    </select>

                  </div>
                   

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
  $address=$_POST['address'];
  $relation=$_POST['relation'];
  $purpose=$_POST['purpose'];
  $time=$_POST['time'];
  $date=$_POST['date'];
  $prisonerid=$_POST['prisonerid'];
   

 $conection=mysqli_connect('localhost','root','','prison');
 $data=mysqli_query($conection,"update  visitor set name='$name',address='$address',relation='$relation',purpose='$purpose',time='$time',date='$date',prisonerid='$prisonerid' where visitorid='$update'");
  echo "<script>window.location.href='visitortable.php'</script>";

  
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
