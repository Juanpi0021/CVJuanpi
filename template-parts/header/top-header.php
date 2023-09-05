<?php
/**
 * The template part for top header
 *
 * @package VW Landing Page 
 * @subpackage vw_landing_page
 * @since VW Landing Page 1.0
 */
?>
<?php if( get_theme_mod( 'vw_landing_page_topbar_hide_show', false) == 1 || get_theme_mod( 'vw_landing_page_resp_topbar_hide_show', false) == 1) { ?>
  <div id="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-3">
          <?php dynamic_sidebar('social-links'); ?>
        </div>
        <div class="col-lg-2 col-md-3">
          <?php if( get_theme_mod( 'vw_landing_page_phone') != '') { ?>
            <div class="top-margin">
              <i class="<?php echo esc_attr(get_theme_mod('vw_landing_page_phone_no_icon','fas fa-phone')); ?>"></i><span><a href="tel:<?php echo esc_attr( get_theme_mod('vw_landing_page_phone','') ); ?>"><?php echo esc_html(get_theme_mod('vw_landing_page_phone',''));?></a></span>
            </div>
          <?php }?>
        </div>
        <div class="col-lg-3 col-md-4">
          <?php if( get_theme_mod( 'vw_landing_page_email') != '') { ?>
            <div class="top-margin">
              <i class="<?php echo esc_attr(get_theme_mod('vw_landing_page_email_icon','far fa-envelope')); ?>"></i><span><a href="mailto:<?php echo esc_attr(get_theme_mod('vw_landing_page_email',''));?>"><?php echo esc_html(get_theme_mod('vw_landing_page_email',''));?></a></span>
            </div>
          <?php }?>
        </div>
        <div class="col-lg-3 col-md-2">
          <div class="top-btn">
            <?php if( get_theme_mod( 'vw_landing_page_topbtn_text') != '' || get_theme_mod( 'vw_landing_page_topbtn_url') != '') { ?>
              <a href="<?php echo esc_url(get_theme_mod('vw_landing_page_topbtn_url',''));?>"><?php echo esc_html(get_theme_mod('vw_landing_page_topbtn_text',''));?><span class="screen-reader-text"><?php esc_html_e( 'REQUEST A CONSULT','vw-landing-page' );?></span></a>
            <?php }?>
          </div>
        </div>
      </div>  
    </div>
  </div>
<?php } ?>