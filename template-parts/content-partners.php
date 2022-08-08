<section id="cw-partners" class="cw-section">
  <div class="container">
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