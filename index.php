<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Document</title>
		<link href="linedTextArea/jquery-linedtextarea.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<textarea class="lined" rows="10" cols="60"></textarea>

		<!-- <form action="" >
		    <input type="text" name="codigo">

		    <input type="submit" value="Enviar">
		</form> -->
		<p>--> Area de edição</p>
		<p>--> Logs</p>
		<p>--> Pilha de tokens</p>

		http://alan.blog-city.com/jquerylinedtextarea.html

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