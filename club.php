<?php 
$title = "Club !";
require ('app/header.php');
require ('app/function.php');
require ('app/connect.php');
?>
<html>
    <h1 class="PS">La vie des clubs</h1>
    <ul class="club">
		<label for="Club">Choisissez le club: </label>
		<select name="club" id="Club">
			<option value="">--Club--</option>
			<?php
				$getClub = getClub($conn);
			
				foreach ($getClub as $i) {
					echo '<option value="'
					.$i["cl_id"].
					'">'.$i["cl_nom"].'</option>';
				}
			?>   
		</select>
	</ul>
	<form action="action.php" method="post">
        <p>L'année en cours : <input type="date" name="année" /></p>
        <p><input type="submit" value="OK"></p>
    </form>

</html>
