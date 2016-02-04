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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title><?php wp_title();?></title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
    <div class="socialicons">
      <a href="http://www.facebook.com/sharer.php?u=" class="social fb" title="share this on facebook"><i class="fa fa-facebook-square"></i></a>
      <a href="http://twitter.com/share?url=&text=" class="social tw" title="tweet this page"><i class="fa fa-twitter-square"></i></a>
      <a href="http://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-shape="round" class="social pin"><i class="fa fa-pinterest-square"></i></a>
  </div>
  <header class="internal">
      <div class="headerlogo">
      <div class="container"> 
        <div class="col-md-12 row" id="logo">
            <a class="navbar-brand internal" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-u1416-fr.png"></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
  </header>
  <nav class="navbar navbar-inverse" role="navigation">
          <div class="container clear-pad">
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
          
          </div>
        </nav>