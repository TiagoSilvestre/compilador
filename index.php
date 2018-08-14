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

            <div class="resultado">

			<?php
			    if(isset($_POST["codigo"])){
			        $arr1 = str_split($_POST["codigo"]);
			        echo "<pre>";
			        print_r($arr1);
			        echo "</pre>";  

			        $sentenca = null;
			        $pilha = array();

			        foreach ($arr1 as $key => $value) {
			            echo "Valor atual: ". $value . "<br>";
			            if(isset($arr1[$key+1])) {
			            	$sentenca .= $value;

			            	echo "Proximo valor: ". $arr1[$key+1] . "<br>";

			            	if($arr1[$key+1] == " ") {
			            		array_push($pilha, $sentenca);
			            		$sentenca = null;
			            	}
			            }
			            
			            echo "------------------------<br>";
			            
			        }

			        echo $sentenca;

			        echo "<pre>";
			        print_r($pilha);
			    }              
				/* 
				--> Analisador lexico, 
				    
				    Dividir os tokens
				        - ter 3 estruturas, uma que é o caractere atual, 
				          o proximo caractere,  e a palavra que esta sendo formada

				*/
			?>                
            </div>
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