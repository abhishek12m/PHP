<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p class="question2">

        <b>Q2.</b>Write a PHP script to check weather a inputted number is ADAM number or not.<br>
        Such as<br>
        Description:<br>
        Input number is : 12<br>
        No square the number : 144<br>
        Reverse the number : 441<br>
        Underoot the number : 21<br>
        Now again reverse the number : 12<br>
        <br>
        Instructions:<br>
        If inputted number is matched with the last step number so number is ADAM such as 12 is a
        ADAM<br>
    </p>
    <hr>
    <form action="" class="form" method="post">
        <label for="">Enter The Number</label>
        <input type="text" name="user_number">
        
        <br>
        <button type="submit" name="submit">Test me</button>
        <?php
        echo "<br>";
      if(isset($_POST['submit']))
       {
       $num_one=$_POST['user_number'];
       $square=pow($num_one,2);
       $rev=strrev($square);
       $unroot=sqrt($rev);
       $rev_unroot=strrev($unroot);
       if($rev_unroot==$num_one){
           echo "The  Given Number is adam Number ";
       }
       else{
           echo "The Given Number is not Adam Number";
       }
    
       }
    
      ?>
    </form>

</body>
</html>