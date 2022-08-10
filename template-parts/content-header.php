<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand logo-scroll" href="<?php echo esc_url(home_url( '/' )); ?>"><img src="<?php echo get_template_directory_uri('')?>/assets/img/logo-primary-tgt-cargo.png" class="logo-header" alt="Logo TGT Cargo"></a>
      <a class="navbar-brand logo-fixed" href="<?php echo esc_url(home_url( '/' )); ?>"><img src="<?php echo get_template_directory_uri('')?>/assets/img/logo-white-tgt-cargo.png" class="logo-header" alt="Logo TGT Cargo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsTGTCargo" aria-controls="navbarsTGTCargo" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsTGTCargo">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#cw-about">Quem Somos</a></li>
          <li class="nav-item"><a class="nav-link" href="#cw-services">Serviços</a></li>
          <li class="nav-item"><a class="nav-link" href="#cw-partners">Certificações</a></li>
          <li class="nav-item"><a class="nav-link" href="#cw-contact">Contato / Orçamentos</a></li>
        </ul>
        <div class="my-2 my-md-0 d-flex"><?php echo do_shortcode('[gtranslate]'); ?></div>
      </div>
    </div>
  </nav>
</header>
<!-- header ends -->