
  <!-- Page Heading -->
  <div class="d-flex" style="justify-content: space-between">
	  <h1 class="h3 mb-2 text-gray-800">Students</h1>
	  <h4 class="btn btn-primary" ><a href="<?= $this->link('/admin/add-new-student') ?>" class="text-light">Add New</a></h4>
  </div>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Teachers Information</h6>
	</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		  <thead>
			<tr>
			  <th>Name</th>
			  <th>Email</th>
			  <th>Phone</th>
			  <th>Blood Group</th>
			  <th>Action</th>
			</tr>
		  </thead>
		  <tfoot>
			<tr>
			 <th>Name</th>
			  <th>Email</th>
			  <th>Phone</th>
			  <th>Blood Group</th>
			  <th>Action</th>
			</tr>
		  </tfoot>
		  <tbody>

				<?php
				foreach ($students as $student){
					printf("<tr></tr><td>%s</td>",$student->firstname." ".$student->middlename." ".$student->lastname);
					printf("<td>%s</td><td>%s</td><td>%s</td>",$student->email,$student->phone,
						$student->bloodgroup);
					printf("<td>View || Edit || Delete</td></tr>");
				}
				?>

		  </tbody>
		</table>
	  </div>
	</div>
  </div>



