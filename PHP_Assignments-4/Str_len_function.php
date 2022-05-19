<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>strlen()</title>

</head>

<?php

if (isset($_POST['md-btn'])) {
    $str = $_POST['md5'];
    $result = strlen($str);
}

?>

<body>



    <div class="container">

        <form action="" method="POST">
            <p style="font-size: 20px;"><b>6. The <u>strlen()</u> function returns the length of a string.</b></p>
            <input type="text" name="md5" placeholder="Enter a string value" required title="Enter a string to get it's length." value="<?php echo $str; ?>"><br><br>
            <input type="submit" name="md-btn" value="Get the length">&nbsp;&nbsp;
            <b>Result:&nbsp;</b><input type="text" value="<?php echo $result; ?>" readonly>
        </form>
        <div class="watermark">
            PHP ASSIGNMENT-4
        </div>
    </div>
</body>

</html>