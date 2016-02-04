<?php get_header("login"); ?>

  <div class="container">
    <div class="row">
      
      <div class="col-md-12">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <?php the_content(); ?>
          </div>
        
                  
        <?php endwhile; endif; ?>
      </div>
    <div class="col-md-6">
        <h1>Agent Login</h1>
        <hr style="border-top:3px solid #6C91B3;">
        <?php      
        $args = array(
          'echo'           => true,
          'remember'       => true,
          'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
          'form_id'        => 'loginform',
          'id_username'    => 'user_login',
          'id_password'    => 'user_pass',
          'id_remember'    => 'rememberme',
          'id_submit'      => 'wp-submit',
          'label_username' => __( 'Username' ),
          'label_password' => __( 'Password' ),
          'label_remember' => __( 'Remember Me' ),
          'label_log_in'   => __( 'Log In' ),
          'value_username' => '',
          'value_remember' => false
        );
      ?>
       <?php wp_login_form( $args ); ?>  
       
       <a style="font-size:24px; font-weight:bold;" href="<?php bloginfo("home"); ?>/wp-login.php?action=register">Not a user? Click here to register</a>

        </div>
       <div class="col-md-6">
        <h1><?php the_title(); ?></h1>
        <hr style="border-top:3px solid #6C91B3;">
        <?php      
        $args = array(
          'echo'           => true,
          'remember'       => true,
          'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
          'form_id'        => 'loginform',
          'id_username'    => 'user_login',
          'id_password'    => 'user_pass',
          'id_remember'    => 'rememberme',
          'id_submit'      => 'wp-submit',
          'label_username' => __( 'Username' ),
          'label_password' => __( 'Password' ),
          'label_remember' => __( 'Remember Me' ),
          'label_log_in'   => __( 'Log In' ),
          'value_username' => '',
          'value_remember' => false
        );
      ?>
       <?php wp_login_form( $args ); ?>  
       
       <a style="font-size:24px; font-weight:bold;" href="<?php bloginfo("home"); ?>/wp-login.php?action=register">Not a user? Click here to register</a>

        </div>

      </div>
       
    </div>
  </div>
<br><br><br>
<?php get_footer(); ?> 