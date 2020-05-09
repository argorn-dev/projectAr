<?php include('excel.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>VOTING APP: COLLEGE/DASHBOARD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
    $('#table').dataTable();
    } );
    </script> 
    <style type="text/css" title="currentStyle">
        @import "/media/css/jquery.dataTables.css";
    </style>
<body>

<div class="container">

<h6 style="color: green;" >Use the Dashboard to continue Navigation..</h6>
<h5 style="color: green;" >Students</h5>
<!DOCTYPE html>
<html>
<body>


<?php

$db = mysqli_connect('localhost', 'root', '', 'location');
$results =$db->query ("SELECT * FROM excel");
?>

<div class="row justify-content-center " style="font-size: 14px;">
<div class="table-responsive">
<table class="table" id= "table">
  <thead>
    <tr>
    <th>Id</th>
      <th>Name</th>
      <th>Index_number</th>
      <th>Email Address</th>
      <th>Password</th>
      <th>College</th>
    </tr>
  </thead>
 

<?php

while ($row = $results->fetch_assoc()): 

?>
<tr>
<td><?php echo $row['id']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['index_number']; ?></td>
  <td><?php echo $row['email']; ?></td>
   <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['college']; ?></td>

</tr>

<?php
endwhile;
?>
<?php
//pre_r ($results);

//pre_r ($results->fetch_assoc());


function pre_r ($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

?>
</table>
</table>


</div>
</div>


  </body>
  </html>