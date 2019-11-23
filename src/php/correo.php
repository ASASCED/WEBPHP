<!doctype html>
<html>
<head>

<title>Correo</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body>
<form action="env_mail.php" method="post" enctype="multipart/form-data">
        <div class="grid">
            <h1>Enviar correo</h1>     
          
		<input name="email" type="text" placeholder="Destino">
		<br><br>
		<input name="asunto" type="text" placeholder="Asunto">
		<br><br>
		<input name="comentario" type="text" placeholder="Comentario">
		<button>Enviar Correo</button>
	</form>
        
        </div>
 
</body>

</html>