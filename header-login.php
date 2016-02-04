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
  <header class="login"> 
    <div class="col-md-12 row">
    <div class="container">
        <a class="loginlogo aligncenter" href="#">
          <img width="169" height="100" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
        </a>
    </div>
    </div>
      <div class="clearfix"></div>
  </header>