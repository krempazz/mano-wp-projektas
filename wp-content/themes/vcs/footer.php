<footer>
  <div class="wrapper">

<!-- naujienlaiskis -->
    <section class="newsletter">
        <div class="wrapper">
          <p><?php the_field( 'title_text1', 76 ) ?> <br> <?php the_field( 'title_text2', 76 ) ?></p>
          <form method="" action="" class="sub_form">
            <input type="text" id="" class="email_field" placeholder="<?php the_field( 'name', 76 ) ?>">
            <input type="text" id="" class="name_field" placeholder="<?php the_field( 'email', 76 ) ?>">
            <input type="submit" id="" class="submit_nl" value="<?php the_field( 'subscribe', 76 ) ?>">
          </form>
        </div>
      </section>

      <!-- Map -->
      <div class="section">
        <div class="map_container">
          <?php
            get_template_part ('elements/map')
           ?>
        </div>
      </div>

    <div class="footer_widget">
      <div class="kontaktu_blokas">
        <h3><?php the_field( 'contacts', 76 ) ?> </h3>
          <p>
            <p>Ulonų g. 5, <br> 08240 Vilnius, <br> Lithuania  <span class="phone">+370 (656) 91000</span></p>
          </p>

          <ul class="social">
            <li><a class="fb" href="http://www.facebook.com" target="_blank"></a></li>
            <li><a class="twitter" href="http://www.twitter.com" target="_blank"></a></li>
            <li><a class="instagram" href="http://www.instagram.com" target="_blank"></a></li>
          </ul>
        </div>

        <div class="kontaktu_blokas">
          <h3>Kompanija</h3>
          <ul>
            <li><a href="#">Mūsų istorija</a></li>
            <li><a href="#">Misija</a></li>
            <li><a href="#">Žurnalas</a></li>
            <li><a href="#">Karjera</a></li>
          </ul>
        </div>

        <div class="kontaktu_blokas">
          <h3>Pagalba</h3>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Susisiekite su mumis</a></li>
            <li><a href="#">Taisyklės</a></li>
          </ul>
        </div>

        <div class="kontaktu_blokas">
          <h3>Privatumas</h3>
          <p>ES asmens duomenų apsaugos ir privatumo elektroninių ryšių srityje taisyklės taikomos interneto ryšiui, pavyzdžiui, interneto prieigai, ir komunikacijai mobiliųjų bei fiksuotojo ryšio telefonų tinkluose.</p>
        </div>
      </div>

      <p class="teises">© 2018 AK studio  -  Visos teisės saugomos. Privatumas ir atsakomybė.</p>

      </div>
    </footer>
  <?php wp_footer(); ?>
</body>
</html>
