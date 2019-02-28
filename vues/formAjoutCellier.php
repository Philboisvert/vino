<div class="ajouter">
    <form action="index.php?requete=AjoutCell" method="POST">
        <input name="nom" placeholder="Insérer le nom du Cellier">
        <input type ="hidden" name="username" value="<?php echo $_SESSION['UserID']; ?>">
        <input type="submit" value="Création">
    </form>
</div>