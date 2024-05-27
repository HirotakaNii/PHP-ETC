<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>formulário</title>
</head>
<body>
<form action="php" method="post">
	<label for="nom">nome</label>
	<input type="text" name="nom" maxlength="35" placeholder="Insira seu nome"autofocus required id="nom" autocomplete="true">
	</br>
	<label for="email">email</label>
     <input type="email" name="nam" placeholder="Insira seu email" required id="email"autocomplete= "true">
     	</br>
     <label for="idade">idade</label>
     <input type="number" name="idade" placeholder="Insira sua idade" required id="idade" autocomplete="true">
     <input type="submit" name="enviar">     

</form>

</body>
</html>