<html><head><title><?php echo $_SERVER["SCRIPT_NAME"];?></title></head><body>

<?php
require_once("../lib/forms.php");
echo "<h1>Practice 1 </h1>";
echo "<p> guess the words.</p>";

$words= array("sun","moon","sky","light","star","rain");
echo form_header("answers.php");
for($i=0;$i<count($words);$i++)
{               
echo "<label> The Word ".str_shuffle($words[$i])." <label><input type='text' name='word_".$i."'><br>";
}
echo $button;
echo $close_form

?>

</body></html>