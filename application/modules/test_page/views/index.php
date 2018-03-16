<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      		$this->load->view('general/head');	
      	?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      	<?php
      		$this->load->view('general/top');
      		$this->load->view('general/left');
      		$this->load->view('content');
      		$this->load->view('general/foot');
      	?>
      </div>
    </div>
    <?php
      $this->load->view('general/js');
    ?>
  </body>
</html>
