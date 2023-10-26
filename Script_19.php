<?php 
$num=13;
$count=0;

for($i=1;$i<=$num;$i++)
{
    if(($num%$i)==0)
    {
        $count++;
    }
}
if($count<3)
{
    echo "$num is Prime Number";
}
else
{
    echo "$num is not a Prime Number";
}

?>