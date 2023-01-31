<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agenda Cabeleireiro</title>
</head>
<body>
	<header>
		<h1 id="titulo">Bem vindo a barbearia do Leonardo!</h1>
	</header>
	<section>
		<div class="formulario">
			<form class="login" method="POST">
				<table>
					<tr>
						<td><label for="cpf">CPF</label></td>
						<td><input type="number" name="tcpf" id="cpf" minlength="11" maxlength="11" autocomplete="off"></td>
					</tr>
					<tr>
						<td><label for="pass1">Senha</label></td>
						<td><input type="password" name="tpass1" id="pass1"></td>
					</tr>
				</table>
				<button type="submit">Entrar</button>
				<table style="text-align: center;">
					<tr>
						<td style="width: 200px"><sub><a href=".\reset-password.php">Esqueci minha senha</a></sub></td>
						<td style="width: 200px"><sub><a href=".\cadastro.php">Cadastra-se</a></sub></td>
					</tr>
				</table>
			</form>
		</div>
	</section>
	<footer></footer>
</body>
</html>