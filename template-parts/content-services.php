<section id="cw-services" class="cw-section">
  <div class="container">
    <div class="row">
      
      <div class="col-12" data-anime="top">
        <div class="divider"></div>
        <div class="content">
          <h2>Nossos serviços</h2>
          <p>Realizamos todos os tipos de transporte e fulfillment, contando com profissionais altamente capacitados, treinados e habilitados para o gerenciamento de suas cargas, contado com uma frota completa para seu atendimento.</p>
        </div>
      </div>

      <?php  
        $args = array(
          'post_type' => 'service',
          'post_status' => 'public'
        );
        $my_query = new WP_Query( $args );

        if( $my_query->have_posts() ):
          while( $my_query->have_posts() ): $my_query->the_post(); 
      ?>
      <div class="col-12 col-sm-6 col-lg-4 m-auto">
        <div class="cw-services">
          <div class="card-service">
            <div class="item"><i class="fa fa-check"></i></div>
            <div class="content">
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
      </div>
      <!-- end details cards services -->
      <?php endwhile; endif; ?>
    </div>

  </div>
</section>