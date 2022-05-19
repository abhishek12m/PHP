<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>str_replace()</title>

</head>

<?php

if (isset($_POST['md-btn'])) {
    $str = $_POST['md5'];
    $find = $_POST['md5_1'];
    $replace = $_POST['md5_2'];

    $result = str_replace($find, $replace, $str);
}

?>

<body>



    <div class="container">

        <form action="" method="POST">
            <p style="font-size: 20px;"><b>5. The <u>str_replace()</u> function replaces some characters with some other characters in a string.</b></p>
            <input type="text" name="md5" placeholder="Enter the 'string' to be searched" required value="<?php echo $str; ?>"><br><br>
            <input type="text" name="md5_1" placeholder="Enter the value to find" required><br><br>
            <input type="text" name="md5_2" placeholder="Enter the value to replace the value in find" required><br><br>

            <input type="submit" name="md-btn" value="Get new string">&nbsp;&nbsp;

            <b>Result:&nbsp;</b><input type="text" value="<?php echo $result; ?>" readonly title="<?php echo $result ?>">
        </form>
        <div class="watermark">
            PHP ASSIGNMENT-4
        </div>
    </div>
</body>

</html>