


<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= SITE_URL ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Visite Website</div>
      </a>
	<?php // echo $this->menu->singleMenu(); ?>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class='nav-item active'>
        <a class="nav-link" href="<?= $this->link('/admin') ?>">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

	  <!-- Nav Item - Dashboard -->
      <li class='nav-item active'>
        <a class="nav-link" href="<?= $this->link('/admin/teachers') ?>">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Teachers</span></a>
      </li>

	<li class='nav-item active'>
        <a class="nav-link" href="<?= $this->link('/admin/students') ?>">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Students</span></a>
      </li>

	<li class='nav-item active'>
        <a class="nav-link" href="<?= $this->link('/admin/add-post') ?>">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Create Post</span></a>
      </li>


	  <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
<!--      <li class='nav-item active'>-->
<!--        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseTwo' aria-expanded='true' aria-controls='collapseTwo'>-->
<!--          <i class='fa fa-fw fa-cog'></i>-->
<!--          <span>Post</span>-->
<!--        </a>-->
<!--        <div id='collapseTwo' class='collapse show' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>-->
<!--          <div class='bg-white py-2 collapse-inner rounded'>-->
<!--            <h6 class='collapse-header'>Custom posts:</h6>-->
<!--            <a class='collapse-item active' href='buttons.html'>Add new</a>-->
<!--            <a class='collapse-item' href='cards.html'>All Post</a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </li>-->

      <!-- Divider -->
      <hr class='sidebar-divider d-none d-md-block'>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class='text-center d-none d-md-inline'>
        <button class='rounded-circle border-0' id='sidebarToggle'></button>
      </div>

    </ul>