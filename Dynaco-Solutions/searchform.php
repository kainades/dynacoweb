<form action="/" method="get" class="input-group">
		<input type="text" class="form-control" placeholder="Buscar..." value="<?php the_search_query(); ?>">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
		</span>
</form>
<!--
<form action="/" method="get">
	<fieldset>
		<label for="search">Search in <?php echo home_url( '/' ); ?></label>
		<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
		<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
	</fieldset>
</form>
-->