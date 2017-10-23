
	<header>
		<img src="logo.png" title="logo">
		<h1>ANDROID</h1>
	</header>
	<nav>
		<ul>
			<li><a href="#">Inicio</a></li>
			<li><a href="about.html#">About</a></li>
			<li><a href="blog.html#">Blog</a></li>
			<li><a href="multimedia.html#">Multimedia</a></li>
			<li><a href="redessociales.html#">Redes sociales</a>
			<ul>
				<li><a href="http://www.facebook.com">Facebook</a></li>
				<li><a href="http://www.twitter.com">Twitter</a></li>
			</ul>
			</li>
			</ul>
			</nav>
		<div id="contenido">
		<h2><?php echo $h2; ?></h2>
		
		<p>Este es...</p>
		<hr>
		<section>
			<fieldset>
				<legend>Contacto</legend>
				<form method="post" action="guardar.php">
					<label>Nombre:&nbsp</label>
					<input type="text" name="nombre" required placeholder="nombre completo">
					<br>
					<br>
					<label>correo: &nbsp</label>
					<input type="email" name="nombre" required placeholder="tucorreo@server.com">
					<br>
					<br>
					<label>Comentarios: &nbsp</label>
					<textarea></textarea>
					<br>
					<br>
					<input id="enviar" type="submit" value="enviar">
					<input id="cancelar" type="reset" value="cancelar">

			</form>
			</fieldset>

		</section>	
		