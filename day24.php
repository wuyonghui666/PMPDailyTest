<?php 
function Add($num1, $num2)
{
    if($num1 == 0)
    {
        return $num2;
    }
    if($num2 == 2)
    {
        return $num1;
    }
    $num1 = array_sum($num1,$num2);
    return $num1;
}  
echo Add(0,1);