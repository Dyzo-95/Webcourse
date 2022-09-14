<?php  $title = 'Contact'; 
        require ('app/header.php');
        require ('app/function.php');
        require ('app/connect.php');
?>

<html>
    <form action="traitement.php" method="post">
        <p>
            <strong>Nom<span style="color: #ff0000;">*</span> :</strong> <label for="nom"> </label> <input id="nom" name="nom" size="28" type="text" /> 
            <strong>Prénom :</strong> <label for="prenom"></label> <input id="prenom" name="prenom" size="27" type="text" /> <br /><br /> 
            <strong> Société : </strong><br /> <label for="societe"> </label> <input id="societe" name="societe" size="81" type="text" /> <br /><br /> 
            <strong> RCS : </strong><br /> <label for="rcs"> </label> <input id="rcs" name="rcs" size="81" type="text" /> <br /><br /> 
            <strong>Adresse : </strong><br /> <label for="adresse"></label> <input id="adresse" name="adresse" size="81" type="text" /> <br /><br /> 
            <strong>Code Postal  :</strong> <label for="code"></label> <input id="code" name="code" size="13" type="text" /> 
            <strong>Ville : </strong> <label for="ville"></label> <input id="ville" name="ville" size="39" type="text" /> <br /><br /> 
            <strong>Téléphone<span style="color: #ff0000;">*</span> :<label for="telephone"></label></strong> <input id="telephone" name="telephone" size="27" type="text" /> 
            <strong>Fax :</strong> <label for="fax"></label> <input id="fax" name="fax" size="27" type="text" /> <br /> <br /> 
            <strong>Mail <span style="color: #ff0000;">*</span> : </strong><br /> <label for="mail"> </label><input id="mail" name="mail" size="81" type="text" />
        </p>
        <p>Pour quelle raison nous contactez-vous ?</p>

        <label for="motif"></label> <select id="motif" name="motif"> <option value="reglement">Pour un renseignement</option> 
        <option value="enquete_commerciales">Pour une vidéo</option>
        <option value="enquete_civile">Pour un article</option> 
        <option value="recouvrement">Pour autre chose</option> 
        </select>
        <p>Message <span style="color: #ff0000;">*</span> :</p>
        <p><label for="message"></label> <textarea id="message" cols="52" rows="7" name="message"></textarea></p>
        <input type="reset" value="Effacer" /> <input type="submit" value="Envoyer" />
        <p> </p>
    </form>
</html>
