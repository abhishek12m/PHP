<?php
$unit=100;
{
if($unit>0 && $unit<=50)
{
echo('Rs. 3.50/unit');
}
elseif($unit>50 && $unit<=150)
{
echo('Rs. 4.00/unit');
}
elseif($unit>150 && $unit<=250)
{
echo('Rs. 5.20/unit');
}
elseif($unit>250)
{
echo('Rs. 6.50/unit');
}
else
{
echo("Invalid Input");
}
}
?>