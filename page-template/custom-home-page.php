<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'vw_landing_page_before_slider' ); ?>

  <?php if( get_theme_mod( 'vw_landing_page_slider_hide_show', false) == 1 || get_theme_mod( 'vw_landing_page_resp_slider_hide_show', false) == 1) { ?>

  <section id="slider">
    <?php if(get_theme_mod('vw_landing_page_slider_type', 'Default slider') == 'Default slider' ){ ?>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'vw_landing_page_slider_speed',4000)) ?>">
        <?php $vw_landing_page_slider_pages = array();
          for ( $count = 1; $count <= 3; $count++ ) {
            $mod = intval( get_theme_mod( 'vw_landing_page_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $vw_landing_page_slider_pages[] = $mod;
            }
          }
          if( !empty($vw_landing_page_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $vw_landing_page_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/block-patterns/images/banner.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h1 class=" wow slideInRight delay-1000" data-wow-duration="2s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <?php if( get_theme_mod('vw_landing_page_slider_content_hide_show',true) == 1){ ?>
                    <p class=" wow slideInRight delay-1000" data-wow-duration="2s"><?php $vw_landing_page_excerpt = get_the_excerpt(); echo esc_html( vw_landing_page_string_limit_words( $vw_landing_page_excerpt, esc_attr(get_theme_mod('vw_landing_page_slider_excerpt_number','30')))); ?></p>
                  <?php } ?>
                  <?php if( get_theme_mod('vw_landing_page_slider_button_text','Read More') != ''){ ?>
                    <div class="more-btn wow slideInRight delay-1000" data-wow-duration="2s">
                      <a class="view-more" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_landing_page_slider_button_text',__('Read More','vw-landing-page')));?><i class="<?php echo esc_attr(get_theme_mod('vw_landing_page_slider_button_icon','fa fa-angle-right')); ?>"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_landing_page_slider_button_text',__('Read More','vw-landing-page')));?></span></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
            <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','vw-landing-page' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','vw-landing-page' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    <?php } else if(get_theme_mod('vw_landing_page_slider_type', 'Advance slider') == 'Advance slider'){?>
      <?php echo do_shortcode(get_theme_mod('vw_landing_page_advance_slider_shortcode')); ?>
    <?php } ?>
  </section>

  <?php } ?>

  <?php do_action( 'vw_landing_page_after_slider' ); ?>

  <?php if( get_theme_mod( 'vw_landing_page_info') != '') { ?>

  <section id="info-section" class=" wow zoomInDown delay-1000" data-wow-duration="2s">  
    <div class="container">
      <div class="row">
        <?php
          $vw_landing_page_catData =  get_theme_mod('vw_landing_page_info','');
          if($vw_landing_page_catData){
          $page_query = new WP_Query(array( 'category_name' => esc_html($vw_landing_page_catData,'vw-landing-page'))); ?>
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
          <div class="col-lg-4 col-md-4">
            <div class="info-box">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
              <p><?php $vw_landing_page_excerpt = get_the_excerpt(); echo esc_html( vw_landing_page_string_limit_words( $vw_landing_page_excerpt, esc_attr(get_theme_mod('vw_landing_page_info_excerpt_number','30')))); ?></p>
            </div>
          </div>
          <?php endwhile;
          wp_reset_postdata();
        } ?>
      </div>
    </div>
  </section>

  <?php }?>

  <?php do_action( 'vw_landing_page_after_services' ); ?>

  <section id="about-section" class=" wow bounceInDown delay-1000" data-wow-duration="2s">  
    <div class="container">
      <?php if( get_theme_mod( 'vw_landing_page_section_title') != '') { ?>
        <h3><?php echo esc_html( get_theme_mod( 'vw_landing_page_section_title','vw-landing-page') ); ?></h3>
        <hr>
      <?php }?>
      <div class="row about-box">
        <?php $vw_landing_page_service_page = array();
          $mod = absint( get_theme_mod( 'vw_landing_page_about','vw-landing-page'));
          if ( 'page-none-selected' != $mod ) {
            $vw_landing_page_service_page[] = $mod;
          }
          if( !empty($vw_landing_page_service_page) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $vw_landing_page_service_page,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $count = 0;
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-lg-7 col-md-7">
                  <h4><?php the_title(); ?></h4>
                  <p><?php $vw_landing_page_excerpt = get_the_excerpt(); echo esc_html( vw_landing_page_string_limit_words( $vw_landing_page_excerpt, esc_attr(get_theme_mod('vw_landing_page_about_excerpt_number','30')))); ?></p>
                  <?php if( get_theme_mod('vw_landing_page_about_button_text','Read More') != ''){ ?>
                    <div class="content-bttn">
                      <a class="view-more" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_landing_page_about_button_text',__('Read More','vw-landing-page')));?><i class="<?php echo esc_attr(get_theme_mod('vw_landing_page_about_button_icon','fa fa-angle-right')); ?>"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_landing_page_about_button_text',__('Read More','vw-landing-page')));?></span></a>
                    </div>
                  <?php } ?>
                </div>
                <div class="col-lg-5 col-md-5">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php $count++; endwhile; ?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php endif;
          endif;
          wp_reset_postdata();
        ?>
      </div>
    </div>  
  </section>

  <?php do_action( 'vw_landing_page_after_about_section' ); ?>

  <div id="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>