<?php
if(isset($_POST["submit"]))
{

                $url='localhost';
                $username='root';
                $password='';
                $conn=mysqli_connect($url,$username,$password,"location");
          if(!$conn){
          die('Could not Connect My Sql:' .mysqli_error());
      }
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          $c = 0;
          while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                    {
          $name = $filesop[0];
          $index_number = $filesop[1];
          $email = $filesop[2];
          $password = $filesop[3];
          $college = $filesop[4];
          $sql = "insert into excel(name,index_number,email,password,college) values ('$name','$index_number','$email','$password','$college')";
          $stmt = mysqli_prepare($conn,$sql);
          mysqli_stmt_execute($stmt);

         $c = $c + 1;
           }

            if($sql){
               echo "sucess";
              
             } 
     else
     {
            echo "Sorry! Unable to import";
          }

}
?>




</body>
</html>