<!DOCTYPE html>
<html>
  <head>
    <title>MyPage</title>
  </head>
  <body>
    <h1>My page for Mathematics</h1>
    <br>
    <br>
    <form action="" method= "post">
    <h2>Enter two number's </h2>

    <label> First Number :</label>

    <input type="text" name="F_Number"> 

    <label> Second Number :</label>

<input type="text" name="S_Number">
<input type="submit" name ="Submit">
<br>
<br>
     <button>Sum</button>
 
     <button>Sum</button>
     </form>

     <?php
/* if(isset($_POST["submit"]))
{
 
 //Including dbconfig file.*/

/*Connection string of the Database */
include 'dbconfig.php';

$conn = OpenCon();
/*echo "Connected Successfully";*/
//CloseCon($conn);

 
 
$F_number = $_POST["F_Number"];
$S_Number = $_POST["S_Number"];
//$Fnumner = $_POST["L_number "];
//$school = $_POST["school"];

 $sql="INSERT INTO batchrecord (F_number,S_number) VALUES ('$F_number','$S_Number')";
 
 if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 
 


 ?>
  </body>
</html>