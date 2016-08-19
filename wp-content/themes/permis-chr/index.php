
<?php /* Template Name: Index */ ?>

<?php get_header(); ?>

<div class="masthead">
	<h1 class="gigantic">Centre de formation agréé au<div class="accent">Permis d'Exploitation</div></h1>
</div>

<div class="intro">
	<div class="highlight">
		<p class="text-highlight">
		<B>Nos sessions récurrentes proches de chez vous:</B>
		Permis d'exploitation 2,5 jours (480€)<br>
		Permis d'exploitation 1 jour (249€)<br>
		<B>Nos villes: Périgueux, Bordeaux, Limoges</B><br>
		<a href="http://www.permis-chr.fr/prochaines-dates/">Voir les dates</a><br>

		<B>Formation individuelle sur mesure:</B><br>
		<a href="http://www.permis-chr.fr/contactez-nous/">Contactez-nous</a>
		<br>
	</div>
</div>

<div class="section-profil">
	<h1>Vos obligations de formation</h1>
	<div class="separator"></div>
	<div class="profil">Créateur ou repreneur d’activité, des formations s’imposent au lancement de votre affaire avant toute autre démarche administrative :<br><br>
	- <B>Exploitant d’une licence III ou IV ou d’une licence restaurant </B>: Permis d’exploitation 2,5 jours (20 heures) ou 1 jour (6 heures) si plus de 10 ans d’expériences en qualité d’exploitant<br><br>
	- <B>Exploitant d’une table d’hôtes </B>: Permis d’exploitation Option « Loueur de chambres d’hôtes » 1 jour (7 heures)<br><br>
	- <B>Exploitant de toute activité de restauration</B> : Hygiène alimentaire en restauration commerciale 2 jours (14 heures)<br>
	<a href="http://www.permis-chr.fr/prochaines-dates/" class="button">Voir les dates</a>
	</div>
</div>


<div class="section-engagements">
	<h1>Nos engagements</h1>
	<div class="separator"></div>
	<div class="profil">
	-	<B>Professionnalisme </B>: chaque session est animée par une juriste agréée à la fois professionnelle du droit et du secteur des Cafés, Hôtels et Restaurants<br><br>
	-	<B>Fiabilité </B>: chaque session est conforme au référentiel national imposé par les textes et actualisée des dernières évolutions législatives et réglementaires<br><br>
	-	<B>Pédagogie</B>: chaque session est articulée autour de supports dynamiques et de nombreux exemples et cas concrets issus de la jurisprudence et de la pratique professionnelle<br>
		<br>
	<a href="http://www.permis-chr.fr/prochaines-dates/" class="button">Voir les dates</a>
	</div>
</div>


<div class="section-nosplus">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1>Nos Plus</h1>
	<div class="separator"></div>
	<div class="nosplus">

	- <B>Modules juridiques gratuits </B>: dédiés à la cession/reprise d’entreprise selon les besoins des stagiaires. Ex : les clauses du bail commercial, la valorisation du fonds de commerce...<br><br>
	- <B>Assistance « post-formation » </B>: à l’issue de la formation, des réponses concrètes à toutes vos questions sur simple demande. Une veille juridique est aussi assurée sur les évolutions majeures de la réglementation relative aux débits de boissons<br><br>
	- <B>Session individuelle </B>: si votre situation personnelle ou professionnelle ne vous permet pas d’assister à une session aux dates proposées, nous pouvons organiser pour vous une formation individuelle « sur mesure »
	<br>

	<a href="http://www.permis-chr.fr/prochaines-dates/" class="button">Voir les dates</a>
	</div>
	
	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

</div>



<?php get_footer(); ?>


