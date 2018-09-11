<?php ob_start(); ?>
<div class="login">
    <h1>Identification</h1>
    <form method="post" action="/index.php?action=connect">
        <fieldset>
            <label for="username">Utilisateur</label>
            <input type="text" name="username" id="username" placeholder="utilisateur"/>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="mot de passe"/>
            <input type="submit" id="submit" value="Connexion"/>
        </fieldset>
    </form>
</div>
<?php
$content = ob_get_clean();
require_once(__DIR__ . '/../../views/layouts/app.php');
?>
