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
			include 'linha.php';
			$pilhaDeTokens = array();
		?>

		<div> 
			<?php
			    if(isset($_POST["codigo"])){
			        $codigo = str_split($_POST["codigo"]);
			        echo "<pre>";
			        print_r($codigo);
			        echo "</pre>";

			        $sentenca = null;

			        foreach ($codigo as $key => $value) {
			            $sentenca .= $value;
						echo "Valor atual: ". $value . "<br>";
						echo 'Sentença:  ' . $sentenca . "<br>";
						echo 'Verifica Sentença!<br>';

						

						
						if($codigo[$key] === ';') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}					
						if($codigo[$key] === ':') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}						






			            if(isset($codigo[$key+1]) && $sentenca != '') {
			            	echo "Proximo valor: ". $codigo[$key+1] . "<br>";			

							if($codigo[$key+1] === ' ' && verificaSentencaNaTabela($sentenca)){
								array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
								$sentenca = '';
							}
							
							if($codigo[$key+1] === ';' && !verificaSentencaNaTabela($sentenca)){
								array_push($pilhaDeTokens, new Linha('25', $sentenca));
								$sentenca = '';
							}

							if($codigo[$key+1] === ',' && !verificaSentencaNaTabela($sentenca)){
								array_push($pilhaDeTokens, new Linha('25', $sentenca));
								$sentenca = '';
							}			

							if($codigo[$key+1] === ' ' && !verificaSentencaNaTabela($sentenca) && $sentenca != ''){
								array_push($pilhaDeTokens, new Linha('25', $sentenca));
								$sentenca = '';
							}											
			            }else {
							if(verificaSentencaNaTabela($sentenca)){
								array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
								$sentenca = '';
							}
							// verificaSentencaNaTabela($sentenca);
							echo "Fim do código!<br>";
						}

						//  
						// if(verificaSentencaNaTabela($sentenca)) {
						// 	array_push($pilhaDeTokens, $sentenca);
						// 	$sentenca = '';

						// }
			        	echo "<br>------------------------<br>";

			            
			        }


					// AQUI TEM QUE RESETAR A TABELA
			        echo "<pre>";
			        print_r($pilhaDeTokens);
			        echo "</pre>";


			    }              

			?>           
		</div>

		<div class="form-container">
            <form class="formulario" action="index.php" method="post">
                <textarea name="codigo" class="lined" id="editor" rows="10" cols="60"></textarea>
                <input type="submit" value="Enviar">
            </form>

			<div class="tabela-resultado">
				<table>
					<tr>
						<th class="codigo">Código</th>
						<th class="palavra">Palavra</th>
					</tr>
					<?php if(isset($pilhaDeTokens)): ?>
						<?php foreach($pilhaDeTokens as $linha): ?>
						<tr>
							<td><?php echo $linha->codigo; ?></td>
							<td><?php echo $linha->sentenca; ?></td>
						</tr>
						<?php endforeach; ?>
					<?php endif; ?>
				</table>
			</div>
		</div>
    
    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script src="linedTextArea/jquery-linedtextarea.js"></script>
		<script>
			$(function() {
				$(".lined").linedtextarea(
					{selectedLine: 1}
				);
			});
			var post = <?php echo json_encode($_POST) ?>;
			console.log(post)
			if(post) {
				document.getElementById("editor").value = post;
			}
			

		</script>
	</body>
</html>