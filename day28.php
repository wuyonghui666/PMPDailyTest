<?php
$target = 7 ;
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
function find($target,$array)
{
    foreach ($array as $val)
    {
        if (in_array($target,$val))
        {
            return true;
        }
    }
}
echo find($target,$array);