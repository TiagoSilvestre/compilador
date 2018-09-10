<!-- BAckupee





						
						if($codigo[$key] === ';') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}					
						if($codigo[$key] === ':') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}		

						if($codigo[$key] === '+') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === '-') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === '*') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === '/') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === '[') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === ']') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === '(') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === ')') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === '=') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === '>') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === ',') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === '.') {
							array_push($pilhaDeTokens, new Linha(getCodigo($sentenca), $sentenca));
							$sentenca = '';
						}

						if($codigo[$key] === '$') {
							//Fim do programa
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
                        
                        
                        
                        
                        
                        
                        
                        -->
<?php
// $strings = array('KjgWZC', 'arf12');
// foreach ($strings as $testcase) {
//     echo $testcase."<br>";
//     if (ctype_alpha($testcase)) {
//         echo "The string $testcase consists of all letters.\n";
//     } else {
//         echo "The string $testcase does not consist of all letters.\n";
//     }
// }

// $testcase2 = "12";
// if (ctype_alpha($testcase2)) {
//         echo "ifeeee";
//     } else {
//         echo "elseeeeee";
//     }
// $atual = "a";
// if (ctype_alpha($atual)) {
//     echo "ehh truee";
// }else {
//     echo "falsianee";
// }

include 'funcoes.php';

$sentenca = "VAR";

// if(verificaSentenca22($sentenca)){
// 	echo "eh trueee";
// 	print(getCodigo($sentenca));
// } else {
// 	echo "eh fallseeee";
// }

?>