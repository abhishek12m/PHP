<?php
$Name1=$_POST['name'];
$Email1=$_POST['email'];
$Phone1=$_POST['phone'];
$Message1=$_POST['message'];


$ser_name='localhost';
$ser_user='root';
$ser_pass="";
$conection_check=mysqli_connect($ser_name,$ser_user,$ser_pass,"PortfolioContactRecord");
if(!$conection_check){
    die("Problem in conection".connect.error());
}
if(isset($_POST['submit'])){
    $insert_query="INSERT INTO contact_record(Names,Email,Phone,Messages) VALUES('$Name1','$Email1','$Phone1','$Message1')";
    if(mysqli_query($conection_check,$insert_query)){
        echo '<script type="text/javascript">alert("Thank you for contacting us");
        location="http://127.0.0.1:5501/index.html";
        </script>';
    }
    else{
        echo '<script type="text/javascript">alert("Problem in connection, Please try again");
        location="http://127.0.0.1:5501/index.html";
        </script>';
    }
}





?>