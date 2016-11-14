<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<input type="search" class="search-field" placeholder="Type and Hit Enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
</form>
