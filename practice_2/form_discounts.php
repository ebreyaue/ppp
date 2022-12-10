<html><head><title>practice 2</title></head><body>

<?php
require_once("../lib/forms.php");

$fields = $_REQUEST["fields"];

echo form_header("discount.php?fields=".$fields."");

    for($i=0;$i<$fields;$i++)
    {               
        echo "<p><label> Product ".$i."<label><input type='text' name='product_".$i."'><br>";
        echo "<label> Price $<label><input type='text' name='price_".$i."'><br></p>";
    }

echo $button;
echo $close_form
?>
</body></html>