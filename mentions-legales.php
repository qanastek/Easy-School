<?php
/**
 * Template Name: mentions-legales
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Easy_School_wp
 */

get_header();
?>

<div class="row" style="min-height: 500px; padding-left: 6%; padding-right: 5%; padding-top: 3%;">

	<!-- Content Section -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 mobile_title" style="padding-bottom: 4%;">

		<div class="row mb-4" style="background-color: #f7f8f7; margin-bottom: 2%;">

			<p class="title_article_full"><i class="fas fa-info-circle"></i> | <?php the_title(); ?></p>

		</div>

		<div class="row mb-1">

			<div class="text_content_ml">

				<p><strong>Conditions générales d’utilisation du site</strong></p>

				<p>Le site accessible à l’adresse <?php get_url(); ?> est destiné à l’information personnelle des internautes qui l’utilise. L’accès et l’utilisation de ce site sont soumis aux présentes « Conditions Générales » détaillées ci-après ainsi qu’aux lois applicables. La connexion et l’accès au site <?php get_url(); ?> impliquent l’acceptation intégrale et sans réserve de l’internaute de toutes les dispositions des présentes Conditions Générales. L’école <?php get_name(); ?> se réserve le droit de modifier et de mettre à jour, sans préavis, les présentes Conditions Générales et tous les éléments, produits ou services présentés sur le site. L’ensemble de ces modifications s’impose aux internautes qui doivent consulter les présentes Conditions Générales lors de chaque connexion. Le site Internet <?php get_url(); ?> et les présentes Conditions Générales sont soumises au droit français et sont rédigés en français.</p>

				<p><strong>Publication et hébergement</strong></p>

				<p><span style="text-decoration: underline;">Le site <?php get_url(); ?> est publié par :</span></p>
				<p>
					L'école <?php get_name(); ?>
				    <br /> <?php get_adress(); ?>
				    <br /> <?php get_postal_code(); echo ", "; get_city(); ?>
				</p>

				<p id="support"><span style="text-decoration: underline;">Hébergement du site :</span></p>
				<p>
					<?php get_name_host(); ?>
			    	<br /> <?php get_host_address(); ?>
			    	<br /> <?php get_host_postal_code(); ?>
				</p>
				<p>Siret n°<?php get_siret(); ?></p>

				<p><strong>Conception et réalisation</strong></p>

				<p>Conception graphique et suivi de projet</p>
				<p>
					L'informatique pour tous
				    <br /> 74 rue louis pasteur
				    <br /> 84029 Avignon – France
				    <br /> Tél : +33 6 25 93 55 94
				</p>

				<p>Superviser par : Labrak Yanis</p>

				<p><strong>Protection des données personnelles</strong></p>

				<p>Aucune information personnelle n’est collectée à votre insu.
				<br /> Aucune information personnelle n’est cédée à des tiers.</p>

				<p><strong>Données statistiques</strong></p>

				<p>Afin de mieux connaître les centres d’intérêt des visiteurs du site et en vue de son amélioration, nous pouvons être amenés à mesurer le nombre de visites, de pages vues, ainsi que l’activité des visiteurs sur le site, et leur fréquence de retour. A cet effet, la technologie des cookies peut-être utilisée. Il vous est possible de refuser ces « cookies » ou de les supprimer sans que cela ait une quelconque influence sur votre accès aux pages du site. Pour vous opposer à l’enregistrement de cookies ou être prévenu avant d’accepter les cookies, nous vous recommandons la lecture la rubrique d’aide de votre navigateur qui vous précisera la marche à suivre.</p>

				<p><strong>Listes de diffusion / Circulaires</strong></p>

				<p>Les adresses électroniques recueillies dans le cadre des listes de diffusion (abonnement aux circulaires) ne sont utilisées que pour l’envoi des informations pour lesquelles l’usager s’est expressément abonné. Il est possible à tout moment de se désabonner en ligne. L’école <?php get_name(); ?> qui gère techniquement la diffusion des documents respecte la confidentialité des données dont elle assure la gestion et ne peut en aucun cas les céder à des tiers.</p>

				<p><strong>Droits de propriété intellectuelle</strong></p>

				<p>L’école <?php get_name(); ?> avise les utilisateurs de ce site que sont protégés par la législation sur le droit d’auteur : ce peut être notamment des photographies, des articles, des dessins, des séquences animées, des enregistrements au format audio ou vidéo numériques,.</p>

				<p>Les éléments ainsi protégés sont la propriété de l’école <?php get_name(); ?> ou de tiers ayant autorisé l’école <?php get_name(); ?> à les exploiter.</p>

				<p>A ce titre, toute reproduction, représentation, utilisation, adaptation, modification, incorporation, traduction, commercialisation, partielles ou intégrales par quelque procédé et sur quelque support que ce soit (papier, numérique, . ) sont interdites, sans l’autorisation écrite préalable de l’école <?php get_name(); ?> , hormis les exceptions légalement admises par le Code la Propriété Intellectuelle (notamment au titre de la copie privée), sous peine de marque, puni d’une peine d’emprisonnement et d’une amende substantielle.</p>

				<p>Les marques et logos des logiciels affichés sur ce site sont la propriété respective des sociétés les exploitant, et en peuvent être exploitées sans l’accord préalable et écrit du propriétaire desdits marques et logos. Ces marques incluant mais ne se limitant pas nécessairement à :</p>

				<p>Adobe Systems Incorporated pour Acrobat Reader (lecture des fichiers au format « pdf »), Microsoft Corporation pour MS-Word (lecture des fichiers au format « doc »), MS-Excel (lecture de fichiers au format « xls » ), MS-Powerpoint (lecture de fichiers au format « ppt ») ou de tout autre logiciel non nommément identifié dans les présentes Conditions Générales.</p>
				
				<p>Ces logiciels sont protégés par le droit d’auteur et suppose la conclusion d’un contrat de licence. Leur utilisation sans l’accord écrit préalable du propriétaire est interdite.</p>

				<p><strong>Limitation de responsabilité</strong></p>
				<p>Vous utilisez le site <?php get_url(); ?> sous votre seule et entière responsabilité. L’école <?php get_name(); ?> ne pourra être tenu pour responsable des dommages directs ou indirects, tels que, notamment, préjudice matériel, pertes de données ou de programme, préjudice financier, résultant de l’utilisation de ce site ou des sites qui lui sont liés.</p>

				<?php if (get_theme_mod( "google_analytics") == "yes"): ?>

				<p><strong>Outil de mesure d’audience Google Analytics</strong></p>

				<p>Notre site utilise l’outil de mesure d’audience Google Analytics.</p>

				<p>Pour désactiver les cookies liés à l’utilisation de cet outil, vous pouvez consulter le lien suivant mis à disposition par Google :</p>

				<p><a href="http://tools.google.com/dlpage/gaoptout?hl=fr">http://tools.google.com/dlpage/gaoptout?hl=fr</a>.</p>

				<?php endif; ?>

				<p><strong>Téléchargement de fichiers</strong></p>
				<p>La plupart des documents à télécharger font appel au programme « Acrobat Reader » de Adobe Systems Incorporated : http://www.adobe.com (vous pouvez télécharger la version 6.0 plus récente)</p>
				<p>D’autres fichiers peuvent être téléchargés aux formats suivants :</p>
				<p>– « doc » et « rtf » (Microsoft Word pour les textes)</p>
				<p>– « xls » (Microsoft Excel pour Windows pour les tableaux)</p>
				<p>– « ppt » (Microsoft Powerpoint pour les présentations)</p>

				<?php if (get_theme_mod( "email_webmaster")): ?>
					<p><strong>Pour en savoir plus</strong></p>
					<p>Pour toute question complémentaire, nous vous proposons de nous envoyer un e-mail à <?php echo get_theme_mod( "email_webmaster"); ?>.
					</p>
			    <?php endif; ?>

			</div>

		</div>
		
	</div>
	
</div>

<?php
get_footer();
