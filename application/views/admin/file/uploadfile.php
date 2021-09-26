<form class="form-horizontal fv-form fv-form-bootstrap4" id="docupload_form" name="docupload_form" action="<?php echo base_url('doc-upload'); ?>" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate="novalidate">
	<div class="page">
		<div class="page-header">
			<h4 class="page-title">Upload File</h4>
			<div class="page-content">
				<div class="panel">
					<header class="panel-heading">
					</header>
					<div class="panel-body container-fluid">
						<div class="row">
							<div class="col-md-6">
								<h4 class="example-title"></h4>
								<div class="example">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<h3 class="example-title">Document to Upload</h3>
							<div class="example">
								<select class="form-control select2 rounded" name="doc1_id" data-allow-clear="true" tabindex="-1" aria-hidden="true">
									<option value="">Select Upload location</option>
									<option value="1">Notifiaction And Updates</option>
									<option value="2">Downloads</option>
									<option value="0">Both</option>
								</select>
								<?php if (isset($errors['doc1_id'])) { ?>
									<label class="error"><?= @$errors['doc1_id'] ?></label>
								<?php } ?>
								<label id="doc1_id-error" class="error" for="doc1_id"></label>
							</div>
						</div>
						<div class="col-lg-12">
							<h3 class="example-title">Document Title</h3>
							<div class="example">
								<input type="text" name="doc_name" class="form-control" require>
								<?php if (isset($errors['doc_name'])) { ?>
									<label class="error"><?= @$errors['doc_name'] ?></label>
								<?php } ?>
								<label id="doc_name" class="error" for="doc_name"></label>
							</div>
						</div>
						<div class="row row-lg">
							<div class="col-lg-6">
								<h4 class="example-title"></h4>
								<div class="example">
									<input type="file" name="doc1_1_img" accept="image/*, application/pdf" id="doc1_1_img" require data-plugin="dropify" data-default-file="" />
								</div>
								<?php if (isset($errors['doc1_1_img'])) { ?>
									<label class="error"><?= @$errors['doc1_1_img'] ?></label>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title"></h3>
					</div>
					<div class="panel-body container-fluid">
						<div class="row " style="float:right;">
							<div class="animation-example animation-hover hover">
								<button class="btn btn-primary pull-left legitRipple" id="add_kyc" type="submit">NEXT</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
