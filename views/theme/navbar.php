

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent container">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= $this->link('/') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= $this->link('post/overview') ?>">Overview</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="<?= $this->link('post/publication') ?>">Publications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= $this->link('post/notice') ?>">News & Notice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= $this->link('post/research') ?>">Research</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= $this->link('post/about') ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= $this->link('page/contact') ?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= $this->link('routine') ?>">Class Routine</a>
        </li>

         <li class="nav-item">
          <a class="nav-link text-white" href="<?= $this->link('page/calendar') ?>">Calendar</a>
        </li>
       
      </ul>
      <form class="d-flex text-right">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>





  <div class="main_bg"><!-- start main -->
     <div class="container">
         <div class="technology row" style="padding-top:5px;">
            <div class="col-md-2 tech_para">
                 <ul class="tag_nav list-unstyled" style="margin-top:0px;padding-top:0px;">
                     <li style="width:100%;"><a href="<?= $this->link('post/message') ?>">Message from Chairman
						 </a></li>
                     <li style="width:100%;"><a href="<?= $this->link('post/message') ?>">Program Offered </a></li>
                     <li style="width:100%;"><a href="<?= $this->link('faculty-members') ?>">Faculty Members </a></li>
                      <li style="width:100%;"><a href="<?= $this->link('courses') ?>">Courses </a></li>
                     <li style="width:100%;"><a href="<?= $this->link('page/calendar') ?>">Academic Calender </a></li>
                     <li style="width:100%;"><a href="<?= $this->link('page/routine') ?>">Class Routine </a></li>
                     <li style="width:100%;"><a href="<?= $this->link('post/publication') ?>">Publications </a></li>
                     <li style="width:100%;"><a href="<?= $this->link('post/research') ?>">Research </a></li>
                     <li style="width:100%;"><a href="<?= $this->link('photoes') ?>">Photo Gallery </a></li>
                     <li class="active" style="min-width:100%;text-align: center;"><a href="<?= $this->link('admin')
						 ?>">LOGIN </a></li>
                    <div class="clearfix"></div>
                 </ul>
            </div>