<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FADU
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.min.css?_v=20220404004530">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/styleSecond.min.css">
   <title>Україно, Жити</title>

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
   <div class="wrapper">
      <main>
         <header class="start-block start-block_header">
            <div class="start-block__container container">
               <div class="start-block__head">	
				<div class="start-block__name">
				    <a href="https://fadu.in.ua/">
				    <img style="width: 113px; height: 100px; margin: 10px 25px;" src="https://www.fadu.in.ua/wp-content/uploads/2022/04/fadu_logo.webp">
				    </a>
				</div>     
				<div class="start-block__name-about">Об'єднаймося заради нашого спільного майбутнього</div>
                  <div class="start-block__burger"><span class="burger"></span></div>
			<?php 
              function header_dev_nav_menu( $args ) {
                $args = array_merge( [
                   'container'       => 'nav',
                    'container_id'    => '',
                    'container_class' => 'menu',
                    'menu_class'      => 'menu__list',
                    'echo'            => false,
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 10,
                    'walker'          => new header_Walker_Nav_Menu()
                ], $args );
                  echo wp_nav_menu( $args );
               }
              header_dev_nav_menu( [ 'theme_location'  => 'menu_header' ] );
            ?>                 
               </div>

            </div>
         </header>
