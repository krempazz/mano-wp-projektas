<!-- Services -->
<?php
    $servicesQuery = new WP_Query( array(
        'post_type'         => 'services',
        'posts_per_page'    => -1,
        'orderby'           => 'date',
        'order'             => 'ASC'
    ));
?>
     <section class="paslaugos wrapper">
   			<h2><?php the_field( 'services_title', 76 ) ?></h2>
   			<div class="separator">
   				<img src="<?php the_field( 'separator', 76 ) ?>" alt="separator"/>
   			</div>
        	<ul>
        <?php
          if( $servicesQuery->have_posts() ) :
            while( $servicesQuery->have_posts() ) :
              $servicesQuery->the_post();
                ?>
           				<li>
           					<img class="ikonos" src="<?php the_field( 'service_icon', get_the_ID() ) ?>" alt=""/>
           					<h3><?php the_field( 'service_name', get_the_ID() ) ?></h3>
           					<p><?php the_field( 'service_description', get_the_ID() ) ?></p>
           				</li>
                <?php endwhile;endif;?>
              </ul>
   	    </section>
