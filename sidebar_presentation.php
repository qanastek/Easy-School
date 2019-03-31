<!-- Side Menu -->
	<div class="col-xs-12 col-sm-12 col-md-3 col-xl-3 mobile_convertion" style="text-align: left; padding-right: 2%;">

		<?php $slug = basename(get_permalink()); ?>

		<p>
			<a href="<?php echo get_permalink( get_page_by_title( "PRÉSENTATION DE L'ÉTABLISSEMENT" ) ); ?>" class="item_menu
				<?php

					if ($slug == "presentation-de-letablissement") {

						echo("item_active_menu");

					}

				?>
			">
				Présentation de l'école
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "L’équipe éducative" ) ); ?>" class="item_menu
				<?php

					if ($slug == "lequipe-educative") {

						echo("item_active_menu");

					}

				?>
			">
				L’équipe éducative
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "Restauration scolaire" ) ); ?>" class="item_menu
				<?php

					if ($slug == "restauration-scolaire") {

						echo("item_active_menu");

					}

				?>
			">
				Restauration scolaire
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "Activités péri-scolaires" ) ); ?>" class="item_menu
				<?php

					if ($slug == "activites-peri-scolaires") {

						echo("item_active_menu");

					}

				?>
			">
				Activités péri-scolaires
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "Activités extra-scolaire" ) ); ?>" class="item_menu
				<?php

					if ($slug == "activites-extra-scolaire") {

						echo("item_active_menu");

					}

				?>
			">
				Activités extra-scolaire
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "Liste des fournitures" ) ); ?>" class="item_menu
				<?php

					if ($slug == "liste-des-fournitures") {

						echo("item_active_menu");

					}

				?>
			">
				Liste des fournitures
			</a>
		</p>
		
	</div>