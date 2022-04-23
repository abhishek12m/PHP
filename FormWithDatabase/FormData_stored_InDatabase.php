<?php
$First_name=$_POST['fname'];
$last_name=$_POST['Sname'];

$ser_name="localhost";
$ser_user="root";
$ser_pass="";
$connection_check= mysqli_connect($ser_name,$ser_user,$ser_pass,"sectione");  // connection string
if(!$connection_check)
{
   // or we can use the die to print the message and exit the code
die("problem in connection".connect.error());
}

if(isset($_POST['save']))
{
$insert_query="INSERT INTO stu_record(First_name,Last_name) VALUES('$First_name','$last_name')";

if(mysqli_query($connection_check,$insert_query))
{
echo "data inserted";
}
else
{
echo " data not inserted";
}

}

// for display the result

if(isset($_POST['display']))
{
   $display_query="SELECT first_name,Last_name FROM stu_record";
   $data=mysqli_query($connection_check,$display_query);
   if(mysqli_num_rows($data)>0)
   {
      echo "<table border =2px solid black>";
      echo "<tr>";
      echo "<th>First Name</th>";
      echo "<th>last Name</th>";
      echo "</tr>";
   while($row = mysqli_fetch_array($data))
   {

      echo "<tr>";
      echo "<td>".$row['first_name']."</td>";
      echo "<td>".$row['Last_name']."</td>";
      echo "<td><input type=submit name=update value=update></td>";
      echo "<td><input type=submit name=delete value=delete></td>";
      echo "</tr>";
   }
   }
   else
   {
   echo "no record found";
   }
}


?>