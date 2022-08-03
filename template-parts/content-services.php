<section id="cw-services" class="cw-section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-3">
        <div class="divider"></div>
        <div class="content">
          <h2>Nossos serviços</h2>
          <p>Transcargo makes business flow. As one of the world’s leading non-asset-based supply chain management companies, we design and implement industry-leading solutions in both freight management.</p>
        </div>
      </div>
      <div class="col-12 col-md-9">
        <div class="cw-services">
          <div class="cw-slide-services">
            <?php for( $i=0; $i<4; $i++ ) { ?>
            <div>
              <div class="card-service">
                <div class="thumbnail"><img src="<?php echo get_template_directory_uri('')?>/assets/img/delete/image-service-01.jpg" alt="" <?php post_class( 'img' )?>></div>
                <div class="content">
                  <h3>Título</h3>
                  <p>Transcargo makes business flow. As one of the world’s leading non-asset-based supply chain management companies, we design and implement.</p>
                  <a href="" class="button"><?php echo esc_html( 'Lead more', 'cw' ); ?></a>
                </div>
              </div>
            </div>
            <!-- end details cards services -->
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>