<?php 


$cnt = 0 ;
$StartNum = 2 ;

while ($StartNum < 1000 ) { 
$div_count=0; 
for ( $i=1; $i<=$StartNum; $i++) { 
if (($StartNum%$i)==0) { 
$div_count++; 
} 
} 
if ($div_count < 3) { 
echo $StartNum." , ";
 $cnt = $cnt+1; 
}
 $StartNum = $StartNum+1;
 }



?>