<?php
//array asociative
$nilai = array("web1"=>80, "web2"=>95, "algo"=>75);
//echo $nilai["algo"];

//print_r($nilai);
//var_dump($nilai);

echo "<h3>menampilkan data array asociative";
echo "<ul>";
foreach($nilai as $nlabel => $nval){
    echo "<li>". $nlabel. ":" . $nval . "</li>";
}
echo"</ul>";

$nilaimhs = array(
array("wahyudi","204010106", "algo","84"),
array("mita","20154216","web","52"),
array("rian","2421035","mtk","93")
);

echo $nilaimhs[0][1];
?>
