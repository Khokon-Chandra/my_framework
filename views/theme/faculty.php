<div class="col-md-8">
 <h4 class="text-center">Faculty Members</h4>
<div class="row">
	<?php
	foreach ($teachers as $teacher){
		?>
		<div class="col-md-6 col-lg-6 mb-3">
		<div class="card">
		<img class="card-img-top" style="max-height: 250px" src="<?= $this->link($teacher->profile_picture)?>"
			 alt="Unsplash">
		<div class="card-header">
			<h5 class="card-title mb-0"><?= $teacher->firstname." ".$teacher->middlename." ".$teacher->lastname ?></h5>

		</div>
		<div class="card-body">
			<p><?= $teacher->title ?></p>
			<p><i class="fa fa-envelope"></i> <?= $teacher->email ?></p>
			<p><i class="fa fa-phone"></i> <?= $teacher->phone ?></p>
			<p><i class="fa fa-file"></i> <?= $teacher->qualification ?></p>

		</div>
	</div>
</div>
		<?php
	}
	?>
</div>

</div>

