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
		&#128072;&#127995;<a href=".\" class="back"> Voltar</a>
		<div class="formulario">
			<form id="register" method="POST" action="cadastro.php">
				<table>
					<tr>
						<td><label for="nome">Nome Completo</label></td>
						<td><input type="text" name="tnome" id="nome" autocomplete="off"></td>
					</tr>
					<tr>
						<td><label for="cpf">CPF</label></td>
						<td><input type="number" name="tcpf" id="cpf" minlength="11" maxlength="11" autocomplete="off"></td>
					</tr>
					<tr>
						<td><label for="nascimento">Data de Nascimento</label></td>
						<td><input type="date" name="tnascimento" id="nascimento"></td>
					</tr>
					<tr>
						<td><label for="celular">Celular</label></td>
						<td><input type="tel" name="tcelular" id="celular" placeholder="(00) 12345-6789" minlength="11" maxlength="12" autocomplete="off"></td>
					</tr>
					<tr>
						<td><label for="pass1">Senha</label></td>
						<td><input type="password" name="tpass1" id="pass1"></td>
					</tr>
					<tr>
						<td><label for="pass2">Confirmar</label></td>
						<td><input type="password" name="tpass2" id="pass2"></td>
					</tr>
					<!-- <tr>
						<td><label for="corte">Selecione o corte</label></td>
						<td>
							<select>
								<option value="cabelo">Cabelo</option>
								<option value="cabeloebarba">Cabelo e barba</option>
								<option value="barba">Barba</option>
							</select>
						</td>
					</tr> -->
				</table>
				<button type="submit" name="insert" value="Insert">Confirmar</button>
			</form>
		</div>
	</section>
	<?php
		$servername = "localhost";
		$username = "leonardo";
		$password = "102030";
		$dbname = "barbearia";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		if (isset($_POST['insert'])) {
			$senha = $_POST['tpass1'];
			$senhaC = $_POST['tpass2'];
			if ($senha != $senhaC) {
				echo "Senha diferentes!";
			} else if($senha == "") {
				echo "Campo de senha vazio.";
			} else {
				$nome = $_POST['tnome'];
				$cpf = $_POST['tcpf'];
				$nascimento = $_POST['tnascimento'];
				$celular = $_POST['tcelular'];
				$user[] = [
							null,
							$nome,
							$cpf,
							$nascimento,
							$celular,
							$senha
						];
				echo var_dump($user);
			}
		}
	?>
	<footer></footer>
</body>
</html>