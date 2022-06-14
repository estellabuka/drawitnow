<?php
/*
Template Name: Template page Про нас 
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
               <h1 class="project__title title">Про нас<span></span></h1>
               <div class="project__content">
                  <div class="project__text">
                     <p>Найбільше бажання сьогодні залишитись живим та допомогти рідній країні знов бути яскравою, коханою та вільною. Ми люди яким не байдуже майбутнє України. Зібравши усі зусілля, ми створили Фонд "Добровільної Допомоги розвитку України". Ми ті, хто залишились у рідному місті - Харків, щоб разом наблизити нашу перемогу як умого скоріш. Давайте здобудемо  перемогу разом!</p>
                     <p style="padding-top: 100px; padding-bottom: 40px;">Чим нас більше, тим ми сильніші.<br>Кожна допомога - це врятоване життя!</p>
                  </div>
                  <div class="project__image">
                     <div class="project__map"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/start.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/start.png" alt="start"></picture></div>
                     <div class="project__text-map">«Робимо, бо кохаємо тебе»</div>
                     <div class="project__fadu"><picture><source srcset="<?php echo get_template_directory_uri();?>/assets/img/FADU.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/assets/img/FADU.png" alt="FADU"></picture></div>
                  </div>
               </div>
            </div>
         </section>
        <section class="photo about-us_section">
            <div class="photo__container container">
               <div class="photo__content">                                   
                <?php
                    if( have_rows('our_team') ):
                        while ( have_rows('our_team') ) : the_row();
                            ?> 
                            <div class=" about-us_item">
                                <div class="carts__column content-photo__image content-photo__image_sertificate" style="flex: 0 0 25%;">                                 
                                        <img  style="max-width: 100%;" src="<?php the_sub_field('photo'); ?>"  alt="sertificat" >
                                </div>
                                <div class="about-us_name"> 
                                    <?php the_sub_field('name'); ?>
                                </div>
                            </div>
                            <?
                        endwhile;
                    else :
                    endif;
                ?> 
               </div>
               <div class="photo__text"></div>
            </div>
         </section>
      </main>
<?php

get_footer();