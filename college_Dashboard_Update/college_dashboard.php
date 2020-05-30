<!DOCTYPE html>
<html>
<head>
  <title>VOTING APP: COLLEGE/DASHBOARD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<style type="text/css">

.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #FFF; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
  border-right: 3px solid green;
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: green;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  font-size: 36px;
  margin-left: 120px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 32px;
  text-decoration: none;
  font-size: 20px;
  color: green;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;

}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}
.active {
  background-color: lightgreen;
  color: black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #fff;
  padding-left: 8px;
}


.fa-caret-down {
  float: right;
  padding-right: 8px;
}
</style>
<body>




  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="row justify-content-center ">

  <img src="knust.png" alt="LOGO" class="img rounded" height="100" width="170" id="admin"  >
</div>


<h5 class="bg-white text-success text-center" >KNUST COLLEGE VOTING</h5>
  <span>
    <div class="text-center" >
        <h4 > College Dashboard</h4>
        
  <hr style="border-bottom: 1px solid green; margin-top:30px; margin-right: 5px;  margin-left: 5px" >
      </div>
  </span>
  <div style="margin-left: 0px; margin-top: 10px">
  <button class="dropdown-btn"><i class="far fa-hand-point-right"></i> Polls
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="create_poll.php" target="display"><i class="fas fa-angle-right"></i> Create a Poll</a>
    <a href="manage_poll.php" target="display"><i class="fas fa-angle-right"></i> Manage Poll</a>
      <hr style="border-bottom: 1px solid green; margin-top:30px; margin-right: 5px;  margin-left: 5px" >

    
  </div>

  <a href="on_going_poll.html" target="display"><i class="far fa-hand-point-right"></i> Ongoing Poll</a>

  <button class="dropdown-btn"><i class="far fa-hand-point-right"></i> Membership
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    
    <button class="dropdown-btn"><i class="fas fa-angle-right"></i> +/-Students
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="import_students.php" target="display"><button class="btn btn-info" style="margin-left:2px ; margin-top: 10px; ">Import students
   
  </button></a>
    <a href="students.php" target="display"><i class="fas fa-angle-double-right"></i> +Student</a>
    <a href="view_students.php" target="display"><i class="fas fa-angle-double-right"></i>View Students</a>
    


    <a href="stu_del_yes_no.php" target="display"><button class="btn btn-danger" style="margin-left:2px ; margin-top: 10px; ">Clear Student's Database
    </button></a>
      <hr style="border-bottom: 1px solid green; margin-top:30px; margin-right: 5px;  margin-left: 5px" >

    
 
  </div>
    <a href="see_candidates.php" target="display"><i class="fas fa-angle-right"></i> See Candidates</a>
    
  </div>
  

  <hr style="border-bottom: 1px solid green; margin-top:30px; margin-right: 5px;  margin-left: 5px" >
  <a href="change_password.php" target="display">Change Password</a>
<a href="index.html" onclick="return confirm('Are you sure to logout?');">Logout</a>
  </div>
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()">

		<div class="row">
<div style="margin-left: 15px;padding-left: 20px">
	<img src="knust.png" alt="LOGO" class="img rounded" height="50" width="85" id="admin"  >
	<h6>Dashboard</h6>
</div>
		
		<div class="container">
	<h1 class="bg-white text-success text-center" style="line-height: 125%">KNUST COLLEGE VOTING</h1>
	<span>
		<div class="text-center">
				<h4 > College Dashboard</h4>
			</div>
	</span>
	</div>
	</div>




</span>





<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
  <div style="margin-left: 0%; padding: 2%">
  		<iframe width="100%" height="700" src="welcome.html" src="login.html" src="change_password.php" src="home.html" style="border-style: none;border-top: 2px solid green;" class="" name="display">	

  		</iframe>
</div>

</div>

<script type="text/javascript">

$(document).ready(function(){
  setTimeout(function(){
    $('.alert').hide();
  },3000);
})

/* Set the width of the side navigation to 220px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "220px";
  document.getElementById("main").style.marginLeft = "220px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>

<script type="text/javascript">
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
  </body>
  </html>