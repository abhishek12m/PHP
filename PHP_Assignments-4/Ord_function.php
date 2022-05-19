<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>ord()</title>

</head>

<?php

if (isset($_POST['md-btn'])) {
    $char = $_POST['md5'];

    $result = ord($char);
}

?>

<body>



    <div class="container">

        <form action="" method="POST">
            <p style="font-size: 20px;"><b>3. The <u>ord()</u> function is a inbuilt function in PHP that returns the ASCII value of the first character of a string.</b></p>
            <input type="text" name="md5" placeholder="Enter a string or character only" required><br><br>
            <input style="width: 30%;" type="submit" name="md-btn" value="Get ASCII value">
            <b>Result:&nbsp;</b><input type="text" value="<?php echo $result; ?>" readonly>
        </form>
        <div class="watermark">
            PHP ASSIGNMENT-4
        </div>
    </div>
</body>

</html>