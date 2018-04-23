<!-- Team -->

  <?php
      $servicesQuery = new WP_Query( array(
          'post_type'         => 'team',
          'posts_per_page'    => 3,
          'orderby'           => 'date',
          'order'             => 'ASC'
      ));
  ?>
    <section class="komanda wrapper">
      <h3><?php the_field( 'team_text', 76 ) ?></h3>
      <ul class="profiliai">
        <?php
          if( $servicesQuery->have_posts() ) :
            while( $servicesQuery->have_posts() ) :
              $servicesQuery->the_post();
                ?>
                <li>
                <a> <img class="avataras" src="<?php the_field( 'team_avatar', get_the_ID() ) ?>" alt="fotografe" </a>
                <h2> <?php the_field( 'name/position', get_the_ID() ) ?> </h2>
                <p><?php the_field( 'about', get_the_ID() ) ?></p>
              </li>
            <?php endwhile;endif;?>
          </ul>
    </section>
