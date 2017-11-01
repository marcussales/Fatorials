		<?php require_once("class.php");
					$fator = new Fatorial();
				 		?>
		 <!DOCTYPE html>
		 <html>
		 	<head>
		 		<title> Exercicio </title>
		 	</head>
			 <body>
				<form action="class.php"	method="POST">
					First number:
					<input type="text" 		name="text"		size="20"	placeholder="Insira um numero"/>  
					<br/>
					<input type="submit" 	name="btn" 	value="Enviar"/>
					<br/>
					<input type="reset" 	name="Limpar" 	value="Limpar"/>
				</form>
				<?php 
					if(isset($_POST['btn'])){
						$fator->setNumber($_POST['texto']);
							echo $fator->getNumber();
						}
				?>
			 </body>
		 </html>


				

 		
