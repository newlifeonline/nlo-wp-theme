<div class="row">
        <div class="col-xs-12 col-md-12 col-md-offset-3">
        <div class="search">
        <div class="row">
        <div class="col-xs-12 col-md-6">
     <div class="search-form-holder">
     <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Resources', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'label' ) ?>" /></label>
        
	<button type="submit" class="search-submit" value="<?php echo esc_attr_x( '' ) ?>"><span class="glyphicon glyphicon-search" aria-label="true"></span>
    </button>
</form>
</div>
</div>
</div>
</div>
</div>