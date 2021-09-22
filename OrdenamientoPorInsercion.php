<?php
    function Insercion($A)
    {
        for ($i = 1; $i < sizeof($A); $i++)
        {
                 $v = $A[$i];
                 $j = $i - 1;
                 while ($j >= 0 && $A[$j] > $v)
                 {
                          $A[$j + 1] = $A[$j];
                          $j--;
                 }
                 $A[$j + 1] = $v;
        }
        return $A;
    }
    $VectorA=array(2,3,6,4,4,1);
    $VectorB=Insercion($VectorA);
    for($i=0;$i<sizeof($VectorB);$i++)
    {
        echo $VectorB[$i]."\n";
    }
?>