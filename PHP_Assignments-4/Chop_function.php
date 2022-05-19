<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>chop()</title>

</head>

<?php

if (isset($_POST['md-btn'])) {
    $str = $_POST['md5'];
    $charlist = $_POST['md5_1'];

    $result = chop($str, $charlist);
}

?>

<body>



    <div class="container">

        <form action="" method="POST">
            <p><b>12. The <u>chop()</u>function removes whitespaces or other predefined characters from the right end of a string (Case-senstive).</b></p>
            <input type="text" name="md5" placeholder="Enter a string value" required value="<?php echo $str; ?>"> <input type="text" name="md5_1" placeholder="Enter value to chop" value="<?php echo $charlist; ?>" title="All of the following characters are removed:
\0 - NULL, \t - tab, \n - new line, \x0B - vertical tab, \r - carriage return, ordinary white space"><br><br>
            <input type="submit" name="md-btn" value="Chop">
            <b>&nbsp;Result:&nbsp;</b><input type="text" value="<?php echo $result; ?>" readonly>
        </form>
        <div class="watermark">
            PHP ASSIGNMENT-4
        </div>
    </div>
</body>

</html>