<?php
  $update=$_REQUEST['update'];
  
  $conection=mysqli_connect('localhost','root','','prison');
  $data=mysqli_query($conection,"select *from prisoner where prisonerid='$update'");

  $show=mysqli_fetch_array($data);
  $prisonerid=$show['prisonerid'];

                 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Prisoner</title>

  
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
            <h1>Prisoner Update</h1>
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

              
              
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                      <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="photo" value="<?php echo $show['photo']  ?>" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile"><?php echo $show['photo']  ?></label>
                      </div>
                     
                    </div>
                  </div>
                    
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" name="name" value="<?php echo $show['name']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">CNIC</label>
                    <input type="text" name="cnic" value="<?php echo $show['cnic']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="text" name="age" value="<?php echo $show['age']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <input type="text" name="gander" value="<?php echo $show['gander']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" value="<?php echo $show['address']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Start Date</label>
                    <input type="text" name="start" value="<?php echo $show['startdate']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">End Date</label>
                    <input type="text" name="end" value="<?php echo $show['enddate']  ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <?php 
                     $staffid= $show['staffid'];
                     $jailid= $show['jailid'];
                     $judgeid= $show['judgeid'];
                     $policeid= $show['policestationid'];
                     $actid= $show['actid'];
                     $caseid= $show['caseid'];
                     $courtid= $show['courtid'];
                  ?>
                  <div class="form-group">
                    <label class="exampleInputEmail1">Staff</label>
                    <select  name="staffid"  class="form-control">
                      <?php 
                    
                      $conection=mysqli_connect('localhost','root','','prison');
                      $data=mysqli_query($conection,"select *from staff where staffid='$staffid'");
                       $other=mysqli_query($conection,"select *from staff where staffid !='$staffid'");
                       $show=mysqli_fetch_array($data);

                      ?>
                      <option value="<?php echo $show['staffid']; ?>"><?php echo $show['name']; ?></option>
                      <?php 
                      while($display=mysqli_fetch_array($other)){
                      ?>
                      <option value="<?php echo $display['staffid']; ?>"><?php echo $display['name']; ?></option>
                      <?php 
                    }
                    ?>


                          
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="exampleInputEmail1">Act</label>
                    <select  name="actid"  class="form-control">
                      <?php 
                     
                      $conection=mysqli_connect('localhost','root','','prison');
                      $data=mysqli_query($conection,"select *from act where actid='$actid'");
                       $other=mysqli_query($conection,"select *from act where actid !='$actid'");
                       $show=mysqli_fetch_array($data);

                      ?>
                      <option value="<?php echo $show['actid']; ?>"><?php echo $show['name']; ?></option>
                      <?php 
                      while($display=mysqli_fetch_array($other)){
                      ?>
                      <option value="<?php echo $display['actid']; ?>"><?php echo $display['name']; ?></option>
                      <?php 
                    }
                    ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="exampleInputEmail1">Case</label>
                    <select  name="caseid"  class="form-control">
                      <?php 
                     
                      $conection=mysqli_connect('localhost','root','','prison');
                      $data=mysqli_query($conection,"select *from cases where caseid='$caseid'");
                       $other=mysqli_query($conection,"select *from cases where caseid !='$caseid'");
                       $show=mysqli_fetch_array($data);

                      ?>
                      <option value="<?php echo $show['caseid']; ?>"><?php echo $show['name']; ?></option>
                      <?php 
                      while($display=mysqli_fetch_array($other)){
                      ?>
                      <option value="<?php echo $display['caseid']; ?>"><?php echo $display['name']; ?></option>
                      <?php 
                    }
                    ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label class="exampleInputEmail1">Court</label>
                    <select  name="courtid"  class="form-control">
                      <?php 
                     
                      $conection=mysqli_connect('localhost','root','','prison');
                      $data=mysqli_query($conection,"select *from court where courtid='$courtid'");
                       $other=mysqli_query($conection,"select *from court where courtid !='$courtid'");
                       $show=mysqli_fetch_array($data);

                      ?>
                      <option value="<?php echo $show['courtid']; ?>"><?php echo $show['name']; ?></option>
                      <?php 
                      while($display=mysqli_fetch_array($other)){
                      ?>
                      <option value="<?php echo $display['courtid']; ?>"><?php echo $display['name']; ?></option>
                      <?php 
                    }
                    ?>
                   </select>
                  </div>
                  <div class="form-group">
                    <label class="exampleInputEmail1">Jails</label>
                    <select  name="jailid"  class="form-control">
                      <?php 
                     
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
                  </div>
                  <div class="form-group">
                    <label class="exampleInputEmail1">Judge</label>
                    <select  name="judgeid"  class="form-control">
                      <?php 
                    
                      $conection=mysqli_connect('localhost','root','','prison');
                      $data=mysqli_query($conection,"select *from judge where judgeid='$judgeid'");
                       $other=mysqli_query($conection,"select *from judge where judgeid !='$judgeid'");
                       $show=mysqli_fetch_array($data);

                      ?>
                      <option value="<?php echo $show['judgeid']; ?>"><?php echo $show['name']; ?></option>
                      <?php 
                      while($display=mysqli_fetch_array($other)){
                      ?>
                      <option value="<?php echo $display['judgeid']; ?>"><?php echo $display['name']; ?></option>
                      <?php 
                    }
                    ?>


                          
                    </select>

                  </div>
                  <div class="form-group">
                    <label class="exampleInputEmail1">Police Station</label>
                    <select  name="policeid"  class="form-control">
                      <?php 
                     
                      $conection=mysqli_connect('localhost','root','','prison');
                      $data=mysqli_query($conection,"select *from policestation where policeid='$policeid'");
                       $other=mysqli_query($conection,"select *from policestation where policeid !='$policeid'");
                       $show=mysqli_fetch_array($data);

                      ?>
                      <option value="<?php echo $show['policeid']; ?>"><?php echo $show['name']; ?></option>
                      <?php 
                      while($display=mysqli_fetch_array($other)){
                      ?>
                      <option value="<?php echo $display['policeid']; ?>"><?php echo $display['name']; ?></option>
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
  $cnic=$_POST['cnic'];
  $age=$_POST['age'];
  $gander=$_POST['gander'];
  $address=$_POST['address'];
  $sdate=$_POST['start'];
  $edate=$_POST['end'];
  $staffid=$_POST['staffid'];
  $actid=$_POST['actid'];
  $courtid=$_POST['courtid'];
  $jailid=$_POST['jailid'];
  $judgeid=$_POST['judgeid'];
  $policeid=$_POST['policeid'];
  $caseid=$_POST['caseid'];
   $filename = $_FILES["photo"]["name"];

    $tempname = $_FILES["photo"]["tmp_name"];  

        $folder = "uploads/prisoner/".$filename; 
if($filename=="")  
{    

 $conection=mysqli_connect('localhost','root','','prison');
 $data=mysqli_query($conection,"update prisoner set name='$name',cnic='$cnic',age='$age',gander='$gander',address='$address',startdate='$sdate',enddate='$edate' ,staffid='$staffid',actid='$actid'='$actid',caseid='$caseid',courtid='$courtid',jailid='$jailid',judgeid='$judgeid',policestationid='$policeid' where prisonerid='$update'");
}
else{
  move_uploaded_file($tempname, $folder);
  $conection=mysqli_connect('localhost','root','','prison');
 $data=mysqli_query($conection,"update prisoner set photo='$filename',name='$name',cnic='$cnic',age='$age',gander='$gander',address='$address',startdate='$sdate',enddate='$edate' ,staffid='$staffid',actid='$actid'='$actid',caseid='$caseid',courtid='$courtid',jailid='$jailid',judgeid='$judgeid',policestationid='$policeid' where prisonerid='$update'");
  
}

  
     echo "<script>window.location.href='prisonertable.php'</script>";

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
