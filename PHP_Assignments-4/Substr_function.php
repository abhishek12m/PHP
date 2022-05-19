<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>substr()</title>
    <style>

    </style>
</head>

<?php

if (isset($_POST['md-btn'])) {
    $str = $_POST['md5'];
    $start = $_POST['md5_1'];

    $result = substr($str, $start);
}

?>

<body>



    <div class="container">

        <form action="" method="POST">
            <p style="font-size: 20px;"><b>9. The <u>substr()</u> function returns a part of a string. </b></p>
            <input type="text" name="md5" placeholder="Enter the string to return a part of" required value="<?php echo $str; ?>"><br><br>
            <input type="number" name="md5_1" placeholder="Specifies where to start in the string" required value="<?php echo $start; ?>"><br><br>

            <input type="submit" name="md-btn" value="Get the string">&nbsp;&nbsp;

            <b>Result:&nbsp;</b><input type="text" value="<?php echo $result; ?>" readonly>
        </form>
        <div class="watermark">
            PHP ASSIGNMENT-4
        </div>
    </div>
</body>

</html>