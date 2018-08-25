<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Compilador</title>
        <link href="linedTextArea/jquery-linedtextarea.css" type="text/css" rel="stylesheet" />
        <link href="styles/style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
        <div class="form-container">
            <form class="formulario" action="index.php" method="post">
                <textarea name="codigo" class="lined" rows="10" cols="60"></textarea>
                <input type="submit" value="Enviar">
            </form>


			<div class="tabela-resultado">
				<h1>Tabela de resultados</h1>
				Codigo ----  Palavra
			</div>
		</div>

		<div>
			<?php
			include 'funcoes.php';
			    if(isset($_POST["codigo"])){
			        $codigo = str_split($_POST["codigo"]);
			        echo "<pre>";
			        print_r($codigo);
			        echo "</pre>";

			        $sentenca = null;
			        $pilhaDeTokens = array();

			        foreach ($codigo as $key => $value) {
			            $sentenca .= $value;
						echo "Valor atual: ". $value . "<br>";
						echo 'Sentença:  ' . $sentenca . "<br>";
						echo 'Verifica Sentença!<br>';

						// se existe proximo valor
			            if(isset($codigo[$key+1])) {
			            	echo "Proximo valor: ". $codigo[$key+1] . "<br>";							
			            }else {
							echo "Fim do código!<br>";
						}

						// conferir na tabela 
						if(verificaSentencaNaTabela($sentenca)) {
							array_push($pilhaDeTokens, $sentenca);
							$sentenca = '';
							
						}
			        	echo "<br>------------------------<br>";

			            
			        }
			    }              

			?>                
            </div>
        

        <div>
            <p>--> Area de edição</p>
            <p>--> Logs</p>
            <p>--> Pilha de tokens</p>
        
            <span>http://alan.blog-city.com/jquerylinedtextarea.html</span>
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