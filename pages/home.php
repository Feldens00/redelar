<?php
/* Template name: home */
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center py-3">
        <h6 class="color-primary font-weight-bold">ORÇAMENTO GRATUITO <?php echo get_field('phone-contact'); ?> OU <?php echo get_field('whats-contact'); ?></h6>
      </div>
      <div class="col-md-12 p-0">
        <?php get_template_part('components/navbar'); ?>
      </div>
    </div>
  </div>

  <!-- Header -->
  <div class="container-fluid mt-5" id="header" style="background-image: url(<?php echo get_field('img-header');?>);">
  </div>

  <!-- Serviços -->
  <div class="container text-center" id="service">
    <div class="row h-100">
      <div class="col-md-12 my-auto py-md-0 py-5">
        <div class="row py-md-4 py-3">
          <div class="col-md-12">
            <hr class="hr-second">
            <h2 class="color-second font-weight-bold"><?php echo get_field('title-service');?></h2>
          </div>
        </div>
        <div class="row py-md-4 py-3" hidden>
          <div class="col-md-3">
            <img src="<?php echo get_field('icon-service');?>" class="img-fluid" width="125px">
            <p class="text-service text-muted"><?php echo get_field('text-icon-service');?></p>
          </div>
          <div class="col-md-3">
            <img src="<?php echo get_field('icon-service-2');?>" class="img-fluid" width="125px">
            <p class="text-service text-muted"><?php echo get_field('text-icon-service-2');?></p>
          </div>
          <div class="col-md-3">
            <img src="<?php echo get_field('icon-service-3');?>" class="img-fluid" width="125px">
            <p class="text-service text-muted"><?php echo get_field('text-icon-service-3');?></p>
          </div>
          <div class="col-md-3">
            <img src="<?php echo get_field('icon-service-4');?>" class="img-fluid" width="125px">
            <p class="text-service text-muted"><?php echo get_field('text-icon-service-4');?></p>
          </div>
        </div>
        <div class="row py-md-4 py-3">
          <div class="col-md-12 text-muted">
            <?php the_field('text-service') ;?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a href="#contact" class="btn btn-info btn-rounded bg-second" role="button">Saiba Mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Importancia -->
  <div class="container-fluid text-center px-0 bg-primary" id="importance">
    <div class="row m-0 h-100">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-12 my-auto py-md-0 py-5">
            <div class="row py-md-4 py-5">
              <div class="col-md-12 pb-5">
                <h2 class="text-white font-weight-bold"><?php echo get_field('title-importance');?></h2>
                <hr class="hr-primary">
              </div>
            </div>
            <div class="row h-100">
              <div class="col-md-6 my-auto text-white">
                <?php echo get_field('text-importance');?>
              </div>
              <div class="col-md-6 my-auto">
                <div id="accordion" class="myaccordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          Video 1
                        </button>
                      </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <?php echo get_field('url-importance');?>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Video 2
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <?php echo get_field('url-importance-2');?>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Video 3
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <?php echo get_field('url-importance-3');?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Orçamento -->
  <div class="container-fluid text-center px-0" id="budget">
    <div class="row m-0 h-100">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-12 my-auto py-md-0 py-5">
            <div class="row py-md-4 py-3">
              <div class="col-md-12">
                <h2 class="color-second font-weight-bold"><?php echo get_field('title-budget');?></h2>
                <hr class="hr-second">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 py-md-4 py-3 text-muted">
                <?php the_field('text-budget') ;?>
              </div>
              <div class="col-md-12">
                <?php 
                  $string = get_field('msg-whats'); 
                  $msg = str_replace(' ','%20',$string);
                  $string = get_field('whats-contact');
                  $string = str_replace(' ','',$string);
                  $string = str_replace('(','',$string);
                  $string = str_replace(')','',$string);
                  $number = str_replace('-','',$string);
                  $number = '55'.$number;
                  $whats_url = 'https://wa.me/'.$number.'?text='.$msg;
                ?>
                <a href="<?php echo $whats_url; ?>" class="btn btn-info btn-rounded bg-second" role="button">Contate-nos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sobre -->
  <div class="container-fluid px-0 text-md-left text-center bg-primary" id="about">
    <div class="row m-0 h-100">
      <div class="col-md-6 col-12">
        <div class="row h-100">
         <div class="offset-md-3 col-md-6 offset-0 col-12 my-auto py-md-0 py-5">
           <div class="col-md-12 py-md-4 py-3">
             <h2 class="text-white font-weight-bold"><?php echo get_field('title-about') ;?></h2>
             <hr class="hr-primary">
           </div>
           <div class="col-md-12 py-md-4 py-3 text-white">
             <?php the_field('text-about') ;?>
           </div>
         </div>
        </div>
      </div>
      <div class="col-md-6 col-12" id="img-about" style="background-image: url(<?php echo get_field('img-about') ;?>);"></div>
    </div>
  </div>

  <!-- Contato -->
  <div class="container-fluid text-center px-0" id="contact">
    <div class="row m-0 h-100">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-12 my-auto py-md-0 py-5">
            <div class="row py-md-4 py-3">
              <div class="col-md-12">
                <h2 class="color-second font-weight-bold"><?php echo get_field('title-contact');?></h2>
                <hr class="hr-second">
              </div>
            </div>
            <div class="row py-md-4 py-3">
              <div class="col-md-6 col-12">
                <iframe src="<?php echo get_field('maps-contact'); ?>" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="col-md-6 col-12 text-left py-md-0 py-5">
                <p class="text-muted"><i class="fas fa-phone-alt"></i> <?php echo get_field('phone-contact'); ?></p>
                <p class="text-muted">
                  <a href="<?php echo $whats_url; ?>" class="text-muted">
                    <i class="fab fa-whatsapp"></i> 
                    <?php echo get_field('whats-contact'); ?>
                  </a>
                </p>
                <p class="text-muted"><i class="fas fa-envelope"></i> <?php echo get_field('email-contact'); ?></p>
                <p class="text-muted"><i class="fas fa-map-marker-alt"></i> <?php echo get_field('address-contact'); ?></p>
                <?php the_field('form-contact') ;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid px-0">
    <div class="col-md-12 text-center">
      <a href="https://github.com/Feldens00" class="text-muted">
        <p class="m-0 p-0">Artur Feldens</p>
      </a>
    </div>
    <a href="<?php echo $whats_url; ?>" style="position: fixed;z-index: 10;bottom: 2rem;right: 2rem;">
      <img src="<?php echo get_template_directory_uri(); ?>/img/icons/whats-icone.png" class="img-fluid" width="50px">
    </a>
  </div>
<?php endwhile; ?>
<?php get_footer(); ?>
