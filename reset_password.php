<!DOCTYPE html>
<html>
<head>
	<?php require_once 'connection.php'; ?>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resetar senha</title>
	<?php 
		function erroSenha(){
			echo "<style type='text/css'>input { border-bottom: 1px solid red; }</style>";
		}
	?>

</head>
<body>
	<header></header>
	<section>
		<div class="formulario">
			<form method="POST">
				<table>
					
					<tr>
						<td><label for="cpf">CPF</label></td>
						<td><input type="number" name="tcpf" id="cpf" autocomplete="off" value="<?php echo $_POST['tcpf']??""; ?>" required></td>
					</tr>

					<tr>
						<td><label for="pass1">Nova senha</label></td>
						<td><input type="password" name="tpass1" id="pass1" required></td>
					</tr>

					<tr>
						<td><label for="pass2">Confirmar senha</label></td>
						<td><input type="password" name="tpass2" id="pass2" required></td>
					</tr>
				</table>

				<button type="submit" name="submit">Confirmar</button>

			</form>
			<pre>
			<?php
				$cpf = $_POST['tcpf']??"";
				$pass1 = $_POST['tpass1']??"";
				$pass2 = $_POST['tpass2']??"";

				if (isset($_POST['submit'])) {
				
					$query = "SELECT * FROM usuarios";
					
					if ($conn->query($query) == TRUE) {
						
						$result = $conn->query($query);
						$row = mysqli_num_rows($result);
						
						while ($row = $result->fetch_assoc()) {
							if ($pass1 == $pass2 AND $cpf == $row["cpf"]) {
								
								$pass1 = "'".md5($pass1)."'";
								$cpf = "'".$cpf."'";
								$sql = "UPDATE usuarios SET senha = $pass1 WHERE cpf = $cpf";

								
								if ($conn->query($sql) == TRUE) {
									echo "<meta http-equiv='refresh' content='0;url=index.php'>";
									return;
								} else {
									echo "Error".$sql."<br>".$conn->error;
								}
							} else if ($pass1 != $pass2) {
								erroSenha();
								echo "<p style='color:red'>CPF e senha inválidos.</p>";
							}
						}
						if ($conn->query($sql) == FALSE) {
							echo "Error".$sql."<br>".$conn->error;
						}
					}
				}
			?>
		</pre>
		</div>
	</section>
</body>
</html>