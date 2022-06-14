<?php
/*
Template Name: Template page Допомога ЗСУ
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
               <h1 class="big-title__title">Допомога військовим та ДСНС</h1>
            </div>
         </section>
         <section class="about">
            <div class="about__container container">
               <div class="about__text">ДСНС – це українські супергерої, вони не припиняють роботу навіть під
                  обстрілами, ліквідують масштабні пожежі, дістають людей з під завалів, знешкоджують вибухонебезпечні
                  предмети.</div>
               <h2 class="about__title title-h">Вони ризикують своїм життям заради нашого!</h2>
               <div class="about__text">Нажаль, багато рятувальників гине, бо не мають гарної спеціальної захисної
                  амуніції. Життя і здоров’я кожного з них безцінне.</div>
            </div>
         </section>
         <section class="store">
            <div class="store__container container">
               <h2 class="store__title square__title title-h"><span>Допоможіть врятувати ДСНС закупивши амуніцію, поки вони рятують нас!</span></h2>
               <div class="store__content content-store">
                  <a href="#" class="content-store__item item-store">
                     <div class="item-store__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/store/9.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/store/9.png" alt="item"></picture></div>
                     <div class="item-store__name">ТАКТИЧНІ РУКАВИЧКИ TRUE GUARD З КАСТЕТОМ ГУМОВИМ ОЛИВА</div>
                  </a>
                  <a href="#" class="content-store__item item-store">
                     <div class="item-store__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/store/8.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/store/8.png" alt="item"></picture></div>
                     <div class="item-store__name">КОСТЮМ ГОРКА MULTICAM</div>
                  </a>
                  <a href="#" class="content-store__item item-store">
                     <div class="item-store__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/store/7.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/store/7.png" alt="item"></picture></div>
                     <div class="item-store__name">КРОСІВКИ ТАКТИЧНІ ALLIGATOR ОЛИВА</div>
                  </a>
                  <a href="#" class="content-store__item item-store">
                     <div class="item-store__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/store/1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/store/1.png" alt="item"></picture></div>
                     <div class="item-store__name">РЮКЗАК ШТУРМОВИЙ ВЕЛИКИЙ MIL-TEC 36 Л WOODLAND-ARID</div>
                  </a>
                  <a href="#" class="content-store__item item-store">
                     <div class="item-store__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/store/6.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/store/6.png" alt="item"></picture></div>
                     <div class="item-store__name">ПАНАМА MIL-TEC MULTICAM</div>
                  </a>
                  <a href="#" class="content-store__item item-store">
                     <div class="item-store__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/store/3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/store/3.png" alt="item"></picture></div>
                     <div class="item-store__name">ТАКТИЧНІ РУКАВИЧКИ TRUE GUARD З КАСТЕТОМ ГУМОВИМ ОЛИВА</div>
                  </a>
                  <a href="#" class="content-store__item item-store">
                     <div class="item-store__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/store/4.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/store/4.png" alt="item"></picture></div>
                     <div class="item-store__name">ТАКТИЧНІ РУКАВИЧКИ TRUE GUARD З КАСТЕТОМ ГУМОВИМ ОЛИВА</div>
                  </a>
                  <a href="#" class="content-store__item item-store">
                     <div class="item-store__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/store/2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/store/2.png" alt="item"></picture></div>
                     <div class="item-store__name">ТАКТИЧНІ РУКАВИЧКИ TRUE GUARD З КАСТЕТОМ ГУМОВИМ ОЛИВА</div>
                  </a>
                  <a href="#" class="content-store__item item-store">
                     <div class="item-store__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/store/5.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/store/5.png" alt="item"></picture></div>
                     <div class="item-store__name">ТАКТИЧНІ РУКАВИЧКИ TRUE GUARD З КАСТЕТОМ ГУМОВИМ ОЛИВА</div>
                  </a>
               </div>
            </div>
         </section>
         <section class="help">
            <div class="help__container container">
               <a href="https://fadu.in.ua/payment-details/" class="help__button main-button">Допомогти</a>
            </div>
         </section>
      </main>
<?php

get_footer();