
<?php $this->titre = 'Posts'; ?>

<?php foreach ($billets as $billet):
?>

<section class="padding-perso row">
    <div class="col s12 offset-m3 m6">
        <div class="card  hoverable">
            <div class="card-content">
                <span class="card-title">
                    <a href="<?= "billet/read/" . $this->nettoyer($billet['id']) ?>">
                        <h4 class="grey-text text-darken-4"><?= $this->nettoyer($billet['titre']) ?></h4></a>
                    </span>
                    <h6 class="grey-text text-lighten-1" ><?= $this->nettoyer($billet['date']) ?><span class="grey-text text-darken-2"> <?= $this->nettoyer($billet['auteur']) ?></span></h6><br>

                    
                    <h5 class="grey-text text-darken-2"><?= $this->nettoyer($billet['chapo']) ?></h5>
                    
                    <br>

                    
                    


                </div>
                <div class="card-action">
                    <a class="light-blue-text text-accent-3 " href="<?= "billet/read/" . $this->nettoyer($billet['id']) ?>">Lire la suite</a>
                </div>
            </div>
        </div>
    </section>
    <hr />

<?php endforeach; ?>
