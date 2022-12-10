<?php

function form_header($destination)
{
$method="post";

return "<form action='".$destination."' method='".$method."'>";
}

$button="<button type='submit'>Enviar</button>";
$close_form = "</form>";
?>