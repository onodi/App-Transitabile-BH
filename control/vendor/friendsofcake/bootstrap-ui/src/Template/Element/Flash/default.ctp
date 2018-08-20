<?php

	$class = array_unique((array)$params['class']);
	$message = (isset($params['escape']) && $params['escape'] === false) ? $message : h($message);

	echo "<script>$( document ).ready(function() { $('#myModal').modal('show'); });</script>";

?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
          <?php 
            if (isset($params['title'])) {  
              echo h($params['title']); 
            } else { 
              echo 'Atenção'; 
            } 
          ?>
        </h4>
      </div>
      <div class="modal-body">
		    <?= $message ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>