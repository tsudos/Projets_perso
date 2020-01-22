<!--html du formulaire d’ajout de questions faq-->

<!--attention action-->
<form name="connexion" method="POST" action="#">
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="nom" class="form-control" id="question" placeholder="votre nom" required/>   
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input type="text" name="mdp" class="form-control" id="answer" placeholder="votre mot de passe" required/>   
    </div>            
    <button type="submit" name="envoyer"  class="btn btn-info ">Envoyer</button>
</form>