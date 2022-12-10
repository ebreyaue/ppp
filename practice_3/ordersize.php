<html><head><title>practice 3</title></head><body>

<?php
require_once("../lib/forms.php");

$fields= $_GET["fields"];
$area = array();
$tam = $fields;
$c=0;

for($i=0;$i<$tam;$i++)
{
$area[$i]= $_REQUEST["width_".$i] * $_REQUEST["height_".$i];
}

for($i=0;$i<$tam;$i++)
{
for($j=0;$j<$tam-1;$j++)
{

if($area[$j] < $area[$j+1])
{
$temp = $area[$j];
$area[$j]=$area[$j+1];
$area[$j+1]=$temp;
}

}
}

echo "<table border='1'><tr><td>#</td><td>AREA</td></tr>";
foreach($area as &$result)
{
$c+=1;    
echo "<tr><td>".$c."</td><td>".$result."</td></tr>";
}
echo "</table>";
?>
</body></html>

