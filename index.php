<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Compilador</title>
        <link href="linedTextArea/jquery-linedtextarea.css" type="text/css" rel="stylesheet" />
        <link href="styles/style.css?<?php echo strtotime(date('Y-m-d H:i:s')); ?>" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php
			include 'funcoes.php';
			$pilhaDeTokens = array('1' => 'Program', '25' => 'teste');
		?>           

		<div class="form-container">
            <form class="formulario" action="index.php" method="post">
                <textarea name="codigo" class="lined" rows="10" cols="60"><?php if(isset($_SESSION['codigo'])) { echo $_SESSION['codigo']; } ?></textarea>
                <input type="submit" value="Enviar">
            </form>

			<div class="tabela-resultado">
				<table>
					<tr>
						<th class="codigo">Código</th>
						<th class="palavra">Palavra</th>
					</tr>
					<?php if(isset($pilhaDeTokens)): ?>
						<?php foreach($pilhaDeTokens as $key => $pilha): ?>
						<tr>
							<td><?php echo $key; ?></td>
							<td><?php echo $pilha; ?></td>
						</tr>
						<?php endforeach; ?>
					<?php endif; ?>
				</table>
			</div>
		</div>



		<div> 
			<?php
			    if(isset($_POST["codigo"])){

			    	$_SESSION['codigo'] = $_POST["codigo"];

			        $codigo = str_split($_POST["codigo"]);
			        echo "<pre>";
			        print_r($codigo);
			        echo "</pre>";

			        $sentenca = null;
//			        $pilhaDeTokens = array('1' => 'Program', '25' => 'teste');

			        foreach ($codigo as $key => $value) {
			            $sentenca .= $value;
						echo "Valor atual: ". $value . "<br>";
						echo 'Sentença:  ' . $sentenca . "<br>";
						echo 'Verifica Sentença!<br>';

						
						// verifica se existe proximo valor
			            if(isset($codigo[$key+1])) {
			            	echo "Proximo valor: ". $codigo[$key+1] . "<br>";			
							
							if($codigo[$key+1] === ';' && !verificaSentencaNaTabela($sentenca)){

								$pilhaDeTokens['25'] = getCodigo($sentenca);
								// array_push($pilhaDeTokens, );
								echo "RETURN 25!!!";
							}
			            }else {
							echo "Fim do código!<br>";
						}


						//  
						// if(verificaSentencaNaTabela($sentenca)) {
						// 	array_push($pilhaDeTokens, $sentenca);
						// 	$sentenca = '';
							
						// }
			        	echo "<br>------------------------<br>";

			            
			        }

			    }              

			?>           
		</div>
    
    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script src="linedTextArea/jquery-linedtextarea.js"></script>
		<script>
			$(function() {
				$(".lined").linedtextarea(
					{selectedLine: 1}
				);
			});
		</script>
	</body>
</html>