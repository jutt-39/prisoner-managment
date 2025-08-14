  <?php 

 $view=$_REQUEST['view'];
 $conection=mysqli_connect('localhost','root','','prison');

 $data=mysqli_query($conection,"select prisoner.name as prisoner,prisoner.cnic,prisoner.age,prisoner.gander,prisoner.address,jail.name as jail,court.name as court,cases.name as cases,act.name as act,judge.name as judge,policestation.name as police,staff.name as staff,prisoner.startdate,prisoner.enddate from
  prisoner inner join jail on prisoner.jailid=jail.jailid inner join court on prisoner.courtid=court.courtid inner join cases on prisoner.caseid=cases.caseid inner join act on prisoner.actid=act.actid inner join judge on prisoner.judgeid=judge.judgeid inner join staff on prisoner.staffid=staff.staffid inner join policestation on prisoner.policestationid where prisoner.prisonerid='$view'");
 $show=mysqli_fetch_array($data);

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prisoner | Detail </title>

 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style type="text/css">
        body{
            background: rgb(204, 204, 204);
        }
        page{
            background: white;
            display: block;
            margin:1px auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);

        }
        page[size="A4"]{
            width: 21cm;
            height: 29.7cm;
        }
        @media print{
            body,page {
                margin: 0;
                box-shadow: 0;
            }

        
    </style>
</head>
<body class="hold-transition sidebar-mini">
 
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              
               <page size="A4">
              <div class="card-body">

                <table id="example1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>CNIC</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Police Station</th>
                     <th>Case</th>
                    
                    
                    
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                    
                     
                      <td><?php echo $show['prisoner']  ?>  </td>
                      <td><?php echo $show['cnic']  ?>  </td>
                      <td><?php echo $show['age']  ?>  </td>
                      <td><?php echo $show['gander']  ?>  </td>
                      <td><?php echo $show['address']  ?>  </td>
                      <td><?php echo $show['police']  ?>  </td>
                      <td><?php echo $show['cases']  ?>  </td>
                     
                    </tr>
                   </tbody>
                     <thead>
                  <tr>
                   
                    <th>Acts</th>
                    <th>Court</th>
                    <th>Judge</th>
                    <th>Jail</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Staff</th>
                    
                    
                    
                  </tr>
                   <tbody>
                    <tr>
                    
                     
                      <td><?php echo $show['act']  ?>  </td>
                      <td><?php echo $show['court']  ?>  </td>
                      <td><?php echo $show['judge']  ?>  </td>
                      <td><?php echo $show['jail']  ?>  </td>
                      <td><?php echo $show['startdate']  ?>  </td>
                      <td><?php echo $show['enddate']  ?>  </td>
                      <td><?php echo $show['staff']  ?>  </td>
                     
                    </tr>
                   </tbody>
                
              </thead>
                     
                
                  
            </table>
              
             
  
          </div>

         </page>

          </div>
         
        </div>
     
      </div>
   
    </section>
  


<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>

<script src="dist/js/demo.js"></script>


</script>
</body>
</html>
