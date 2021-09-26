<!-- Breadcumbs -->
<section class="breadcumb-bg">
	<div class="container">
		<div class="breadcumbs">
			<h1>Notification & Updates</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Notification & Updates</li>
				</ol>
			</nav>
		</div>
	</div>
</section>
<!-- End breadcumbs -->

<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services notification-mgs">
	<div class="container" data-aos="fade-up">

		<div class="row">
			<?php
			// dd($documents);
			?>
			<?php foreach ($documents as $doc) : ?>
				<div class="col-12 d-block align-items-stretch mb-4">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
						<h4 class="title"><a href=""><?php echo $doc->name;  ?></a></h4>
						<p class="description">
							<a href="<?php echo base_url('uploads/files/' . $doc->filename) ?>" download class="btn  btn-light">Download</a>
						</p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section><!-- End Featured Services Section -->
