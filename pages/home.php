<?php
/* Template name: home */
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center py-3">
        <h6 class="color-primary font-weight-bold">ORÇAMENTO GRATUITO (51) 9805-3423 OU (51) 9805-3423</h6>
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
        <div class="row py-md-4 py-3">
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
        <div class="row">
          <div class="col-md-12">
            <a href="#contact" class="btn btn-info btn-rounded bg-second" role="button">Saiba Mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Orçamento -->
  <div class="container-fluid text-center px-0 bg-primary" id="budget">
    <div class="row m-0 h-100">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-12 my-auto py-md-0 py-5">
            <div class="row py-md-4 py-3">
              <div class="col-md-12">
                <h2 class="text-white font-weight-bold"><?php echo get_field('title-budget');?></h2>
                <hr class="hr-primary">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 py-md-4 py-3 text-white">
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
                <a href="<?php echo $whats_url; ?>" class="btn btn-outline-light btn-rounded" role="button">Contate-nos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sobre -->
  <div class="container-fluid px-0 text-md-left text-center" id="about">
    <div class="row m-0 h-100">
      <div class="col-md-6 col-12">
        <div class="row h-100">
         <div class="offset-md-3 col-md-6 offset-0 col-12 my-auto py-md-0 py-5">
           <div class="col-md-12 py-md-4 py-3">
             <h2 class="color-second font-weight-bold"><?php echo get_field('title-about') ;?></h2>
             <hr class="hr-second">
           </div>
           <div class="col-md-12 py-md-4 py-3 text-muted">
             <?php the_field('text-about') ;?>
           </div>
         </div>
        </div>
      </div>
      <div class="col-md-6 col-12" id="img-about" style="background-image: url(<?php echo get_field('img-about') ;?>);"></div>
    </div>
  </div>

  <!-- Contato -->
  <div class="container-fluid text-center px-0 bg-primary" id="contact">
    <div class="row m-0 h-100">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-12 my-auto py-md-0 py-5">
            <div class="row py-md-4 py-3">
              <div class="col-md-12">
                <h2 class="text-white font-weight-bold"><?php echo get_field('title-contact');?></h2>
                <hr class="hr-primary">
              </div>
            </div>
            <div class="row py-md-4 py-3">
              <div class="col-md-6 col-12">
                <iframe src="<?php echo get_field('maps-contact'); ?>" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="col-md-6 col-12 text-left py-md-0 py-5">
                <p class="text-white"><i class="fas fa-phone-alt"></i> <?php echo get_field('phone-contact'); ?></p>
                <p class="text-white">
                  <a href="<?php echo $whats_url ?>" class="text-white">
                    <i class="fab fa-whatsapp"></i> 
                    <?php echo get_field('whats-contact'); ?>
                  </a>
                </p>
                <p class="text-white"><i class="fas fa-envelope"></i> <?php echo get_field('email-contact'); ?></p>
                <p class="text-white"><i class="fas fa-map-marker-alt"></i> <?php echo get_field('address-contact'); ?></p>
                <?php the_field('form-contact') ;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
<?php get_footer(); ?>
