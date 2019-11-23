<?php
    
	 if(isset($_POST['email'])&&!empty($_POST['email'])&& 
	 isset($_POST['asunto'])&&!empty($_POST['asunto'])&&
	 isset($_POST['comentario'])&&!empty($_POST['comentario'])){
	$destino = $_POST['email'];
	   $as=$_POST['asunto'];
	$com=$_POST['comentario'];
	$headers="De : Luis <luis951221@gmail.com>\r\n";
    
    $exito=mail($destino,$as,$com,$headers);
	
	
   
    
	echo "Se ha enviado el correo correctamente";	
    
	}else{

     echo "Ocurrio un error";

     }



?>
