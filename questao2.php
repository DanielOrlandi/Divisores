<?php

function divisor(){
	$num = $_POST["f_num"];
	if($num > 0){
		for($i = $num; $i > 0; $i--){
			$remainder = $num % $i;
			if($remainder == 0){
				echo "$i<br/>";
			}
		}
		echo '<label>Tentar novamente?</label><br/>';
		echo '<input type="submit" value="Sim">';
	}
	else{
		echo "Você NÃO colocou um numero inteiro positivo.<br/>";
		echo '<label>Tentar novamente?</label><br/>';
		echo '<input type="submit" value="Sim">';
	}
}

?>


<html>
<head>
	<title>Questão2 Divisor</title>
</head>
<body>
	<form name="f_div" action="questao2.html">
		<?php	
			divisor();
		?>
	</form>
</body>
</html>