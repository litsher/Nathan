<!DOCTYPE html> 
<html>
	<head></head>
	
	<body>
 		
		<p>Vul je favoriete kleur in:</p>
		<form class="loggien" action="Array.php" method="POST">
			<input class="lab" type="text" name="kleur" />
			<input type="submit" name="submit" />
		</form>	
		<?php 
		include ('include.php');
		?>
	</body>
</html>