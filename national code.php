<?php

function check_national_code($value)
{
    if(!preg_match('/^[0-9]{10}$/',$value)) {
        return (bool) false;
    }
 
    for($i=0;$i<10;$i++)
        if(preg_match('/^'.$i.'{10}$/',$value)) {
            return (bool) false;
        }
 
    for($i=0,$sum=0;$i<9;$i++)
        $sum+=((10-$i)*intval(substr($value, $i,1)));
        $ret=$sum%11;
        $parity=intval(substr($value, 9,1));
        if(($ret<2 && $ret==$parity) || ($ret>=2 && $ret==11-$parity)) {
            return (bool) true;
        }
 
    return (bool) false;
 
}

?>