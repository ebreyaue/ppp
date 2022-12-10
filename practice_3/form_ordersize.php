<html><head><title>practice 3</title></head><body>

<?php
require_once("../lib/forms.php");

$fields = $_REQUEST["fields"];

echo form_header("ordersize.php?fields=".$fields."");

    for($i=0;$i<$fields;$i++)
    {               
        echo "<p><label> Width <label><input type='text' name='width_".$i."'><br>";
        echo "<label>Height <label><input type='text' name='height_".$i."'><br></p>";
    }

echo $button;
echo $close_form;
?>
</body></html>