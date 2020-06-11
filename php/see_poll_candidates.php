<?php include('process.php') ?>

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
    $('.table').dataTable();
    } );
    </script> 

    <style type="text/css" title="currentStyle">
        @import "/media/css/jquery.dataTables.css";
    </style>

<body>

<div class="container">

<h6 style="color: green;" >Use the Dashboard to continue Navigation..</h6>
<br>
<h5 style="color: green;" >Candidates</h5>
<?php


// initializing variables



// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'data');
$poll = $_GET['poll'];
$results =$db->query ("SELECT * FROM add_can WHERE poll = '$poll' ");
?>

<div class="row justify-content-center " style="font-size: 14px;" >
<div class="table-responsive">
<table class="table table">
  <thead>
    <tr>
    <th>Id</th>
      <th>Name</th>
      <th>Position</th>
      <th>E-mail Address</th>
      <th>Short Biography</th>
      <th>Image</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
 

<?php

while ($row = $results->fetch_assoc()): 

?>
<tr>
<td><?php echo $row['id']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['position']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['biography']; ?></td>
  <td>
  	<?php
		echo '<img src="data:image/png;base64,'.base64_encode( $row['image'] ).'" width="60" height = "60"/>'
   	; ?>
  </td>
  <td>
    <?php echo "<a href='edit_candidate.php?edit=".$row['id']."' class ='btn btn-info' >Edit</a>" ?>
    <?php echo "<a href='delete_poll.php?id=".$row['id']."' class ='btn btn-danger' >Delete</a>" ?>
  </td>
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
</div>
</div>
</div>





  </body>
  </html>