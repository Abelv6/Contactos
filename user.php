<?php
     $user=array("user01","user02","user03");
     $pass=array(123,456,789);

     $estado=false; 

   $nombre=$_POST['nombre'];
   $password=$_POST['password'];

   $tam=count($user); 

   for ($x=0; $x<$tam;$x++)
   {
       if ($user[$x]==$nombre && $pass[$x]==$password)
       {
           $estado=true;
       }
   }

   if ($estado)
   {
       header("location:contactos.html");
   }
   else 
   {
       header("location:Index.html");
   }
  ?>