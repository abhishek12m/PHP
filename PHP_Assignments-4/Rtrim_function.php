<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>rtrim()</title>
</head>

<?php

if (isset($_POST['md-btn'])) {
    $str = $_POST['md5'];
    $charlist = $_POST['md5_1'];

    $result = rtrim($str, $charlist);
}

?>

<body>



    <div class="container">

        <form action="" method="POST">
            <p><b>4. The <u>rtrim()</u> function removes whitespace or other predefined characters from the right side of a string.</b></p>
            <input type="text" name="md5" placeholder="Enter a string value" required> <input type="text" name="md5_1" placeholder="Enter escape chars (optional)" title="Specifies which characters to remove from the string. If omitted, all of the following characters are removed:
\0 - NULL, \t - tab, \n - new line, \x0B - vertical tab, \r - carriage return, ordinary white space"><br><br>
            <input type="submit" name="md-btn" value="Trim">
            <b>&nbsp;Result:&nbsp;</b><input type="text" value="<?php echo $result; ?>" readonly>
        </form>
        <div class="watermark">
            PHP ASSIGNMENT-4
        </div>
    </div>
</body>

</html>