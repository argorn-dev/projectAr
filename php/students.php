<?php include('excel.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>VOTING APP: STUDENTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <form method="POST" action="students.php" class="container-fluid col-6" style="margin-top: 0 auto; border-bottom: 2px solid green" >
  <center>  
  <div>

    <h2>Register Students</h2>
  </div>  
  <br>
  <div class="row justify-content-center ">
    <img src="knust.png" alt="LOGO" class="img rounded" id="admin" >
  </div>
  </center>
 <br> 
 <div class="form-group">
    <label for="text">Student's Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Student's Name" aria-describedby="text">
   </div>
 <div class="form-group">
    <label for="text">Student's Index Number</label>
    <input type="text" class="form-control" name="index_number" id="index" placeholder="Student's Index Number" aria-describedby="text">
   </div>
  <div class="form-group">
    <label for="email">Student's Email address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Student's email" aria-describedby="emailHelp">
   </div>
  <div class="form-group">
    <label for="pwd">Student's Password</label>
    <input type="password" class="form-control" name="password" placeholder="Student's Password" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Choose Student's College</label>
    <select class="form-control" name="college">
      <option value="College of Education">College of Education</option>
           <option value="College of Science">College of Science</option>
           <option value="College of Agriculture and Natural Resources CANR">College of Agriculture and Natural Resources CANR</option>
           <option value="College of Health Sciences">College of Health Sciences</option>
           <option value="College of Humanities and Social Sciences">College of Humanities and Social Sciences</option>
           <option value="College of Art and Built Environment">College of Art and Built Environment</option>
           <option value="College of Engineering">College of Engineering</option>
           <option value="College of Science">College of Science</option>
            
    </select >
  </div>
    <div class="text-right">
    <button type="submit" class="btn btn-success" name="sub">Submit Student</button>
</div>
</form>
 
  </div>
</body>
</html>