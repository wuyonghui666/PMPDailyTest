<?php

function GetUglyNumber_Solution($index)
{
    while($index%2 == 0)
    {
        $index = $index/2;
    }

    while($index%3 == 0)
    {
        $index = $index/3;
    }
    while($index%5 == 0)
    {
        $index = $index/5;
    }

    if($index == 1)
    {
        return '丑数';
    }else
    {
        return '非丑';
    }


}
echo GetUglyNumber_Solution(33);