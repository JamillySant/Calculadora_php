<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<?php
	$resultado = 0;		
		if(isset($_POST['submeter'])){			
			
			if($_POST['operacao']  == 'soma'){
				$resultado = $_POST['valor1'] + $_POST['valor2'];
			} else if($_POST['operacao'] == 'subtracao'){
				$resultado = $_POST['valor1'] - $_POST['valor2'];
			} else if($_POST['operacao'] == 'multiplicacao'){
				$resultado = $_POST['valor1'] * $_POST['valor2'];
			} else if($_POST['operacao'] == 'divisao'){
				$resultado = $_POST['valor1'] / $_POST['valor2'];
			}		
		}
	?>	
	<form class="form_calc" name="input" method="post">
		<fieldset class="borda">
			<h2>CALCULADORA</h2>

			<label class="Text">Número 1:
				<input class="caixa_texto" type="text" name="valor1" placeholder="digite o primeiro valor">
			<label class="Text">Número 2:
				<input class="caixa_texto" type="text" name="valor2" placeholder="digite o segundo valor"></br></br>

				<select  class="b_escolha" name="operacao">  
					<option value="soma">SOMA</option>   			
					<option value="subtracao">SUBTRAÇÃO</option>
					<option value="multiplicacao">MULTIPLICAÇÃO</option>
					<option value="divisao">DIVISÃO</option>
				</select>
    		</br></br> 	
    		<input class="button"name="submeter" type="submit" value="Clique Aqui!">
	</form>	
			<p class="result"> Resultado da Operação: <?php echo $resultado?></p>
		</fieldset>
</body>
</html>
<!-------------------------------------------------------------------------------------------------------->