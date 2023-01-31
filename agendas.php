<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<header></header>
	<section>
		<?php echo md5("102030"); ?>
		<div class="formulario">
			<form method="POST">
				<legend>AGENDA DE HORÁRIO</legend>
				<table>
					
					<tr>
						<td><label for="data_agenda">Selecione uma data</label></td>
						<td><input type="date" name="tdata_agenda" id="data_agenda" min="<?php echo date('Y-m-d'); ?>"></td>
					</tr>
					
					<tr>
						<td><label for="horario_agenda">Selecione o horário</label></td>
						<td><input type="time" name="thorario_agenda" id="horario_agenda"></td>
					</tr>
					
					<tr>
						<td><label>Selecione o corte</label></td>
						<td>
							<select name="corte">
								<option value="40">Cabelo</option>
								<option value="25">Barba</option>
								<option value="60">Cabelo e barba</option>
							</select>
						</td>
					</tr>
				</table>

				<button type="submit">Agendar</button>

			</form>
		</div>
	</section>
</body>
</html>