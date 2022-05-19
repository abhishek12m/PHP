<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>bintohex()</title>

</head>

<?php

if (isset($_POST['md-btn'])) {
    $str = $_POST['md5'];

    $result = bin2hex($str);
}

?>

<body>



    <div class="container">

        <form action="" method="POST">
            <p style="font-size: 20px;"><b>11. The <u>bin2hex()</u> function converts a string of ASCII characters to hexadecimal values.</b></p>
            <input type="text" name="md5" placeholder="Enter a string value" required value="<?php echo $str; ?>"><br><br>
            <input type="submit" name="md-btn" value="Hex-encode"> &nbsp;&nbsp;
            <b>Result:&nbsp;</b><input type="text" value="<?php echo $result; ?>" readonly title="The string can be converted back using the pack() function.">
        </form>
        <div class="watermark">
            PHP ASSIGNMENT-4
        </div>
    </div>
</body>

</html>