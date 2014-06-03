<?php 


$cnt = 0 ;
$StartNum = 2 ;

echo "<table border=1>";

while ($StartNum < 1000 ) { 
$div_count=0; 
for ( $i=1; $i<=$StartNum; $i++) { 
if (($StartNum%$i)==0) { 
$div_count++; 
} 
} 
if ($div_count < 3) { 

if($cnt % 25 == 0 or $cnt == 0){
echo "<tr>";
}

echo "<td>".$StartNum."</td> ";



 $cnt = $cnt+1; 
}
 $StartNum = $StartNum+1;
 }

echo "  </table>";

?>