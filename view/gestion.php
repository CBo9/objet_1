<?php
$titre= 'gestion';
ob_start();
?>

<form id='formModif' method="POST" >
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">pseudo</th>
                <th scope="col">email</th>
                <th scope="col">mot de passe</th>
            </tr>
        </thead>
        <tbody>
        <?php while($membre = $affichage->fetch()) : ?>
            <tr>
                <td><?=$membre['id']?></td>
                <td id="pseudo<?=$membre['id']?>"><?=$membre['pseudo']?></td>
                <td id="email<?=$membre['id']?>"><?=$membre['email']?></td>
                <td id="mdp<?=$membre['id']?>"><?=$membre['mdp']?></td> 
                <td id="bouton<?=$membre['id']?>"><span class="btn btn-success" onclick="modif(<?=$membre['id']?>)" >modifier</span></td>    
                <td><span onclick="confirmation(<?=$membre['id']?>)" class="btn btn-danger" >supprimer</span></td>            
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</form>  
<?php 
$content= ob_get_clean(); 
require 'template.php';
?>
