<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
        }
        td {
            text-align: center;
            /* height: 50px;
            width: 50px; */
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table style="width:11500px">
        <!-- Tables -->
        <?php
            $from = 1;
            $to = 100;
            echo "<tr>";
            for ($i = $from; $i <= $to; $i++) {
                
                echo "<td>";
                for ($j = $from; $j <= 10; $j++) {
                    
                    $result = $i * $j;
                    echo "$i * $j = $result <br>";
                }
                echo "</td>";
            }
            echo "</tr>";
        ?>
    </table>

</body>
</html>