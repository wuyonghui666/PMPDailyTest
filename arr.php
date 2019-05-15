<?php
$arr = [0,1,2,3,4,5,6,7,8,9];
$ji=$sou=[];
foreach($arr as $key=>$val)
{
    if($val%2==1)
    {
        $ji[]=$val;
    }else
    {
        $sou[]=$val;
    }
}
print_r(array_merge($ji,$sou));