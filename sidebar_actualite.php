<!-- Side Menu -->
	<div class="col-xs-12 col-sm-12 col-md-3 col-xl-3 mobile_convertion" style="text-align: left; padding-right: 2%;">

		<?php $slug = $_GET['classe']; ?>

		<p>
			<a href="?classe=" class="item_menu
				<?php
					if ($slug == "")
					{

						echo("item_active_menu");

					}
				?>
			">
				Toutes les classes
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="?classe=ps" class="item_menu
				<?php

					if ($slug == "ps")
					{

						echo("item_active_menu");

					}

				?>
			">
				Petite section
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="?classe=ms" class="item_menu
				<?php

					if ($slug == "ms")
					{

						echo("item_active_menu");

					}

				?>
			">
				Moyenne section
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="?classe=gs" class="item_menu
				<?php

					if ($slug == "gs")
					{

						echo("item_active_menu");

					}

				?>
			">
				Grande section
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="?classe=cp" class="item_menu
				<?php

					if ($slug == "cp")
					{

						echo("item_active_menu");

					}

				?>
			">
				CP
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="?classe=ce1" class="item_menu
				<?php

					if ($slug == "ce1")
					{

						echo("item_active_menu");

					}

				?>
			">
				CE1
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="?classe=ce2" class="item_menu
				<?php

					if ($slug == "ce2")
					{

						echo("item_active_menu");

					}

				?>
			">
				CE2
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="?classe=cm1" class="item_menu
				<?php

					if ($slug == "cm1")
					{

						echo("item_active_menu");

					}

				?>
			">
				CM1
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="?classe=cm2" class="item_menu
				<?php

					if ($slug == "cm2")
					{

						echo("item_active_menu");

					}

				?>
			">
				CM2
			</a>
		</p>
		
	</div>