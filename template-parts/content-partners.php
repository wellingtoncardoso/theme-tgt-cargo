<section id="cw-partners" class="cw-section" data-anime="bottom">
  <div class="container">
    <div class="row">
      <div class="col-12" data-anime="top">
        <div class="divider"></div>
        <div class="content">
          <h2>Estamos em processo de certificação</h2>
        </div>
      </div>
    </div>
    <div class="cw-slider-partners">
      <?php 
        $news = get_field( 'add_certificados',2 ); 
        if( $news ){
          foreach( $news as $news_desc ){ ?>
            <div class="thumbnail"><img src="<?php echo $news_desc[ 'image' ]; ?>" alt="Logos Certificados" <?php post_class(''); ?>></div>
          <?php }
        }
      ?>
    </div>
  </div>
</section>