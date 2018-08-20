<?php
	$this->extend('../Layout/front');
    $this->assign('title', "Transitabile Control");
?>

<h1 class="page-header">Controle</h1>	
<div class="jumbotron">
	<p>Módulo de controle, para uso exclusivo de técnicos e administradores.</p>
	<br>
	<?php
		echo $this->Html->link(
			'Entrar',
			array(
				'controller' => 'Users',
				'action' => 'login'
			),
			array('class' => 'btn btn-success btn-lg', 'target' => '_self')
		);
	?>

</div>


