<?php $this->titre = 'Créer Article'; ?>

<?php if (isset($errors) && count($errors) > 0) :?>
    <!--  message flash      -->
    <div  class="container">
        <div class="col">
            <ul id="alert">
                <?php foreach ($errors as $error): ?>
                    <li  class="card-panel red darken-1 white-text center-align  ">
                        <?= $error ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

<?php  endif; ?>

<section class="container padding-perso">
    <form method="post" action="">
        <div class="row">
            <div class="input-field">
                <label for="modifTitre">Titre</label>
                <input id="modifTitre" class="validate" name="titre" type="text" "<br/>
            </div>
            <div class="input-field">
                <label for="modifChapo">Chapo</label>
                <input id="modifChapo" class=validate"" name="chapo" type="text" "<br/>
            </div>
            <div class="input-field">
                <label for="modifAuteur">Auteur</label>
                <input id="modifAuteur" class=validate"" name="auteur" type="text" "<br/>
            </div>
            <div class="input-field">
                <label for="modifContenu">Votre texte</label>
                <textarea id="modifContenu" class="materialize-textarea" name="contenu"></textarea><br/>
            </div>
            <br>

            <input class="btn waves-effect waves-light light-blue accent-3" name="creer" type="submit" value="Creer"/>
            <input type="hidden" name="token" id="token" value="<?= $_SESSION["token"]; ?>" />
        </div>
    </form>
</section>
