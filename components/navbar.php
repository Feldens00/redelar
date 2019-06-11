<!-- Navbar -->
<nav class="navbar navbar-expand-md bg-primary navbar-dark" id="menu-navbar">
	<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
	  	<?php 
			$img = Util::getWidget('img-menu');
			$xpath = new DOMXPath(@DOMDocument::loadHTML($img));
			$src = $xpath->evaluate("string(//img/@src)");
		?>
		<img src="<?php echo $src; ?>" class="img-fluid" width="125px">
	</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <?php custom_menu_head('head-menu'); ?>
    </ul>
  </div>  
</nav>
<!-- !Navbar -->