
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div>
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
    <input type="submit" id="searchsubmit" class="fa fa-search" value="<?php echo esc_attr_x( '    ', 'submit button' ); ?>" />
  </div>
</form>