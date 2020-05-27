<?php include('excel.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>VOTING APP: COLLEGE/DASHBOARD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style type="text/css">


</style>
<body>



<h6 style="color: green;" >Use the Dashboard to continue Navigation</h6>

<!DOCTYPE html>
<html>
<body>
<div class="container" style="margin-top: 20%;">
  
<center>
<h3 style="color: green">Import Students</h3>
<br>
<form enctype="multipart/form-data" method="post" role="form">

    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file" size="150">
        <p class="help-block" style="color: red">Only Excel/CSV File Should be imported!.</p>
    </div>
    <br>
    <button type="submit" class="btn btn-success" name="submit" value="submit">Upload</button>
</form>


</center>
</div>



  </body>
  </html>