<?php
$str = 'Burch Jr, Philip H. , The American establishment, Research in political
economy 6(1983), 83-156';
$arr = explode(',',$str);
echo(gettype($str));echo "<br>";
echo(gettype($arr));echo "<br>";
print_r($arr);
?>