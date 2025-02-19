<a class="header__toggle-menu" href="#0" title="Menu"><span><?php _e('Menu','simple') ?></span></a>
    <nav class="header__nav-wrap">
      <h2 class="header__nav-heading h6"><?php _e('Navigate to','simple') ?></h2>
      <?php
		$simple_menu = wp_nav_menu(array(
			'theme_location'=>'primary',
			'menu_class'=>'header__nav',
			'echo'=>false
		));
		$simple_menu = str_replace("menu-item-has-children","menu-item-has-children has-children",$simple_menu);
		echo wp_kses_post( $simple_menu);
		?>
      <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu"><?php _e('Close','simple') ?></a>
    </nav>