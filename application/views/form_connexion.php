	<link href="<?php echo base_url();?>css/form_connexion.css" rel="stylesheet">

</head>
<body>

	<div id="title">
		<h1>Fortune</h1>
	</div>

	<p>Veuillez renseigner vos informations de connexion</p>

	<form method="post">

		<input type="text" placeholder="Login" name="id" <?php if (isset($id)) {echo 'value="'.$id.'"';} ?> required <?php if (!isset($id)) {echo "autofocus";}?>>
    <input type="password" placeholder="Mot de passe" name="pwd" required <?php if (isset($id)) {echo "autofocus";}?>>
    <button value="Connexion">Connexion</button>

		<?php
			if (isset($error)){
				echo '<div id="winderror">
								<p id="error">'.$error.'</p>
							</div>';
			};
		 ?>

	</form>


</body>

</html>
