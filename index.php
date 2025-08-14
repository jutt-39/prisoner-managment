<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="Colrolib">
    <meta name="keywords" content="Colrolib Templates">

    <title>Prisoner | Search</title>

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-img-1 p-t-200 p-b-110">
        <div class="wrapper wrapper--w900">
            <div class="card card-4">
                <div class="card-body">
                    <ul class="tab-list">
                        <li class="tab-list__item active">
                            <a class="tab-list__link" href="#tab1" data-toggle="tab">Prisoner</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <form method="POST" action="">
                                <div class="input-group input-group-big">
                                    <label class="label">CNIC:</label>
                                    <input class="input--style-1" type="text" name="cnic" placeholder="Enter id card number" required="required">
                                    <i class="zmdi zmdi-search input-group-symbol"></i>
                                </div>
                                
                                <div class="row row-space">
                                  
                                    <div class="col-2">
                                        <button class="btn-submit" name="submit" type="submit">search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
 

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <script src="js/global.js"></script>

</body>

</html>
<?php 
error_reporting("0");
if(isset($_REQUEST['submit'])){
 function find_prisoner($userecnic)
   {
      $conection=mysqli_connect('localhost','root','','prison');
      $data=mysqli_query($conection,"select *from prisoner");
      while($show=mysqli_fetch_array($data)){
         $cnic=$show['cnic'];
         echo $cnic;
          if ($userecnic ==$cnic ) {
            return 1;

          }

   }
return  ;
  }
    session_start();
  $userecnic=$_POST['cnic'];
     
   


 
  $_SESSION['pdetail']=$userecnic;
  $check=find_prisoner($userecnic);
 

 if ($check ==1 ) {
    header("location:pdetail.php");
 }
 else{
     
      echo "<script>alert('Sorry invalid username')</script>";

    }
   
}


?>
