<?php 
/**
* Footer Template
 *
 * @package IndustrialPark
 */
 $menu_class = \INDUSTRIALPARK_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'industrialpark-footer-quicklink-menus' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );

$header_menu_id2 = $menu_class->get_menu_id( 'industrialpark-footer-resource-menus' );
$header_menus2 = wp_get_nav_menu_items( $header_menu_id2 );

$locations = get_nav_menu_locations(); //get all menu locations
$menu = wp_get_nav_menu_object($locations['industrialpark-footer-quicklink-menus']);//get the menu object
$menu2 = wp_get_nav_menu_object($locations['industrialpark-footer-resource-menus']);//get the menu object
 ?>
<footer id="footer" class="footer">
    <div class="main-container-footer">
      <div class="container-2 w-container">
        <div class="footer-flex-container">
          <div class="footer-links-container">
            <h2 class="footer-heading"><?php 
            if( ! empty($menu)){
              echo $menu->name;
            }       
            ?></h2>
            <ul role="list" class="w-list-unstyled">
            <?php
			if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
					foreach ( $header_menus as $menu_item ) {
						if ( ! $menu_item->menu_item_parent ) {
								?>
              <li class="list-item-2">
                <a href="<?php echo esc_url( $menu_item->url ); ?>" class="footer-link">
                <?php echo esc_html( $menu_item->title ); ?>
              </a>
                <div class="footer-link-underline"></div>
              </li>
              <?php
							} 
            }
          }
								?>
            </ul>
          </div>
          <div class="footer-links-container">
            <h2 class="footer-heading"><?php 
            if( ! empty($menu2)){
              echo $menu2->name;
            }       
            ?></h2>
            <ul role="list" class="w-list-unstyled">
            <?php
                if ( ! empty( $header_menus2 ) && is_array( $header_menus2 ) ) {
                    foreach ( $header_menus2 as $menu_item ) {
                      if ( ! $menu_item->menu_item_parent ) {
                          ?>
                        <li class="list-item-2">
                          <a href="<?php echo esc_url( $menu_item->url ); ?>" class="footer-link">
                          <?php echo esc_html( $menu_item->title ); ?>
                        </a>
                          <div class="footer-link-underline"></div>
                        </li>
                        <?php
                        } 
                      }
                    }
								?>
            </ul>
          </div>
          <div class="footer-links-container">

            <h2 class="footer-heading">          <?php 
      if(get_theme_mod( 'IndustrailPark_rights_handle')){
            echo esc_html(get_theme_mod( 'IndustrailPark_social_handle')); 
          } ?></h2>
            <ul role="list" class="w-list-unstyled">
              
              <?php 
                if(get_theme_mod( 'IndustrailPark_facebook_handle')){ ?>  
                <li class="list-item-2"> 
                <a href="<?php  echo esc_html(get_theme_mod( 'IndustrailPark_facebook_handle')); ?>" class="footer-link">Facebook</a>
                <div class="footer-link-underline"></div>
              </li>
                <?php   } ?>
                <?php 
                if(get_theme_mod( 'IndustrailPark_instagram_handle')){ ?>  
              <li class="list-item-2">
                <a href="<?php  echo esc_html(get_theme_mod( 'IndustrailPark_instagram_handle')); ?>" class="footer-link">Instagram</a>
                <div class="footer-link-underline"></div>
              </li>
              <?php   } ?>
                <?php 
                if(get_theme_mod( 'IndustrailPark_twitter_handle')){ ?> 
              <li class="list-item-2">
                <a href="<?php  echo esc_html(get_theme_mod( 'IndustrailPark_twitter_handle')); ?>" class="footer-link">Twitter</a>
                <div class="footer-link-underline"></div>
              </li>
              <?php   } ?>
                <?php 
                if(get_theme_mod( 'IndustrailPark_linkedin_handle')){ ?> 
              <li class="list-item-2">
                <a href="<?php  echo esc_html(get_theme_mod( 'IndustrailPark_linkedin_handle')); ?>" class="footer-link">Linked In</a>
                <div class="footer-link-underline"></div>
              </li>
              <?php   } ?>
            </ul>
          </div>
        
          <div class="footer-links-container invisible">
            <h2 class="footer-heading">Heading Label</h2>
            <ul role="list" class="w-list-unstyled">
              <li>
                <a href="#" class="footer-link">Text Link</a>
              </li>
              <li>
                <a href="#" class="footer-link">Text Link</a>
              </li>
              <li>
                <a href="#" class="footer-link">Text Link</a>
              </li>
              <li>
                <a href="#" class="footer-link">Text Link</a>
              </li>
              <li>
                <a href="#" class="footer-link">Text Link</a>
              </li>
            </ul>
          </div>
          <div class="footer-links-container foot vertical-flex">
          <?php 
                if(get_theme_mod( 'IndustrailPark_headoffice_handle')){ ?> 
            <div class="footer-contact-info-wrapper">
              <h2 class="footer-heading">Head Office</h2>
              <a href="https://goo.gl/maps/oH8tAWMp1fWSurxG9" target="_blank" class="footer-paragraph"><?php  echo esc_html(get_theme_mod( 'IndustrailPark_headoffice_handle')); ?></a>
            </div>
            <?php   } ?>
            <?php 
                if(get_theme_mod( 'IndustrailPark_industrialpark_handle')){ ?> 
            <div class="footer-contact-info-wrapper margin-top">
              <h2 class="footer-heading">Industrial Park</h2>
              <a href="https://goo.gl/maps/5oPB2CQBEbLKKZP4A" target="_blank" class="footer-paragraph"><?php  echo esc_html(get_theme_mod( 'IndustrailPark_industrialpark_handle')); ?></a>
            </div>
            <?php   } ?>
            <?php 
                if(get_theme_mod( 'IndustrailPark_email_handle')){ ?> 
            <div class="footer-contact-info-wrapper margin-top">
              <h2 class="footer-heading">Email</h2>
              <ul role="list" class="w-list-unstyled">
                <li class="list-item-2">
                  <a href="mailto:<?php  echo esc_html(get_theme_mod( 'IndustrailPark_email_handle')); ?>?subject=You%20have%20a%20new%20message%20from%20the%20website!" class="footer-link"><?php  echo esc_html(get_theme_mod( 'IndustrailPark_email_handle')); ?></a>
                  <div class="footer-link-underline"></div>
                </li>
              </ul>
            </div>
            <?php   } ?>
          </div>
        </div>
        <div class="footer-line"></div>
        <div class="footer-text-wrapper">
          <div class="text-block"> <?php 
      if(get_theme_mod( 'IndustrailPark_rights_handle')){
            echo esc_html(get_theme_mod( 'IndustrailPark_rights_handle')); 
      } ?></div>
        </div>
      </div>
    </div>
  </footer>

 <?php wp_footer(); ?> 
</body>
</html>