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
					$prox = null;
					$estado = 1;

			        foreach ($codigo as $key => $atual) {
						echo "--------- INÍCIO DE ITERAÇAO!------<br>";
			            echo "Estado: ". $estado. "<br>";
						echo "Valor atual: ". $atual . "<br>";
						if(isset($codigo[$key+1])) {
							$prox = $codigo[$key+1];
							echo "Proximo: ". $prox . "<br>";
						}
			            echo "Sentença: ". $sentenca. "<br><br>";


						// VERIFICAÇÕES

						// se é caracter
						if (ctype_alpha($atual) && $estado == 1) {
							$estado = 2;
						 	$sentenca .= $atual;		

							if (!ctype_alpha($prox) && !is_numeric($prox)) {
								if(verificaSentenca22($sentenca)){
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



						// se o atual é letra ou numero
						if (ctype_alpha($atual) || is_numeric($atual) && $estado == 2) {
							$sentenca .= $atual;

							// se o proximo é delimitador							
						 	if (!ctype_alpha($prox) && !is_numeric($prox)) {
						 		echo "é delimitador, sentença: ".$sentenca."<br>";
						 		if(verificaSentenca22($sentenca)){
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

		


						// se é digito
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


						// SOZINHOSS

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
						
																										


						// DUPLOOOOOOOSSSSS
					
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







						// if (!ctype_alpha($atual) && !is_numeric($atual) && !ctype_alpha($prox) && !is_numeric($prox)) {
						// 	echo "caraaiiii q logicaaa<br>";
						// echo "Valor atual: ". $atual . "<br>";
						// echo "Proximo: ". $prox . "<br>";							
						// }




						// if ($atual == ":" && $estado == 1) {
						// 	$estado = 8;
						// 	if($prox == "="){
						// 		array_push($pilhaDeTokens, new Linha(getCodigo(":="), ":="));
						// 		$sentenca = '';
						// 		$estado = 1;
						// 		continue;									
						// 	}
						// 	if($prox){
						// 		echo "oiee<br>";
						// 		array_push($pilhaDeTokens, new Linha(getCodigo(":"), ":"));
						// 		$sentenca = '';
						// 		$estado = 1;
						// 		continue;	
						// 	}
						// }


						// Se é numero
						// if (is_numeric($atual) && $estado == 1) { 
						// 	$estado = 4;
						// }
						$sentenca .= $atual;
						echo "--------- FIM DE ITERAÇAO!------<br>";
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
				document.getElementById("editor").value = post.codigo;
			}
			

		</script>
	</body>
</html>