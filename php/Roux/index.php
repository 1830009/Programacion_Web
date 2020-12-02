<?php 
	require'login/sesion.php';
	?>

<!DOCTYPE html>
<html>
	<?php 
	
	require'php/menu.php';?>
			<div class="principal">
				<main>
					<section class="seccion1">
						<h2 class="subtitulo">About the Event</h2>
						<p>Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees. It is truly an honor to be a CAC Featured Artist and many past students artists who were featured at CAC have gone on to brilliant careers in art.</p>
					</section>
					<section class= "artist">
						<h2 class="subtitulo"> Featured Artist</h2>
						<p>
							Each year, nine individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees.
						</p>
						<div class="collage">
							<img src="img/artists/Barot_Bellingham_tn.jpg" >
							<img src="img/artists/Constance_Smith_tn.jpg" >
							<img src="img/artists/Hassum_Harrod_tn.jpg" >
							<img src="img/artists/Hillary_Goldwynn_tn.jpg" >
							<img src="img/artists/Jennifer_Jerome_tn.jpg" >
							<img src="img/artists/Jonathan_Ferrar_tn.jpg" >
							<img src="img/artists/LaVonne_LaRue_tn.jpg" >
							<img src="img/artists/Riley_Rewington_tn.jpg" >
							<img src="img/artists/Xhou_Ta_tn.jpg">
						</div>
						<a href="artists.hmtl" class="a_artist">View Artist Info</a>
					</section>

					<section>
						<h2 class="subtitulo">The Venue</h2>
						<h3 class="sub2"> Hotel Contempo</h3>
					</section>
					<img src="img/hotel_contempo.jpg" class="flotante">
					<p>
						CAC speaking events and gallery exhibits take place inside Hotel Contempo, at 309 1st Avenue, in Downtown Seattle. Just a walk to the Space Needle, and a sampling of restaurants and shopping makes the venue a much sought-after location for conferences, year after year.
						Hotel Contempo is the perfect spot for a gathering of modern artists. Not only are the conference rooms and halls decked with breathtaking contemporary art and sculptures, but the individual rooms are as unique as the renowned artists who were commissioned to decorate them. From the Ross Monroe Purple suite filled wall to wall with paintings to the Tess Lessinger Sculpted Universe suite, with dozens of original sculptures, visitors are sure to be intrigued and comforted during their stay at Hotel Contempo.
					</p>	
				</main>
				<aside>
					<section>
						<?php require 'php/check_out.php';?>
					</section>
					<section>
						<h3>Schedule</h3>
						<h4 class= "t-gris"> Monday</h4>
						<p>The first day of CAC events is kicked off under the theme of Art in Full Color. From a demonstration in graffiti art on a wall of the Rousseau Room, to the exhibit of colorful glazed modern glassware in the Dover Hall.</p>

						<h4 class= "t-gris"> Tuesday</h4>
						<p>Water in Art is the theme for the second day, as art students gather at the Fountain of Intrigue to create ice sculptures, and art lecturers discuss the use of water as an art material, and water as an art subject.</p>

						<a href="schedule.html" class="a_artist">Full Schedule >></a>
					</section>
				</aside>
			</div>
			<?php include ('php/footer.php'); ?>
	</div>

</body>
</html>