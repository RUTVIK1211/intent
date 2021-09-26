<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$page = basename($currentUrl);
// dd($_SESSION);
?>

<div class="site-menubar">
	<div class="site-menubar-body">
		<div>
			<div>
				<ul class="site-menu" data-plugin="menu">
					<li class="site-menu-item zoomin frame<?= $page == 'dashboard' ? 'active' : ''; ?>">
						<a class="animsition-link" href="<?= base_url('dashboard'); ?>">
							<img src="<?= base_url('assets/images/sidebar/dashboard.svg'); ?>" class="site-menu-icon-side" alt="dashboard icon">
							<!-- <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i> -->
							<span class="site-menu-title">Dashboard</span>
						</a>
					</li>
					<li class="site-menu-item zoomin frame <?= $page == 'upload-document' ? 'active' : ''; ?>">
						<a class="animsition-link" href="<?= base_url('upload-document') ?>">
							<img src="<?= base_url('assets/images/sidebar/upload.svg'); ?>" class="site-menu-icon-side" alt="dashboard icon">
							<!-- <i class="site-menu-icon icon fa-map-marker" aria-hidden="true"></i> -->
							<div class="icon-title"></div>
							<span class="site-menu-title">Upload Document </span>
						</a>
					</li>
					<li class="site-menu-item zoomin frame <?= $page == 'upload-document' ? 'active' : ''; ?>">
						<a class="animsition-link" href="<?= base_url('list-document') ?>">
							<img src="<?= base_url('assets/images/sidebar/labels.svg'); ?>" class="site-menu-icon-side" alt="dashboard icon">
							<!-- <i class="site-menu-icon icon fa-map-marker" aria-hidden="true"></i> -->
							<div class="icon-title"></div>
							<span class="site-menu-title">List Document </span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
