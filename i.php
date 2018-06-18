<?php

$angle=$_POST['angle'];

$days=0;
$hour=0;
$minutes=0;

if ($angle>360)
{
    $days=floor($angle/360);

  $hour=floor((fmod($angle,360))/15);
$minutes=($angle-($days*360+$hour*15))/0.25;
    echo "Day-",$days,"Hou=",$hour,"Min-",$minutes;

}

/*
 *
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
*/