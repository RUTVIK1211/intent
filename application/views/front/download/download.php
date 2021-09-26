  <!-- Breadcumbs -->
  <section class="breadcumb-bg">
  	<div class="container">
  		<div class="breadcumbs">
  			<h1>Download</h1>
  			<nav aria-label="breadcrumb">
  				<ol class="breadcrumb">
  					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
  					<li class="breadcrumb-item active" aria-current="page">Download</li>
  				</ol>
  			</nav>
  		</div>
  	</div>
  </section>
  <!-- End breadcumbs -->

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
  	<div class="container" data-aos="fade-up">

  		<div class="row">

  			<?php foreach ($documents as $doc) : ?>

  				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4">
  					<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
  						<div class="icon"><i class="bx bx-file"></i></div>
  						<h4 class="title"><a href=""><?php echo $doc->name; ?> </a></h4>
  						<p class="description"> <a href="<?php echo base_url('uploads/files/' . $doc->filename) ?>" class="btn btn-light">Download</a>
  						</p>
  					</div>
  				</div>

  			<?php endforeach; ?>
  		</div>

  	</div>
  </section><!-- End Featured Services Section -->
