<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>number_format()</title>

</head>

<?php

if (isset($_POST['md-btn'])) {
    $number = $_POST['md5'];
    $dec = (int) $_POST['md5_1'];

    $result = number_format($number, $dec);
}

?>

<body>



    <div class="container">

        <form action="" method="POST">
            <p style="font-size: 20px;"><b>2. The <u>number_format()</u> function formats a number with grouped thousands. Note: This function supports one, two, or four parameters (not three)</b></p>
            <input type="text" name="md5" placeholder="Enter a number value" required> <input type="number" name="md5_1" placeholder="Enter decimals(i.e. 1,2,3,etc)""><br><br>
            <input type="submit" name="md-btn" value="Format this number">
            <b>Result:&nbsp;</b><input type="text" value="<?php echo $result; ?>" readonly>
        </form>
        <div class="watermark">
            PHP ASSIGNMENT-4
        </div>
    </div>
</body>

</html>