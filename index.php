<!-- https://compiladoraula.000webhostapp.com/ -->
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
					$codigo = preg_replace("/\s+/", " ", $_POST["codigo"] );

			        $codigo = str_split(strtoupper($codigo));
					
					 
					// DEBUG CÓDIGO INTEIRO EM LETRAS
			        // echo "<pre>";
			        // print_r($codigo);
			        // echo "</pre>";

			        $sentenca = null;
					$prox = null;
					$estado = 1;

			        foreach ($codigo as $key => $atual) {
						// DEBUG VALORES NO LOOP
						// echo "--------- INÍCIO DE ITERAÇAO!------<br>";
			            // echo "Estado: ". $estado. "<br>";
						// echo "Valor atual: ". $atual . "<br>";
						if(isset($codigo[$key+1])) {
							$prox = $codigo[$key+1];
							// echo "Proximo: ". $prox . "<br>";
						}
			            // echo "Sentença: ". $sentenca. "<br><br>";

						// VERIFICAÇÕES

						// STRING
						if (ctype_alpha($atual) && $estado == 1) {
							$estado = 2;
						 	$sentenca .= $atual;		

							if (!ctype_alpha($prox) && !is_numeric($prox)) {
								if(verificaSentenca($sentenca)){
									array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
									$sentenca = "";
									$estado = 1;
								} else {
									array_push($pilhaDeTokens, new Linha(25, $sentenca));
									$sentenca = "";
									$estado = 1;									
								}
							}								
							continue;
						}

						// Concatena a letra ou numero na STRING
						if (ctype_alpha($atual) || is_numeric($atual) && $estado == 2) {
							$sentenca .= $atual;
							// se o proximo é delimitador							
						 	if (!ctype_alpha($prox) && !is_numeric($prox)) {
						 		// echo "é delimitador, VAIIII ENTRARR NO IFEEE sentença: ".$sentenca."<br>";
						 		if(verificaSentenca($sentenca)){
						 			array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
						 			$sentenca = '';
						 			$estado = 1;
						 			continue;
						 		} else {
						 			array_push($pilhaDeTokens, new Linha(25, $sentenca));
						 			$sentenca = '';
						 			$estado = 1;
						 			continue;								
						 		}
						 	}
						 	continue;
						}

		
						// INTEIROS
						if (is_numeric($atual) && $estado == 1) {
							$estado = 4;
						 	$sentenca .= $atual;
							if (!ctype_alpha($prox) && !is_numeric($prox)) {
								array_push($pilhaDeTokens, new Linha(26, "Inteiro"));
								$sentenca = "";
								$estado = 1;
							}		
							continue;							 
						}
						// concatena os int
						if (is_numeric($atual) && $estado == 4) {
						 	$sentenca .= $atual;
							if (!ctype_alpha($prox) && !is_numeric($prox)) {
								array_push($pilhaDeTokens, new Linha(26, "Inteiro"));
								$sentenca = "";
								$estado = 1;
							}				
							continue;
						}					


						// simbolos SOZINHOS
						if ($atual == ";" && $estado == 1) {							
							array_push($pilhaDeTokens, new Linha(getCodigo(";"), ";"));
							$sentenca = '';
							$estado = 1;
							continue;								
						}
						if ($atual == "," && $estado == 1) {							
							array_push($pilhaDeTokens, new Linha(getCodigo(","), ","));
							$sentenca = '';
							$estado = 1;
							continue;								
						}		
						if ($atual == "=" && $estado == 1) {							
							array_push($pilhaDeTokens, new Linha(getCodigo("="), "="));
							$sentenca = '';
							$estado = 1;
							continue;								
						}						
						if ($atual == "+" && $estado == 1) {							
							array_push($pilhaDeTokens, new Linha(getCodigo("+"), "+"));
							$sentenca = '';
							$estado = 1;
							continue;								
						}			
						if ($atual == "-" && $estado == 1) {							
							array_push($pilhaDeTokens, new Linha(getCodigo("-"), "-"));
							$sentenca = '';
							$estado = 1;
							continue;								
						}	
						if ($atual == "*" && $estado == 1) {							
							array_push($pilhaDeTokens, new Linha(getCodigo("-"), "-"));
							$sentenca = '';
							$estado = 1;
							continue;								
						}	
						if ($atual == "[" && $estado == 1) {							
							array_push($pilhaDeTokens, new Linha(getCodigo("["), "["));
							$sentenca = '';
							$estado = 1;
							continue;								
						}	
						if ($atual == "]" && $estado == 1) {							
							array_push($pilhaDeTokens, new Linha(getCodigo("]"), "]"));
							$sentenca = '';
							$estado = 1;
							continue;								
						}	
						if ($atual == "(" && $estado == 1) {							
							array_push($pilhaDeTokens, new Linha(getCodigo("("), "("));
							$sentenca = '';
							$estado = 1;
							continue;
						}	
						if ($atual == ")" && $estado == 1) {							
							array_push($pilhaDeTokens, new Linha(getCodigo(")"), ")"));
							$sentenca = '';
							$estado = 1;
							continue;								
						}	
						

						// DUPLOS

						// :  eee  :=
						if ($atual == "." && $estado == 1) {							
							if($prox == ".") {
								$estado = 14;		
								$sentenca .= $atual;
							} else {
								array_push($pilhaDeTokens, new Linha(getCodigo("."), "."));
								$sentenca = '';
								$estado = 1;
							}
							continue;								
						}	
						if ($sentenca == "." && $atual == "." && $estado == 14) {		
							array_push($pilhaDeTokens, new Linha(getCodigo(".."), ".."));
							$sentenca = '';
							$estado = 1;		
							continue;				
						}

						// :  eee  :=
						if ($atual == ":" && $estado == 1) {							
							if($prox == "=") {
								$estado = 10;		
								$sentenca .= $atual;
							} else {
								array_push($pilhaDeTokens, new Linha(getCodigo(":"), ":"));
								$sentenca = '';
								$estado = 1;
							}
							continue;								
						}	
						if ($sentenca == ":" && $atual == "=" && $estado == 10) {		
							array_push($pilhaDeTokens, new Linha(getCodigo(":="), ":="));
							$sentenca = '';
							$estado = 1;		
							continue;				
						}


						// > >=
						if ($atual == ">" && $estado == 1) {							
							if($prox == "=") {
								$estado = 12;		
								$sentenca .= $atual;
							} else {
								array_push($pilhaDeTokens, new Linha(getCodigo(">"), ">"));
								$sentenca = '';
								$estado = 1;
							}
							continue;								
						}	
						if ($sentenca == ">" && $atual == "=" && $estado == 12) {		
							array_push($pilhaDeTokens, new Linha(getCodigo(">="), ">="));
							$sentenca = '';
							$estado = 1;		
							continue;				
						}

						// < <= <>
						if ($atual == "<" && $estado == 1) {							
							if($prox == "=") {
								$estado = 13;		
								$sentenca .= $atual;
								continue;								
							} 
							if($prox == ">") {
								$estado = 14;		
								$sentenca .= $atual;
								continue;								
							} 							
							array_push($pilhaDeTokens, new Linha(getCodigo("<"), "<"));
							$sentenca = '';
							$estado = 1;
							continue;								
						}	
						if ($sentenca == "<" && $atual == "=" && $estado == 13) {		
							array_push($pilhaDeTokens, new Linha(getCodigo("<="), "<="));
							$sentenca = '';
							$estado = 1;		
							continue;				
						}
						if ($sentenca == "<" && $atual == ">" && $estado == 14) {		
							array_push($pilhaDeTokens, new Linha(getCodigo("<>"), "<>"));
							$sentenca = '';
							$estado = 1;		
							continue;				
						}

						// echo "--------- FIM DE ITERAÇAO!------<br>";
					}

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
    
    	<script src="js/custom.js"></script>
		<script src="linedTextArea/jquery-linedtextarea.js"></script>
		<script>
			$(function() {
				$(".lined").linedtextarea(
					{selectedLine: 1}
				);
			});
			var post = <?php echo json_encode($_POST) ?>;
			console.log(post)
			if(post.length != 0) {
				document.getElementById("editor").value = post.codigo;
			}
			

		</script>
	</body>
</html>