<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>md5()</title>

</head>

<?php

if (isset($_POST['md-btn'])) {
    $md5 = $_POST['md5'];
    $md5_1 = $_POST['md5_1'];

    $result = md5($md5, $md5_1);
}

?>

<body>



    <div class="container">

        <form action="" method="POST">
            <p style="font-size: 20px;"><b>1. The 'md5()' function calculates the MD5 hash of a string.</b></p>
            <input type="text" name="md5" placeholder="Enter a string value" required> <input type="text" name="md5_1" placeholder="Enter raw( i.e. TRUE, FALSE)"><br><br>
            <input type="submit" name="md-btn" value="Get md5 hash code">
            <b>Result:&nbsp;</b><input type="text" value="<?php echo $result; ?>" readonly>
        </form>
        <div class="watermark">
            PHP ASSIGNMENT-4
        </div>
    </div>
</body>

</html>