<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
    <table style="width:11500px">
        <?php
        echo "<tr>";
           function table ($num,$num1){
                while($num!=$num1+1){
                    echo "<td>";
                    echo "<th>";
                    $i=1;
                    while($i!=11){
                        $re=$num*$i;
                        echo "$num * $i = $re <br> <hr>";
                        $i++;
                    }
                    echo "</th>";
                    $num++;
                    echo "</td>";
                }
            }
            table(1,100);
        echo "</tr>";
        ?>
    </table>
</body>
</html>