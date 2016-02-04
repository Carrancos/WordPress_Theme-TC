<?php
if (is_user_logged_in() && is_page(317) ) {
wp_redirect( home_url() );
exit;
}
?>
<!DOCTYPE html>
<!--[if IE 8 ]> <html class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en"> 
<!--<![endif]-->
<!--[if IE]>
  <link rel="stylesheet" type="text/css" href="css/all-ie-only.css" />
<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico"> 
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arapey:400,400italic' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title><?php wp_title();?></title>

    <?php wp_head(); ?>
  <script src="//use.typekit.net/bfx2luo.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
  </head>

  <body <?php body_class(); ?>>
  <header>
    <div class="container"> 
        <div class="col-md-4">
            <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-u83-fr.png"></a>
        </div> 
    <div class="col-md-8 headerright">
    <div class="search">
      <?php if ( ! dynamic_sidebar ('header-widget') ): ?>
      <?php endif ?>
    </div>
       <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
            
            <?php
            $args = array(
              'menu'      => 'menu-1',
              'menu_class'      => 'nav navbar-nav',
              'container'      => 'false',
            );
            wp_nav_menu( $args );
            ?>

            </div><!--/.navbar-collapse -->
        </nav>
      </div>
    </div>
  </header>