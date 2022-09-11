<div id="cw-slider">
  <div class="cw-slider">
    <?php 
      $news = get_field( 'add_banner', 2 );
      if( $news ){
        foreach( $news as $news_desc ){ ?>
          <div>
            <div class="thumbnail"><img src="<?php echo $news_desc[ 'image' ]; ?>" alt="" <?php post_class( 'img-fluid' )?>></div>
            <div class="content">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-sm-10 col-xl-8 m-auto cw-div-opacity">
                    <div class="details"><?php echo $news_desc[ 'content' ]; ?></div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }
        }
      ?>   
    <!-- end div -->
  </div>
  <div class="cw-slider-nav">
    <?php $news_nav = get_field( 'add_banner',2 ); if($news_nav){ foreach( $news_nav as $news_item_nav ){?>
      <div class="slider-item"><span><?php echo $news_item_nav[ 'banner-title-nav' ]; ?></span></div>
    <?php } }?>
  </div>
</div>