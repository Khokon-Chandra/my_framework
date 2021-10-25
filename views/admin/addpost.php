<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create Post</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">POST CREATION</h6>
</div>
<div class="card-body">
  <div class="table-responsive">
	<?php $this->form->begin('','POST') ?>
	<div class="row">
		<?= $this->form->select($model,'category',['select Category','message','overview','publication','research','about','adviser','mission','vission','objectives'
			])->setLabel('select 
	category')->setClass('col-md-6') ?>
		<?= $this->form->labelField($model,'post_image')->setType("file")->setLabel("Picture")->setClass('col-md-6') ?>
	</div>
	<?= $this->form->labelField($model,'post_title')->setLabel('Post Title') ?>
	<?= $this->form->textarea($model,'post_details')->setLabel('Post Details') ?>
	  <input type="submit" class="btn btn-primary" value="Create">
	<?php $this->form->end() ?>
  </div>
</div>
</div>

