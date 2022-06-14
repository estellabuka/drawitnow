<?php
/*
Template Name: Template page Сертификаты
*/
?>
<?php $fields = get_fields(); ?>
<?
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
        <section class="photo">
            <div class="photo__container container">
               <div class="photo__content">                                   
                <?php
                    if( have_rows('sertificates') ):
                        while ( have_rows('sertificates') ) : the_row();
                            ?>                                            
                                <div class="carts__column content-photo__image content-photo__image_sertificate" style="flex: 0 0 25%;">                                   
                                        <img  style="max-width: 100%;" src="<?php the_sub_field('sertificate'); ?>"  alt="sertificat" >
                                           <div class="content__open open_sertificate">				 
                        					<div class="closes">x</div>			  
											<div class="swiper-slide popup-sertificate"><img class="sertificate_img" style="max-width: 100%;" src="<?php the_sub_field('sertificate'); ?>"  alt="sertificat" ></div>			 
									      </div>	  	
                                </div>
                            <?
                        endwhile;
                    else :
                    endif;
                ?> 
               </div>
               <div class="photo__text">Дякуємо за підтрику. Вона дуже необхідна.</div>
            </div>
         </section>
      </main>
<?php

get_footer();