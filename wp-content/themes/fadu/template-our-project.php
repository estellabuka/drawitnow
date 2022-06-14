<?php
/*
Template Name: Template page Наши проекты 
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
               <h1 class="project__title title">Наш Проект <span></span></h1>
               <div class="project__content">
                  <div class="project__text">
                     <p>План допомоги відбудови та розвитку Україні, спрямоване на швидке
                        покрашення інфраструктури та життя українців у місті на області.
                        План фонду « Добровільної допомоги розвитку Україні»
                        на сам перед зусередженний на 2 єтапи :</p>
                     <ul class="project__list">
                        <li>Під час війни - виконується план гуманітарної допомоги населенню,
                           військови та рятівникам структури ДСНС.</li>
                        <li>Після її закінченн - відбудова житлових будівль,
                           відкриття нових робочих міст, підтримка та допомога повернутись
                           у країнцям додому тощо.</li>
                     </ul>
                     <p>Фонд є офіційною організацією.
                        План розвитку та відбудови розробляеться спеціалістами політичного,
                        соціального, будівельного та архітектурного напрямку.</p>
                  </div>
                  <div class="project__image">
                     <div class="project__map"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/start.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/start.png" alt="start"></picture></div>
                     <div class="project__text-map">«Робимо, бо кохаємо тебе»</div>
                     <div class="project__fadu"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/FADU.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/FADU.png" alt="FADU"></picture></div>
                  </div>
               </div>
            </div>
         </section>
         <section class="photo">
            <div class="photo__container container">
               <div class="photo__content">
                  <div class="photo__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/photo/1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/photo/1.png" alt="photo"></picture></div>
                  <div class="photo__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/photo/2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/photo/2.png" alt="photo"></picture></div>
                  <div class="photo__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/photo/3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/photo/3.png" alt="photo"></picture></div>
                  <div class="photo__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/photo/4.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/photo/4.png" alt="photo"></picture></div>
                  <div class="photo__image"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/photo/5.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/photo/5.png" alt="photo"></picture></div>
               </div>
               <div class="photo__text">Дякуємо за підтрику. Вона дуже необхідна.</div>
            </div>
         </section>
         <section class="plan-scheme">
            <div class="plan-scheme__container container">
               <h1 class="plan-scheme__title title">Проект «Україно, Жити»<span></span></h1>
               <div class="plan-scheme__content content-plan-scheme">
                  <div class="content-plan-scheme__left left-plan-scheme">
                     <div class="left-plan-scheme__item plan-scheme-item yellow">I.Офіційна реєстрація фонду.<span>дата реєстрації
                           призначена
                           на
                           13.04.2022</span></div>
                     <div class="left-plan-scheme__item plan-scheme-item green">III.Організація гуманітарної <br> допомоги
                        <span>рятівникам
                           ДСНС</span><span>статус :
                           вже виконується</span>
                     </div>
                     <div class="left-plan-scheme__item plan-scheme-item yellow">V.Відкриття <span>Центру Допомоги <br>
                           населенню</span> у
                        Харкові.<span>статус :
                           очикуємо</span></div>
                  </div>
                  <div class="content-plan-scheme__center center-plan-scheme"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/plan.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/plan.png" alt="plan-scheme"></picture></div>
                  <div class="content-plan-scheme__right right-plan-scheme">
                     <div class="right-plan-scheme__item plan-scheme-item green">II.Організація гуманітарної <br> допомоги
                        <span>населенню</span><span>статус : вже
                           виконується</span>
                     </div>
                     <div class="right-plan-scheme__item plan-scheme-item green">IV.Організація гуманітарної <br> допомоги
                        <span>військовим</span><span>статус : вже
                           виконується</span>
                     </div>
                     <div class="right-plan-scheme__item plan-scheme-item yellow">VI.Допомога <span>тваринам</span>.
                        <ul class="item-plan-scheme__list">
                           <li>пошук приміщень для збору тварин</li>
                           <li>закупівля їжи для тварин</li>
                           <li>наймання працівників</li>
                           <li>закупівля обладнення</li>
                        </ul>
                        <span>статус : очикуємо</span>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="blossom">
            <div class="blossom__container container">
               <h1 class="blossom__title title">Проект «Україно, Розквітне»<span></span></h1>
               <ol class="blossom__content content-blossom" type="I">
                  <li class="content-blossom__item">Відбудова та реставрація
                     житлових будинків Харкова
                     Харківської області.
                  </li>
                  <li class="content-blossom__item">Формування нових робочих
                     мість за програмою
                     «Повернись додому»</li>
                  <li class="content-blossom__item">Розробка тимчасових
                     будинків для людей котрі
                     залишились без житла
                  </li>
                  <li class="content-blossom__item">Відкриття волонтерського
                     штабу допомоги відновлення
                     нерухомості малого бізнесу
                     котрі постраждали під час війни.</li>
               </ol>
            </div>
         </section>
      </main>
<?php

get_footer();