<?php
$teman = array("wahyudi","santhi","yeyen","susanti","jarjit");

$teman[0] = "putu";
$teman[1] = "kadek";
$teman[2] = "wayan";
$teman[3] = "made";
$teman[4] = "komang";

echo "<h3>Daftar Teman</h3>";
echo "<ol>";
for ($i=0;$i<5;$i++){
    echo "<li>".$teman[$i]. "</li>";
}
echo"</ol>";

//Menggunakan Perulangan foreach
echo "<h3>Daftar Teman -Menggunakan Foreach</h3>";
echo "<ol>";
foreach($teman as $nval){
    echo "<li>".$nval."</li>";
}
echo "<h3>Daftar Teman-Menggunakan While</h3>";
echo "</ol>";
$i = 0;
while($i<count($teman)){
    echo "<li>".$teman[$i]."</li>";
$i++;
}
echo "</ol>";

?>