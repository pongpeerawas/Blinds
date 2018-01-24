
  <!-- Main -->
<div class="container">

	<div id="notification_div"></div>
	<?php if($this->session->flashdata('alert')){ echo $this->session->flashdata('alert'); } ?>

<?php if(isset($content)){ echo $content; } ?>

</div><!--/container-->
<!-- /Main -->
