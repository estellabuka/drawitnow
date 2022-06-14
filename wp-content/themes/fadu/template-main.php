<?php
/*
Template Name: Template page MAIN 
*/
?>

<?
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
        <section class="start-block">
            <div class="start-block__container container">
               <div class="start-block__main main-block">
                  <h1 class="main-block__title">«Україно, Жити!»</h1>
                  <div class="main-block__text">Фонд підтримки та допомоги <br> Майбутнього України.</div>
                  <div class="main-block__button button-block">
                     <a href="https://fadu.in.ua/payment-details/" data-goto=".donate" class="button-block__button main-button link-goto">Допомогти</a>
                     <a href="#" data-goto=".plan" class="button-block__button main-button link-goto">Що ми робимо</a>
                  </div>
               </div>
            </div>
         </section>
         <section class="info">
            <div class="info__container container">
               <div class="info__text"><b>24.02.2022</b> наше життя змінилось.<br> Війна хоче забрати<br> наш рідний дім
                  -
                  Україну.<br> Вже сьогодні багато людей <br> не повернуться додому. <br> Ми повинні це зупинити!
               </div>
               <div class="info__text">Freewill Aid Development of Ukraine - це можливість допомогти закінчити війну <br> та відбудувати країну
                  разом.</div>
               <div class="info__button"><a href="https://fadu.in.ua/payment-details/" data-goto=".donate" class="make-contribution link-goto">Зробити внесок</a></div>
            </div>
         </section>
         <section class="help">
         <div class="help__container container">
             <div class="help__links">
                    <?php // проверяем есть ли в повторителе данные
					   if( have_rows('main_help_menu-items') ):
					       // перебираем данные
					       while ( have_rows('main_help_menu-items') ) : the_row();
					       ?>
                            <div class="help_menu">
                                <img src="<?php the_sub_field('help_menu-tem_img'); ?>"/>
                                <div class="help__link"><a href="<?php the_sub_field('help_menu-item_link'); ?>"><?php the_sub_field('help_mennu-item_name'); ?></a></div>
                            </div>
					       <?php
					       endwhile;
                        else :    // вложенных полей не найдено
                        endif;
                    ?>
             </div>      
         </div>
         </section>
         <section class="map">
            <div class="map__container container">
               <div class="map__head head-map">
                  <h2 class="head-map__title">Кількість зруйнованих об’єктів <br> ЦИВІЛЬНОЇ ІНФРАСТРУКТУРИ
                     УКРАЇН<span>інформація статистики та інфограція вз’ята з офіційного сайту Ukranian Legal Advisory
                        Group</span></h2>
                  <div class="head-map__image"><img src="<?php echo get_template_directory_uri();?>/assets/img/ulag.png" alt="ULAG"></div>
               </div>
               <div class="head-map__main main-map">
                  <div class="main-map__image"><img src="<?php echo get_template_directory_uri();?>/assets/img/map.webp" alt="map"></div>
                  <div class="main-map__legend legend-map">
                     <div class="legend-map__item legend-map__item_1"><b>548</b> навчальних закладiв<br>(<b>72</b> - повнiстю) *</div>
                     <div class="legend-map__item legend-map__item_2">понад <b>4431</b> житлових будинкiв <br>(з них <b>651</b> - повнiстю)
                        *</div>
                     <div class="legend-map__item legend-map__item_3"><b>8</b> закладiв культури та<br> мистецтва *</div>
                     <div class="legend-map__item legend-map__item_4"><b>135</b> медичных закладiв<br>(<b>9</b> - повнiстю) *</div>
                  </div>
               </div>
               <div class="main-map__footer footer-map">
                  <div class="footer-map__text">* цих жахливих данних з кожним днем стає все більше. <br>
                     Кожного дня повідомляется о жерстких ситуаціях, де під завала опинились люди. <br>
                     За кожною цифрою стоїт багата людей, у котори тепер нема майбутьнього. </div>
               </div>
            </div>
         </section>
         <section class="photo">
            <div class="photo__container container">
               <h2 class="photo__title">УКРАЇНА СЬОГОДНІ : фотографії найбільш постраждалих міст</h2>
               <div class="photo__content content-photo">
                  <div class="content-photo__image">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv.webp" alt="Kyiv">
                     <div class="image__name">ХАРКІВ </div>
                     <div class="content__open">				 
                        <div class="closes">x</div>
                        <div class="swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_13.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_1.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_2.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_3.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_4.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_5.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_6.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_7.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_8.webp" alt="Kharkiv"></div>							   
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_9.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_10.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_11.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_12.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_14.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_15.webp" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Kharkiv_16.webp" alt="Kharkiv"></div>					   
                           </div>
                           <div class="swiper-pagination"></div>

                           <div class="swiper-button-prev"><img class="slider_arrow arrow_next" src="https://fadu.in.ua/wp-content/uploads/2022/04/next-button.png"></div>
                           <div class="swiper-button-next"><img class="slider_arrow arrow_back" src="https://fadu.in.ua/wp-content/uploads/2022/04/previous.png"></div>
                        </div>
                     </div>
                  </div>
				   <?php /*
                  <div class="content-photo__image">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/Kyiv.png" alt="Kyiv">
                     <div class="image__name">КИЇВ </div>
                     <div class="content__open">
                        <div class="closes">x</div>
                        <div class="swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="img/Kharkiv.png" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="img/Kharkiv.png" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="img/Kharkiv.png" alt="Kharkiv"></div>
                           </div>
                           <div class="swiper-pagination"></div>

                           <div class="swiper-button-prev"></div>
                           <div class="swiper-button-next"></div>
                        </div>
                     </div>
                  </div> */?> 
                  <div class="content-photo__image">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/Mariupol.png" alt="Mariupol">
                     <div class="image__name">МАРІУПОЛЬ</div>
                     <div class="content__open">
                        <div class="closes">x</div>
                        <div class="swiper">
                           <div class="swiper-wrapper">
							  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/Mariupol.png" alt="Mariupol"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/M_1.webp" alt="Mariupol"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/M_2.webp" alt="Mariupol"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/M_3.webp" alt="Mariupol"></div>
                           </div>
                           <div class="swiper-pagination"></div>
                           <div class="swiper-button-prev"><img class="slider_arrow arrow_next" src="https://fadu.in.ua/wp-content/uploads/2022/04/next-button.png"></div>
                           <div class="swiper-button-next"><img class="slider_arrow arrow_back" src="https://fadu.in.ua/wp-content/uploads/2022/04/previous.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="content-photo__image">
                     <img src="https://fadu.in.ua/wp-content/uploads/2022/04/C_1-e1649377159476.webp" alt="Chernihiv">
                     <div class="image__name">ЧЕРНІГІВ</div>
                     <div class="content__open">
                        <div class="closes">x</div>
                        <div class="swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/C_1.webp" alt="Chernihiv"></div>
                              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri();?>/assets/img/C_2.webp" alt="Chernihiv"></div>
                           </div>
                           <div class="swiper-pagination"></div>
                           <div class="swiper-button-prev"><img class="slider_arrow arrow_next" src="https://fadu.in.ua/wp-content/uploads/2022/04/next-button.png"></div>
                           <div class="swiper-button-next"><img class="slider_arrow arrow_back" src="https://fadu.in.ua/wp-content/uploads/2022/04/previous.png"></div>
                        </div>
                     </div>
                  </div>
				   <?php /*
                  <div class="content-photo__image">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/Sumi.png" alt="Sumi">
                     <div class="image__name">СУМИ</div>
                     <div class="content__open">
                        <div class="closes">x</div>
                        <div class="swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="img/Kharkiv.png" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="img/Kharkiv.png" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="img/Kharkiv.png" alt="Kharkiv"></div>
                           </div>
                           <div class="swiper-pagination"></div>

                           <div class="swiper-button-prev"></div>
                           <div class="swiper-button-next"></div>
                        </div>
                     </div>
                  </div>
                  <div class="content-photo__image">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/Kherson.png" alt="Kherson">
                     <div class="image__name">ХЕРСОН</div>
                     <div class="content__open">
                        <div class="closes">x</div>
                        <div class="swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="img/Kharkiv.png" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="img/Kharkiv.png" alt="Kharkiv"></div>
                              <div class="swiper-slide"><img src="img/Kharkiv.png" alt="Kharkiv"></div>
                           </div>
                           <div class="swiper-pagination"></div>

                           <div class="swiper-button-prev"></div>
                           <div class="swiper-button-next"></div>
                        </div>
                     </div>
                  </div>
				   */ ?>
               </div>
               <div class="photo__text">
                  * усі фото беруться заздалегіть тількі ті, котрі пройшли дозвіл та були оприлюднені в новинах. <br>
                  Їх дуже багато. Більшість не можно показувати, так як там жахіття котрі людство не повинно бачити.
                  <br>
                  Ми поважаємо авторьське право, якщо фото чи відео ваше не підписано, або так вийшло що ви потрапили на
                  нього - просимо вибачення. <br>
                  Світ повинен побачите те, що коїться саме зараз в Україні. <br>
                  <span>Слава Україні-Героям Слава.</span>
               </div>
               <div class="photo__button"><a href="https://fadu.in.ua/payment-details/" data-goto=".donate" class="main-button link-goto">Допомогти</a></div>
            </div>
         </section>
         <section class="plan">
            <div class="plan__container container">
               <div class="plan_new_subtitle-block">
                       <div>
                           <div class="plan_new_subtitle">
                                <h2 class="plan_new_subtitle_h2">
                                    РОСІЯ ВБИЛА 208 ДІТЕЙ
                                </h2>
                                <div class="plan_new_subtitle_div">понад <span>387</span> дітей поранено</div>
                           </div>

                           <h2 class="plan__title">«Україно, Жити!»<span>План допомоги під час війни</span></h2>
               <span class="today">*потрібно вже сьогодні</span>
                       </div>
                       <img class="plan_new_map_img"   src="http://fadu.in.ua/wp-content/uploads/2022/04/Group-63.png">
               </div>

               <div class="plan__content content-play">
                  <div class="content-play__item item-plan">
                     <div class="item-plan__head"><span class="number"></span>Допомога військоми
                        у знарядді та гуманітарна
                        допомога
                     </div>
                     <div class="item-plan__main">
                        <div class="main-plan__body">
                           <span class="today">*потрібно вже сьогодні
                           </span>
                           <ul class="main-plan__list">
                              <li>-Каски</li>
                              <li>-Тактичні рукавиці</li>
                              <li>-Тактичні окуляри</li>
                              <li>-Наколінники</li>
                              <li>-Локотники</li>
                              <li>-Зарядні пристрої</li>
                              <li>-Спальні мішки</li>
                              <li>-Дозиметри</li>
                              <li>-Бронежилети
                                 тощо.</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="content-play__item item-plan">
                     <div class="item-plan__head"><span class="number"></span>Допомога службі порятунку
                        у знарядді та гуманітарна
                        допомога
                     </div>
                     <div class="item-plan__main">
                        <div class="main-plan__body">
                           <span class="today">*потрібно вже сьогодні
                           </span>
                           <ul class="main-plan__list">
                              <li>-Зарядні пристрої</li>
                              <li>-Спальні мішки</li>
                              <li>-Дозиметри</li>
                              <li>-Бронежилети
                                 тощо.</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="content-play__item item-plan">
                     <div class="item-plan__head"><span class="number"></span>Відкриття пунктів
                        допомоги тваринам,
                        котрі залишились
                        на вулиці
                     </div>
                     <div class="item-plan__main">
                        <div class="main-plan__body">
                           <span class="today">*потрібно вже сьогодні
                           </span>
                           <ul class="main-plan__list">
                              <li>-Корм</li>
                              <li>-Притулки з опаленням</li>
                              <li>-Допомога людям, <br>
                                 які беруть під час <br>
                                 війни твари з вулиці</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="content-play__item item-plan">
                     <div class="item-plan__head"><span class="number"></span>Гуманітарна допомога
                        людям
                     </div>
                     <div class="item-plan__main main-plan">
                        <div class="main-plan__body">
                           <span class="today">*потрібно вже сьогодні
                           </span>
                           <ul class="main-plan__list">
                              <li>-Їжа </li>
                              <li>-Лікарськи препарати</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="content-play__button"><a href="https://fadu.in.ua/payment-details/" data-goto=".donate" class="link-goto">Допомогти</a></div>
               <h2 class="plan__title">«Україно, Розквітне!»<span>План допомоги та відновлення країни
                  </span></h2>
               <span class="today">*потрібно вже сьогодні
               </span>
               <div class="plan__content content-play">
                  <div class="content-play__item item-plan">
                     <div class="item-plan__head"><span class="number"></span>Відбудова та реставрація
                        житлових будинків Харкова
                        та Харківської області.
                     </div>
                  </div>
                  <div class="content-play__item item-plan">
                     <div class="item-plan__head"><span class="number"></span>Формування нових робочих
                        мість за програмою
                        «Повернись додому»
                     </div>
                  </div>
                  <div class="content-play__item item-plan">
                     <div class="item-plan__head"><span class="number"></span>Розробка тимчасових
                        будинків для людей, котрі
                        залишились без житла
                     </div>
                  </div>
                  <div class="content-play__item item-plan">
                     <div class="item-plan__head"><span class="number"></span>Відкриття пунктів
                        психологічної допомоги
                        людям, котрі потрапили
                        у скрутне становище
                     </div>
                  </div>
                  <div class="content-play__item item-plan">
                     <div class="item-plan__head"><span class="number"></span>Переобладнання лагера для психологичної реабілітаціїні
                        для сімей, котрі постраждали
                        після війни
                     </div>
                  </div>
                  <div class="content-play__item item-plan">
                     <div class="item-plan__head"><span class="number"></span>Допомога малому та середньому бізнесу, котрі постраждали за війни
                     </div>
                  </div>
               </div>
               <div class="content-play__button"><a href="https://fadu.in.ua/payment-details/" data-goto=".donate" class="link-goto">Допомогти</a></div>
            </div>
         </section>
         <section class="donate">
            <div class="donate__container container">
               <h2 class="donate__title">Як допомогти?</h2>
               <div class="donate__content content-donate">
                  <div class="content-donate__body">
                     <ul class="content-donate__list">
                         <?php
                         $req_1 = get_field('requisites_1');
                         $req_2 = get_field('requisites_2');
                         $req_3 = get_field('requisites_3');
                         $req_4 = get_field('requisites_4');
                         ?>
                        <li class="help_requisites_main">
                            <img src="<?=$req_1['icon_requisite']?>">
                            <a class="help_requisites_main_link" href="<?=$req_1['link_requisite']?>"><?= $req_1['text_requisite']?></a>
                        </li>
                        <li class="help_requisites_main">
                            <img src="<?=$req_2['icon_requisite']?>">
                            <a class="help_requisites_main_link" href="<?=$req_2['link_requisite']?>"><?= $req_2['text_requisite']?></a>                        
                        </li>
                        <li class="help_requisites_main">
                            <img src="<?=$req_3['icon_requisite']?>">
                            <a class="help_requisites_main_link" href="<?=$req_3['link_requisite']?>"><?= $req_3['text_requisite']?></a>     
                        </li>
                        <li class="help_requisites_main">
                            <img src="<?=$req_4['icon_requisite']?>">
                            <a class="help_requisites_main_link" href="<?=$req_4['link_requisite']?>"><?= $req_4['text_requisite']?></a>     
                        </li>
                     </ul>
                  </div>
                  <div class="content-donate__image"><img src="<?php echo get_template_directory_uri();?>/assets/img/map-help.webp" alt="map-help"></div>
               </div>
            </div>
         </section>
         <section class="blog">
            <div class="blog__container container">
               <h2 class="blog__title">БЛОГ ФОНДУ </h2>
               <div class="blog__content"></div>
               <div class="blog__footer">Буль ласка, діліться нашим спільним проектом. Наша сила у єдності! <br>
                  Ми переможем! Слава Україні - Героям Слава.</div>
            </div>
         </section>
      </main>
<?php
get_footer();