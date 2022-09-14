<?php 
$title = "Calendrier !";
require ('app/header.php');
require ('app/function.php');
require ('app/connect.php');
?>
<html>
	<div class="bd-cal">
		<body class="bd-ens">
			<div class="bd-choix">
				<h1 class="PS">Partie Sélection</h1>
			
				<ul class="champ">
					<label for="Championnat">Choisissez le championnat: </label>
					<select name="championnat" id="Championnat">
						<option value="">--Championnat--</option>
						<?php
							$getChampionnat = getChampionnat($conn);
			
							foreach ($getChampionnat as $i) {
								echo '<option value="'
								.$i["ch_id"].
								'">'.$i["ch_nom"].'</option>';
							}
						?>   
					</select>
				</ul>

				<ul>
					<label for="Manifestation">Choisissez la manifestation: </label>
					<select name="Nom Manifestation" id="Manifestation">
						<option value="">--Manifestation--</option>
						<?php
							$getManifestation = getManifestation($conn);

							foreach ($getManifestation as $i) {
								echo '<option value="'
								.$i["ma_id"].
								'">'.$i["ma_nom"].'</option>';
							}
						?>
					</select>
				</ul>

				<ul>
					<label for="Catégorie d'épreuve">Choisissez la catégorie d'épreuve: </label>
					<select name="Nom de catégorie" id="Catégoriep">
						<option value="">--Catégorie--</option>
						<?php
							$getCategorie = getCategorie($conn);

							foreach ($getCategorie as $i) {
								echo '<option value="'
								.$i["cat_id"].
								'">'.$i["cat_nom"].'</option>';
							}
						?>
					</select>
				</ul>

				<ul>
					<label for="Epreuve">Choisissez l'épreuve: </label>
					<select name="Nom Epreuve" id="Epreuve">
						<option value="">--Epreuve--</option>
						<?php
							$getEpreuve = getEpreuve($conn);

							foreach ($getEpreuve as $i) {
								echo '<option value="'
								.$i["ep_id"].
								'">'.$i["ep_nom"].'</option>';
							}
						?>
					</select>
				</ul>

				<ul>
					<label for="Catégorie d'âge">Choisissez la catégorie d'âge: </label>
					<select name="Nom de catégorie" id="Âge">
						<option value="">--Âge--</option>
						<option value="1">--3--</option>
					</select>
				</ul>

			</div>
			<div class="tableau">

				<h1 class="affichage"> Affichage du calendrier </h1>
				<table>

					<tr>
						<th>Date</th>
						<th>Lieu</th>
						<th>Parcours</th>
						<th>Distance</th>
						<th>Montant de l'inscription</th>
					</tr>
					<tr>
						<td>15/05/2020</td>
						<td>Paris</td>
						<td>Parcours 10</td>
						<td>42km</td>
						<td>50 euros</td>
					</tr>
				</table>
			</div>
		</body>
	</div>	
</html>
