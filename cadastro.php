<!DOCTYPE html>
<html>
<head>
	<?php require_once 'connection.php'; ?>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agenda Cabeleireiro</title>
	<?php 
		function erroSenha(){
			echo "<style type='text/css'>input[type=password] { border-bottom: 1px solid red; }</style>";
		}
	?>
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
						<td><input type="text" name="tnome" id="nome" autocomplete="off" value="<?php echo $_POST['tnome']??"" ?>" required></td>
					</tr>
					<tr>
						<td><label for="cpf">CPF</label></td>
						<td><input type="number" name="tcpf" id="cpf" minlength="11" maxlength="10"  autocomplete="off" value="<?php echo $_POST['tcpf']??"" ?>" required></td>
					</tr>
					<tr>
						<td><label for="nascimento">Data de Nascimento</label></td>
						<td><input type="date" name="tnascimento" id="nascimento" value="<?php echo $_POST['tnascimento']??"" ?>"></td>
					</tr>
					<tr>
						<td><label for="celular">Celular</label></td>
						<td><input type="tel" name="tcelular" id="celular" placeholder="(00) 12345-6789" minlength="11" maxlength="12" autocomplete="off" value="<?php echo $_POST['tcelular']??"" ?>"></td>
					</tr>
					<tr>
						<td><label>Sexo</label></td>
						<td><input style="width: 30px" type="radio" name="tsexo" id="sexo" value="M" checked>Masculino</input><br>
						<input style="width: 30px" type="radio" name="tsexo" id="sexo" value="F">Feminino</input></td>
					</tr>
					<tr>
						<td><label for="pass1">Senha</label></td>
						<td><input type="password" name="tpass1" id="pass1" required></td>
					</tr>
					<tr>
						<td><label for="pass2">Confirmar</label></td>
						<td><input type="password" name="tpass2" id="pass2" required></td>
					</tr>
				</table>
				<button type="submit" name="insert" value="Insert">Confirmar</button>
			</form>
			<?php
				if (isset($_POST['insert'])) {
					$senha = $_POST['tpass1'];
					$senhaC = $_POST['tpass2'];
					if ($senha != $senhaC || empty($_POST['tpass1']) || empty($_POST['tpass2'])) {
						erroSenha();
					} else {
						$nome = "'".$_POST['tnome']."'";
						$sexo = "'".$_POST['tsexo']."'";
						$cpf = "'".$_POST['tcpf']."'";
						$celular = "'".$_POST['tcelular']."'";
						$date = $_POST['tnascimento'];
						$senha = md5($senha);

						$sql = "INSERT INTO usuarios VALUES (NULL, $nome, $senha, '$date', $sexo, $celular, $cpf, NULL)";

						if ($conn->query($sql) === TRUE) {
							echo "<p style='color: green;'>Usuário criado com sucesso!<a href='.\''> <u>Entrar agora</u></a></p>";
						} else {
							echo "Error ".$sql."<br>".$conn->error;
						}
					
					$conn->close();
					
					}
				}
				?>
		</div>
	</section>
	<footer></footer>
</body>
</html>