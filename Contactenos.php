<?pshp 
		$Email=$_POST['Email'];
		$Edad=$_POST['Edad'];
		$Nombre=$_POST['Nombre'];
		echo "Nombre del usuario: ".$Nombre."<br/>";
		echo "Correo del usuario: ".$Email."<br/>";
	  	echo "<br/>";

		echo "Mensaje dejado por el usuario: ";
		echo "<br/>";
		echo $_POST['Hoja'];
	?>