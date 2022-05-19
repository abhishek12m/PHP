<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>strcasecmp()</title>

</head>

<?php

if (isset($_POST['md-btn'])) {
    $str = $_POST['md5'];
    $str1 = $_POST['md5_1'];

    $res = strcasecmp($str, $str1);
    if ($res == 0) {
        $result = "Both strings are equal.";
    } else if ($res < 0) {
        $result = "String1 is less than string2.";
    } else if ($res > 0) {
        $result = "String1 is greater than string2";
    }
}

?>

<body>



    <div class="container">

        <form action="" method="POST">
            <p style="font-size: 20px;"><b>7. The <u>strcasecmp()</u> function compares two strings(case-insensitive).</b></p>
            <input type="text" name="md5" placeholder="Enter first string" required value="<?php echo $str; ?>"><br><br>
            <input type="text" name="md5_1" placeholder="Enter second string" required value="<?php echo $str1; ?>"><br><br>

            <input type="submit" name="md-btn" value="Compare">&nbsp;&nbsp;

            <b>Result:&nbsp;</b><input type="text" value="<?php echo $result; ?>" readonly>
        </form>
        <div class="watermark">
            PHP ASSIGNMENT-4
        </div>
    </div>
</body>

</html>