<?php
$numbers=[1,2,3,4,5,6,7,8,9,10];
function even_number($inputnumbers)

{
    $l=count($inputnumbers);
 for($i=0;$i<$l;$i++){  
  $r=$inputnumbers[$i]%2;
if($r==1)
{
    echo $inputnumbers[$i];
}
}
}

even_number($numbers);