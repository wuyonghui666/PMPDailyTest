<?php
function Sum_Solution($n)
{
    $num= $n;
    $num && ($sum+=Sum_Solution($n-1));
    return $num;
    

}
echo Sum_Solution(5);