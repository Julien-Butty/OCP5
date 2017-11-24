<?php $this->titre = "Mon Blog - " . $this->nettoyer($billet['titre']); ?>

<section class="container padding-perso">
	<header>
		<h1 class="titreBillet"><?= $this->nettoyer($billet['titre']) ?></h1>
		<p class="grey-text text-lighten-1" ><?= $this->nettoyer($billet['date']) ?><span class="grey-text text-darken-2"> <?= $this->nettoyer($billet['auteur']) ?></span></p><br>
		
	</header>
	<div>
		<h5 ><?= $this->nettoyer($billet['chapo']) ?></h5><br>
		<p class="contenu "><?=  nl2br($this->nettoyer($billet['contenu'])) ?></p>
	</div><br>
	<a href="<?= "billet/modifier/"  . $this->nettoyer($billet['id'])?>" class="btn waves-effect waves-light light-blue accent-3" role="button" title="Lien 1">Modifier</a>
</section>
