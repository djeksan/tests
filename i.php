<?php

var_dump($_POST['Line']);
$Line=$_POST['Line'];
$Number=$_POST['Number'];
$a=0;
var_dump($Line);
$Line = str_split($Line);

foreach ($Line as $value)
{
    if ($Number===$value){
        $a=$a+1;

    }
}
echo "a=",$a;
