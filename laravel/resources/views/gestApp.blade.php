<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		if(DB::connection()->getPDO())
		{
			echo "Connexion réussie à la base de données=>"
					DB::connection()->getDatabaseName();
		}
	?>

</body>
</html>