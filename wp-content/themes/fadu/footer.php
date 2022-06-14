<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FADU
 */

?>

	<footer id="colophon" class="site-footer">
         <div class="footer__container container">
            <div class="footer__head head-footer">
               <div class="head-footer__name">
                   <a href="https://fadu.in.ua/">
                   <img style="width: 113px; height: 100px; margin: 10px 25px;" src="https://www.fadu.in.ua/wp-content/uploads/2022/04/fadu_logo.webp">
                   </a>
                   </div>
               <div class="head-footer__social social-footer">
                  <ul class="social-footer__list">
                     <?php /* <li><a href="#"><img src="https://fadu.in.ua/wp-content/uploads/2022/04/m.png" alt=""></a></li>
                     <li><a href="#"><img src="https://fadu.in.ua/wp-content/uploads/2022/04/telegram2.png" alt=""></a></li> */?>
					  <li><a href="https://instagram.com/fadu_official_ua?igshid=YmMyMTA2M2Y="><img src="https://fadu.in.ua/wp-content/uploads/2022/04/Group-875.png" alt=""></a></li>
                     <li><a href="https://www.facebook.com/FreewillAidDevelopmentofUkraine"><img src="https://fadu.in.ua/wp-content/uploads/2022/04/facebook.png" alt=""></a></li>
                     <?php /* <li><a href="#"><img src="https://fadu.in.ua/wp-content/uploads/2022/04/twit.png" alt=""></a></li> */ ?> 
                  </ul>
               </div>
               <div  class="head-footer__button">
                   <a  href="https://fadu.in.ua/payment-details/" data-goto=".donate" class="main-button link-goto">Допомогти</a>
               </div>
            </div>
            <?php 
              function my_nav_menu( $args ) {
                $args = array_merge( [
                   'container'       => 'div',
                    'container_id'    => '',
                    'container_class' => 'footer__main',
                    'menu_class'      => '',
                    'echo'            => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 10,
                    'walker'          => new My_Walker_Nav_Menu()
                ], $args );
                  echo wp_nav_menu( $args );
               }
              my_nav_menu( [ 'theme_location'  => 'menu-1' ] );
            ?> 
           <?php /* <div class="footer__copy">Copyright @ <?php echo date('Y'); ?> Благодійна організація “Благодійний фонд “Промінь тепла” (код
               ЄДРПОУ 42513063). Неприбуткова організація, рішення №1802284600304 від 16.10.2018 р.</div> */ ?> 
         </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js?_v=20220416000818"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/app.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/appSecond.min.js"></script>

   <script type="module">
      import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

      const swiper = new Swiper('.swiper', {
         loop: true,
         pagination: {
            el: '.swiper-pagination',
         },
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
      });

      let opens = document.querySelectorAll('.content-photo__image').forEach(e => {
         e.addEventListener('click', () => {
               if (e.className == 'closes') {
                  return
               } else {
                  document.querySelectorAll('.content__open').forEach(CLOSE => {
                  CLOSE.classList.remove('_open')
                  })
                  e.querySelector('.content__open').classList.add('_open')
                  document.querySelector('body').classList.add('_lock')
               }
         })
      })
      let closes = document.querySelectorAll('.closes').forEach(e => {
         e.addEventListener('click', (e) => {
            e.stopPropagation()
            document.querySelectorAll('.content__open').forEach(CLOSE => {
               CLOSE.classList.remove('_open')
            })
            document.querySelector('body').classList.remove('_lock')
         })
      })
   </script>

<?php wp_footer(); ?>
</body>
</html>
