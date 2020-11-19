<?php

function conecta_bd()
{
$criar_con=mysqli_connect("localhost","root","usbw","sistema2");
if ($criar_con)
return($criar_con);
return(FALSE);
}
?>
