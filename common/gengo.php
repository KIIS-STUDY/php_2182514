<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> くるまる農園</title>
    </head>
<body>

<?php

require_once('../common/common.php');

$seireki= $_POST['seireki'];

$wareki=gengo($seireki);
print $wareki;

function gengo($seireki)
{
    if(1868 <= $seireki && $seireki <= 1911)
    {
        $gengo ='明治';
    }

    if(1912 <= $seireki && $seireki <= 1925)
    {
        $gengo ='大正';
    }

    if(1926 <= $seireki && $seireki <= 1988)
    {
        $gengo ='昭和';
    }

    if(1989 <= $seireki && $seireki <= 2018)
    {
        $gengo ='平成';
    }

    if(2019 <= $seireki)
    {
        $gengo ='令和';
    }
    return($gengo);
}


?>
</body>
</html>
