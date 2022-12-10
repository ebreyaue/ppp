<html><head><title>practice 1</title></head><body>

<?php
//print_r($_REQUEST);
$words= array("sun","moon","sky","light","star","rain");


for($i=0;$i<count($words);$i++)
{
if($_REQUEST["word_".$i] == $words[$i])
{
echo "<p>The word ".$words[$i]." is correct </p>";    
}
else
{
echo"<p>The word ".$word[$i]." is incorrect   You wrote: <b>".$_REQUEST["word_".$i]."</b></p>";    
}
}
?> 

</body></html>


