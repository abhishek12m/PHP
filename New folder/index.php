<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            background-color:#eee;
        }
        input{
            height:30px;
            width:280px;
        }
    </style>
</head>
<body>
    <form action="./home.php" method="post">
        <table align="center">
       <tr> <td>Enter Your username</td><td><input type="text" name="username" placeholder="username"></td></tr>
        <tr><td>Enter your password</td><td><input type="text" name="password" placeholder="password"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="login"></td></tr>
        </table>
    </form>
    
    <?php
        // PHP code goes here
    ?>
</body>
</html>