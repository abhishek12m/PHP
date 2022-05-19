<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>strrpos()</title>

</head>

<?php

if (isset($_POST['md-btn'])) {
    $str = $_POST['md5'];
    $find = $_POST['md5_1'];
    $result = strrpos($str, $find);
}

?>

<body>



    <div class="container">

        <form action="" method="POST">
            <p style="font-size: 20px;"><b>8. The <u>strrpos()</u> function finds the position of the last occurrence of a string inside another string. Note: The strrpos() function is case-sensitive.

                </b></p>
            <input type="text" name="md5" placeholder="Enter the string to search" required value="<?php echo $str; ?>"><br><br>
            <input type="text" name="md5_1" placeholder="Enter the value to find" required><br><br>

            <input type="submit" name="md-btn" value="Get the position">&nbsp;&nbsp;

            <b>Result:&nbsp;</b><input type="text" value="<?php echo $result; ?>" readonly>
        </form>
        <div class="watermark">
            PHP ASSIGNMENT-4
        </div>
    </div>
</body>

</html>