<!-- Last works -->
<?php
    $servicesQuery = new WP_Query( array(
        'post_type'         => 'photos',
        'posts_per_page'    => -1,
        'orderby'           => 'date',
        'order'             => 'ASC'
    ));
?>
    <section class="paskutiniai_darbai">
      <?php
        if( $servicesQuery->have_posts() ) :
          while( $servicesQuery->have_posts() ) :
            $servicesQuery->the_post();
              ?>
              <div class="darbas">
          			<a href=""><img src="<?php the_field( 'image', get_the_ID() ) ?>" alt="darbas"></a>
          		</div>
                <?php endwhile;endif;?>
	    </section>
