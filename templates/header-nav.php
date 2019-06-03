<header id="header">
<div class="container">
    <div class="row header-top align-items-center">
        <?php 
        $reverse_position = horseclub_opt( 'horseclub_reverse_email_position' );
        $email = horseclub_opt('horseclub_header_left_text', esc_attr('info@example.com'));
        $phone = horseclub_opt( 'horseclub_header_phone', esc_html( '+880 123 12 658 439' ) );
        
        ?>
        <div class="col-lg-4 col-sm-4 menu-top-left">
            <?php
                if ($reverse_position == 1) { 
                    if( !empty( $phone ) ){ 
                        $attrNumber = str_replace(' ', '', $phone); ?>
                        <a href="tel:<?php echo esc_attr($attrNumber) ?>"><span class="lnr lnr-phone-handset"></span></a>
                        <a class="tel" href="tel:<?php echo esc_attr($attrNumber) ?>"><?php echo esc_html($phone); ?></a>
                        <?php
                    }
                }else{
                    if (!empty( $email) ) { ?>
                        <a href="mailto:<?php echo esc_attr($email) ?>"><span class="lnr lnr-location"></span></a>
                        <a class="tel" href="mailto:<?php echo esc_attr($email) ?>"><?php echo esc_html($email) ?></a>
                        <?php
                    }
                }
            ?>
        </div>
        <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
            <?php 
            // Header Logo
            echo horseclub_theme_logo();
            ?>                        
        </div>
        <div class="col-lg-4 col-sm-4 menu-top-right">
            <?php
            if ($reverse_position == 1) { 
                if (!empty($email)) {
                    ?>
                    <a class="tel" href="mailto:<?php echo esc_attr($email) ?>"><?php echo esc_html($email) ?></a>
                    <a href="mailto:<?php echo esc_attr($email) ?>"><span class="lnr lnr-location"></span></a>
                    <?php
                }
            }else{
                if ( !empty( $phone ) ) {
                    $attrNumber = str_replace(' ', '', $phone); ?>
                    <a class="tel" href="tel:<?php echo esc_attr($attrNumber) ?>"><?php echo esc_html($phone); ?></a>
                    <a href="tel:<?php echo esc_attr($attrNumber) ?>"><span class="lnr lnr-phone-handset"></span></a>
                    <?php
                }
            } ?>
        </div>  
    </div>
</div>  
    <hr>
<div class="container"> 
    <div class="row align-items-center justify-content-center d-flex">
      <nav id="nav-menu-container">
        <?php 
        //
        if( has_nav_menu( 'primary-menu' ) ) {
            $args = array(
                'theme_location' => 'primary-menu',
                'container'      => '',
                'depth'          => 2,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => 'horseclub_bootstrap_navwalker::fallback',
                'walker'         => new horseclub_bootstrap_navwalker(),
            );  
            wp_nav_menu( $args );
        }
        ?>
      </nav><!-- #nav-menu-container -->                    
    </div>
</div>
</header><!-- #header -->