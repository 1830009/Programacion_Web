<?php 
	require'login/sesion.php';
	?>
<!DOCTYPE html>
<html>
<?php 
	require'php/menu.php';?>
			<div class="principal-A">
				<main>
					<h2 class="subtitulo">Register</h2>
					<section class="artist-desc-S">
						<p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below.</p>
					</section>
					<h4>Personal Info</h4>
					<form action="register_submit" method="POST">
						<div class="txt">
							<label>Nombre: </label>
							<input type="text" name="nombre" id="nombre" placeholder="Last,First">	
						</div>
						<div class="txt">
							<label>Company Name: </label>
							<input type="text" name="company" id="company">			
						</div>

						<div class="txt">
							<label>E-mail </label>
							<input type="email" name="email" id="email">			
						</div>

						<div class="radio">
							<h4>Request Type </h4>
							<input type="radio" name="question" id="question">
							<label>Question</label>
							<br>
							<input type="radio" name="question" id="question">
							<label>Comment</label>
						</div>

						<div class="desc">
							<label> Comment</label>
							<textarea name="comment" id="comment"></textarea>
							
						</div>

						<div>
							<input type="checkbox" name="sub" id="sub">
							<label> Subscirbe to our mailing list?</label>
						</div>
						<label> How did you hear about us?</label>
						<div class="boton">	
							<br>
							<select name="hear" >
								<option value="0">Choose...</option>
								<option value="1">A friend</option>
								<option value="2">Facebook</option>
								<option value="3">Twitter</option>
							</select>
							<br>
							<input type="submit" name="enviar" value="Aceptar">
						</div>
					</form>
				</main>
				<aside>
					<?php require 'php/fArtist.php';?>
				</aside>
			</div>
			<?php include ('php/footer.php'); ?>
	</div>

</body>
</html>