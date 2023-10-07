<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="container">
		<input type="search" class="search-field" placeholder="Поиск" value="<?php echo get_search_query(); ?>" name="s" />
		<button type="submit" class="search-submit">&#xf002;</button>
		<i class="close">&#xf00d;</i>
	</div>
</form>
