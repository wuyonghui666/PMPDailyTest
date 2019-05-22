<?php
// use PHPUnit\Framework\MockObject\Stub\ReturnReference;

$str = "student. a am I";

function ReverseSentence($str)
{
    $arr = explode(' ',$str);
    krsort($arr);
    foreach($arr as $key=>$val)
    {
    echo $val."&nbsp;";
    }
    
}

 echo ReverseSentence($str);