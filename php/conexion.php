<?php
function Conectarse()
{ if (!($link=mysqli_connect("localhost","root","")))
//if (!($link=mysqli_connect("localhost","hogarpue_hkchia","hkPassCinerea55")))
 // if (!($link=mysqli_connect("localhost","root","")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }

   if (!mysqli_select_db($link,"lacande")) 
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }



   return $link;
}
?>