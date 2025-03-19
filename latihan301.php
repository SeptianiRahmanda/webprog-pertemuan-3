<?php
$awal =1;
$akhir = 10;
echo"<h3>Perulangan while</h3>";
while($awal <= $akhir){
    echo "perulangan ke-".$awal."<br>";
    $awal++;
}
$awal = 1;
echo "<h3>Perulangan do while</h3>";
do{
echo "perulangan ke-".$awal."<br>";    
$awal++;
}while($awal<=$akhir);

$awal =1;
echo"<h3>Perulangan for</h3>";
for($awal;$awal<=$akhir;$awal++){
    echo "perulangan ke-".$awal."<br>";
}