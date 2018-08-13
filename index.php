<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script src="linedTextArea/jquery-linedtextarea.js"></script>
<link href="linedTextArea/jquery-linedtextarea.css" type="text/css" rel="stylesheet" />


<textarea class="lined" rows="10" cols="60"></textarea>

<!-- <form action="" >
    <input type="text" name="codigo">

    <input type="submit" value="Enviar">
</form> -->
<p>--> Area de edição</p>
<p>--> Logs</p>
<p>--> Pilha de tokens</p>

http://alan.blog-city.com/jquerylinedtextarea.html



<script>
$(function() {
	$(".lined").linedtextarea(
		{selectedLine: 1}
	);
});
</script>