<?php
$quant1 = 70;
$quant2 = 100;
$price1 = 1035;
$price2 = 1200;
$d1 = $price1/$quant1;
$d2 = $price2/$quant2;
if($d1<$d2)
{echo "deal 1 is best";}
else
{echo "deal 2 is best"; }
?>