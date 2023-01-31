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
			echo "<style type='text/css'>input { border-bottom: 1px solid red; }</style>";
		}
	?>
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
						<td><input type="number" name="tcpf" id="cpf" minlength="11" maxlength="11" autocomplete="off" value="<?php echo $_POST['tcpf']??"" ?>"></td>
					</tr>
					
					<tr>
						<td><label for="pass1">Senha</label></td>
						<td><input type="password" name="tpass1" id="pass1" required></td>
					</tr>

				</table>
				
				<button type="submit" name="login" id="Login">Entrar</button>
				
				<table style="text-align: center;">
					
					<tr>
						<td style="width: 250px"><sub><a href=".\reset_password.php">Esqueci minha senha</a></sub></td>
						<td style="width: 250px"><sub><a href=".\cadastro.php">Cadastra-se</a></sub></td>
					</tr>
			
				</table>
				<?php 
					if (isset($_POST['login'])) {
						
						$cpf = "'".$_POST['tcpf']."'";
						$cpf2 = $_POST['tcpf'];
						$senha = "'".$_POST['tpass1']."'";
						$senha2 = $_POST['tpass1'];
						
						$sql = "SELECT cpf, senha FROM usuarios WHERE cpf = $cpf AND senha = $senha";

						$result = $conn->query($sql);

						if ($conn->query($sql) == TRUE) {
							$row = $result->fetch_assoc();
							if ($result->num_rows > 0) {
								if ($row["cpf"] == $cpf2 AND $row["senha"] == $senha2) {
									echo "<meta http-equiv='refresh' content='0;url=agendas.php'>";
								}
							} else {
								erroSenha();
								echo "<p style='color:red'>CPF e senha inválidos.</p>";
							}
						} else {
							echo "Error".$sql."<br>".$conn->error;
						}
					}
				?>
			</form>
		</div>
	</section>
	<footer></footer>
</body>
</html>