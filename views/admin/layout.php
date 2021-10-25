   <?php
   use app\core\Application;
   ?>


    {{header}}


    {{nav}}


    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

       {{topnav}}

        <div class="container-fluid">
			<!--		  ================ Flash message ==========-->
            <?php if(Application::$app->session->getFlashMessage("success")): ?>
				<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">×</span>
              	</button>
				<div class="alert-message">
					<?= Application::$app->session->getFlashMessage("success") ?>
			  </div>
			</div>
            <?php endif; ?>

			<!--		  ================ Flash message ==========-->

         {{content}}

         {{footer}}
