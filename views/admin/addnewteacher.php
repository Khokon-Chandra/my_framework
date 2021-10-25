

  <!-- Page Heading -->
  <div class="d-flex" style="justify-content: space-between">
	  <h1 class="h3 mb-2 text-gray-800">New Teacher</h1>
	  <h4 class="btn btn-primary" ><a href="<?= $this->link('/admin/teachers') ?>" class="text-light">Teachers</a></h4>
  </div>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Teachers Information</h6>
	</div>
	<div class="card-body">
		<?php $this->form->begin('','POST') ?>
			<div class="row">

				<div class="col-3">
					<label for="picture">
						<img src="<?= $this->link('/img/default_avtar.jpg') ?>" alt="">
						Add Profile Picture
						<i class="invalid-feedback"><?= $model->errors['profile_picture']??'' ?></i>
					</label>
					<input type="file" name="profile_picture"  class="d-none" id="picture">

				</div>
				<div class="col-9">
					<div class="form-group">
						<p>Gender</p>
						<input type="radio" id="male" >
						<label for="male">Male</label>
						<input type="radio" id="female" >
						<label for="female">Female</label>
						<input type="radio" id="others" >
						<label for="others">Others</label>
					</div>
					<div class="row">
						<?= $this->form->labelField($model,'firstname')->setClass('col-md-4')->setLabel('First Name')->setPlaceholder('First Name');
						?>
						<?= $this->form->labelField($model,'middlename')->setClass('col-md-4')->setLabel('Middle Name')->setPlaceholder('Middle Name')?>
                        <?= $this->form->labelField($model,'lastname')->setClass('col-md-4')->setLabel('Last Name')->setPlaceholder('Last Name')?>
					</div>
				</div>
			</div>
			<div class="row">
				<?= $this->form->labelField($model,'dob')->setClass('col-md-3')->setLabel("Bloodgroup")->setType
				('date') ?>
				<?= $this->form->select($model,'bloodgroup',['Select Blood Group','O+','O-','A+','A-','AB+','AB-'])->setLabel('Blood Group')->setClass('col-md-3') ?>
                <?= $this->form->labelField($model,'phone')->setClass('col-md-3')->setLabel("Phone")->setPlaceholder('Phone Number') ?>
                <?= $this->form->labelField($model,'qualification')->setClass('col-md-3')->setLabel("Qualification")->setPlaceholder('Qualification')	?>
			</div>
			<?= $this->form->labelField($model,'address')->setLabel("Address")->setPlaceholder('Address')
			?>
			<div class="row">
				<?= $this->form->labelField($model,'email')->setLabel("Email")->setPlaceholder('Email')->setClass('col-md-6')
                ?>
                <?= $this->form->labelField($model,'title')->setLabel("Title")->setPlaceholder('Title')->setClass('col-md-6')
                ?>
			</div>
			<div class="row">
				<?= $this->form->labelField($model,'country')->setClass('col-md-6')->setLabel("Country")->setPlaceholder
				('Country')	?>
                <?= $this->form->labelField($model,'city')->setClass('col-md-6')->setLabel("City")->setPlaceholder
                ('City')?>
			</div>
		<input type="submit" class="btn btn-primary" value="Add New Teacher">
		<?php $this->form->end(); ?>
	</div>
  </div>

