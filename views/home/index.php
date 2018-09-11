<?php ob_start(); ?>
<div class="home">
    <ul>
        <li><a href="/index.php">Accueil</a></li>
        <li><a href="/index.php?action=logout">Déconnexion</a></li>
    </ul>
    <div id="clickblock">
        <a class="text">Il y a des fotes dan sete fraz. Cliké ici pour lé corrigés.</a>
        <div></div>
    </div>
</div>
<?php
$content = ob_get_clean();
require_once(__DIR__ . '/../../views/layouts/app.php');
?>
