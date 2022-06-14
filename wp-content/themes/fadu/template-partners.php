<?php
/*
Template Name: Template page Партнери 
*/
?>

<?
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
         <section class="project">
            <div class="project__container container">
               <h1 class="project__title title">Партнери<span></span></h1>
               <div class="project__content">
                  <div class="project__text">
                     <p></p>
                     <p></p>
                  </div>
                  <div class="project__image">
                     <div class="project__map"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/start.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/start.png" alt="start"></picture></div>
                     <div class="project__text-map">«Робимо, бо кохаємо тебе»</div>
                     <div class="project__fadu"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/FADU.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/FADU.png" alt="FADU"></picture></div>
                  </div>
               </div>
            </div>
         </section>
      </main>
<?php

get_footer();