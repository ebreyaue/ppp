<html><head><title>practice 2</title></head><body>
<?php
$fields = $_REQUEST["fields"];


echo "<h1>Results</h1>";
for($i=0;$i<$fields;$i++)
    {               
      $price = $_REQUEST["price_".$i];
   echo "<span><p>Product: ".$_REQUEST["product_".$i]."</p><p>Price: $".$price."</p><p> Price with discount: $".$price * 0.65."</p></span>";
    }
?>
</body></html>
