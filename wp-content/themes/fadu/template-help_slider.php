<?php
/*
Template Name: Template page Допомога страница со слайдером
*/
?>
<?php $fields = get_fields(); ?>
<?
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
         <section class="big-title">
            <div class="big-title__container container">
               <h1 class="big-title__title"><?= $fields['title_help_h1']?></h1>
            </div>
         </section>
         <section class="about">
            <div class="about__container container">
               <h2 class="about__title title-h"><?= $fields['sub_title_help']?></h2>
               <div class="about__text"><?= $fields['helpl_p_1']?></div>
            </div>
         </section>
         <section class="content-slider">
            <div class="content-slider__container container">
               <h2 class="content-slider__title square__title title-h"><span><?= $fields['help_span_text']?></span></h2>
               <div class="content-slider__content content-slider slider">
                   	<?php // проверяем есть ли в повторителе данные
					   if( have_rows('help_slider') ):
					       // перебираем данные
					       while ( have_rows('help_slider') ) : the_row();
					       ?>
				            <div class="content-slider__item item-slider">
                                <div class="item-slider__image"><picture><source srcset="<?php the_sub_field('img'); ?>" type="image/webp"><img src="<?php the_sub_field('img'); ?>" alt="item"></picture></div>
                                <div class="item-slider__text"><?php the_sub_field('descr'); ?></div>
                            </div>
					       <?php
					       endwhile;
                        else :    // вложенных полей не найдено
                        endif;
                    ?>
               </div>
            </div>
         </section>
         <section class="help-h">
            <div class="help__container container">
               <a href="https://fadu.in.ua/payment-details/" class="help__button main-button">Допомогти</a>
            </div>
         </section>
      </main>
<?php

get_footer();