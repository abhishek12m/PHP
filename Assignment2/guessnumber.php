<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
</style>
</head>
<body>

    <p class="question1"><b>Q1. </b>You have to create a number game in which a random number is generate by the PHP script itself and then provide the user with input control what ever be the number user input in the field must be compare with the auto generated number and show a suitable message as per the condition: Input number is higher, input number is less and number is correct whenever the match is found game must be stopped<br>
    </p>
    <hr>
    <form action="" class="form" method="post">
        <label for="">Enter The Number</label>
        <input type="text" name="user_number">
        <br>
        <button type="submit" name="submit">Test me</button>
        <?php
       
      if(isset($_POST['submit']))
       {
       $r_num=rand(1,5);
       $num_one=$_POST['user_number'];
       
       echo "<br>";
      
        if($num_one==$r_num){
               echo "Congratulation ! Your Guess Number is True "."$num_one"."<br>";
              
           }
           elseif($num_one<$r_num){
               echo "Sorry!! Your Entered number is Less than the Guess number Again "."<br>";
              
           }
           else{
               echo "Sorry!  Your Entered number is Greater than the Guess number Again"."<br>";
               
           }
           

       }
       //include_once 'adam.php';
       
    
      ?>
    </form>

</body>
</html>