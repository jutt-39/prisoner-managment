<?php  
session_start();
if ($_SESSION['deshbord']=="") {
 header("location:http://localhost/prisoner/admin/");
}

else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add | Prisoner</title>

  
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
            <h1>Prisoner Form</h1>
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
              
              
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Name</label>
                    <input  type="text" class="form-control" name="name"id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> CNIC</label>
                    <input  type="text" class="form-control" name="cnic"id="exampleInputEmail1" placeholder="Enter id card number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Age</label>
                    <input  type="text" class="form-control" name="age"id="exampleInputEmail1" placeholder="Enter Age">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Gender</label>
                    <input  type="text" class="form-control" name="gander"id="exampleInputEmail1" placeholder="Male or Female">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Address</label>
                    <input  type="text" class="form-control" name="address"id="exampleInputEmail1" placeholder="Enter Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Starting Date</label>
                    <input  type="date" class="form-control" name="sdate"id="exampleInputEmail1" placeholder="Enter Starting Date">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> End Date</label>
                    <input  type="date" class="form-control" name="edate"id="exampleInputEmail1" placeholder="Enter End Date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Staff</label>
                    <select name="staffid" class="form-control">
                      <option >Select Staff</option>
                      <?php 
                       
                        $conection=mysqli_connect('localhost','root','','prison');
                         $data=mysqli_query($conection,"Select *from staff");
                         while($show=mysqli_fetch_array($data)){
                         $staffid=$show['staffid'];
                      ?>
                      <option value="<?php echo $show['staffid']  ?>"> <?php echo $show['name'];  ?></option>
                      <?php 
                    }
                    ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Acts</label>
                    <select name="actid" class="form-control">
                      <option >Select Act</option>
                      <?php 
                       
                        $conection=mysqli_connect('localhost','root','','prison');
                         $data=mysqli_query($conection,"Select *from act");
                         while($show=mysqli_fetch_array($data)){
                         $actid=$show['actid'];
                      ?>
                      <option value="<?php echo $show['actid']  ?>"> <?php echo $show['name'];  ?></option>
                      <?php 
                    }
                    ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Case</label>
                    <select name="caseid" class="form-control">
                      <option >Select Case</option>
                      <?php 
                       
                        $conection=mysqli_connect('localhost','root','','prison');
                         $data=mysqli_query($conection,"Select *from cases");
                         while($show=mysqli_fetch_array($data)){
                         $caseid=$show['caseid'];
                      ?>
                      <option value="<?php echo $show['caseid']  ?>"> <?php echo $show['name'];  ?></option>
                      <?php 
                    }
                    ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Court</label>
                    <select name="courtid" class="form-control">
                      <option >Select Court</option>
                      <?php 
                       
                        $conection=mysqli_connect('localhost','root','','prison');
                         $data=mysqli_query($conection,"Select *from court");
                         while($show=mysqli_fetch_array($data)){
                         $jailid=$show['courtid'];
                      ?>
                      <option value="<?php echo $show['courtid']  ?>"> <?php echo $show['name'];  ?></option>
                      <?php 
                    }
                    ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jails</label>
                    <select name="jailid" class="form-control">
                      <option >Select Jail</option>
                      <?php 
                       
                        $conection=mysqli_connect('localhost','root','','prison');
                         $data=mysqli_query($conection,"Select *from jail");
                         while($show=mysqli_fetch_array($data)){
                         $jailid=$show['jailid'];
                      ?>
                      <option value="<?php echo $show['jailid']  ?>"> <?php echo $show['name'];  ?></option>
                      <?php 
                    }
                    ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judge</label>
                    <select name="judgeid" class="form-control">
                      <option >Select Judge</option>
                      <?php 
                       
                        $conection=mysqli_connect('localhost','root','','prison');
                         $data=mysqli_query($conection,"Select *from judge");
                         while($show=mysqli_fetch_array($data)){
                         $judgeid=$show['judgeid'];
                      ?>
                      <option value="<?php echo $show['judgeid']  ?>"> <?php echo $show['name'];  ?></option>
                      <?php 
                    }
                    ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Police Stations</label>
                    <select name="policeid" class="form-control">
                      <option >Select Police Station</option>
                      <?php 
                       
                        $conection=mysqli_connect('localhost','root','','prison');
                         $data=mysqli_query($conection,"Select *from policestation");
                         while($show=mysqli_fetch_array($data)){
                         $policeid=$show['policeid'];
                      ?>
                      <option value="<?php echo $show['policeid']  ?>"> <?php echo $show['name'];  ?></option>
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
  $sdate=$_POST['sdate'];
  $edate=$_POST['edate'];
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

 $conection=mysqli_connect('localhost','root','','prison');
 $data=mysqli_query($conection,"insert into prisoner(photo,name,cnic,age,gander,address,startdate,enddate,staffid,actid,caseid,courtid,jailid,judgeid,policestationid)values('$filename','$name','$cnic', '$age','$gander','$address','$sdate','$edate','$staffid','$actid','$caseid','$courtid','$jailid','$judgeid','$policeid')");

   move_uploaded_file($tempname, $folder);
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
<?php } ?>
