

  <!-- Page Heading -->
  <div class="d-flex" style="justify-content: space-between">
	  <h1 class="h3 mb-2 text-gray-800">New Student</h1>
	  <h4 class="btn btn-primary" ><a href="<?= $this->link('/admin/students') ?>" class="text-light">Students</a></h4>
  </div>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Students Information</h6>
	</div>
	<div class="card-body">
		<?php $this->form->begin('','POST') ?>
		<div class="row">
		<?= $this->form->labelField($model,'firstname')->setClass('col-md-4')->setLabel("First Name")->setPlaceholder
		('First Name')		?>
		<?= $this->form->labelField($model,'middlename')->setClass('col-md-4')->setLabel("Middle Name")->setPlaceholder
		('Middle Name')		?>
		<?= $this->form->labelField($model,'lastname')->setClass('col-md-4')->setLabel("Last Name")->setPlaceholder('First Name')		?>
		</div>
		<div class="row">
			<?= $this->form->labelField($model,'phone')->setClass('col-md-4')->setLabel("Phone")->setPlaceholder('Phone Number')	?>
			<?= $this->form->labelField($model,'email')->setClass('col-md-4')->setLabel("Email")->setPlaceholder('Email')	?>
			<?= $this->form->labelField($model,'dob')->setClass('col-md-4')->setLabel("Date of Birth")->setType("date")
			?>
		</div>
		<div class="row">
			<?= $this->form->select($model,'bloodgroup',['Select Blood Group','O+','O-','A+','A-','AB+','AB-'])
				->setLabel('Blood Group')->setClass('col-md-6') ?>
			<?= $this->form->labelField($model, 'address')->setClass('col-md-6')->setLabel("Address")->setPlaceholder('Address')
            ?>
		</div>


		<div class="row">
			<input type="submit" class="btn btn-primary" value="Add Student">
		</div>
		<?php $this->form->end(); ?>
	</div>
  </div>

