<?php

$seireki=$_POST['seireki'];

$wareki=gengo($seireki);
// print $wareki;

function gengo($seireki)
{
    if(1868.4<=$seireki && $seireki<=1911.3)
    {
        $gengou='明治';
    }

    if(1911.4<=$seireki && $seireki<=1925.3)
    {
        $gengou='大正';
    }

    if(1925.4<=$seireki && $seireki<=1988.3)
    {
        $gengo='昭和';
    }

    if(1988.4<=$seireki && $seireki<=2019.3)
    {
        $gengo='平成';
    }

    if(2019.4<=$seireki)
    {
        $gengo='令和';
    }

    return($gengo);
}

?>