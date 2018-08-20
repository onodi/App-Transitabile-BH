<?php

	use Cake\Core\Configure;

?>

<?php
	$this->start('tb_body_start');
?>

	<body>
		<div class="container">

			<!-- navbar -->
			<nav class="navbar navbar-inverse navbar-fixed-top ">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<font face="Diner">
						<?php
							echo $this->Html->link(
								'transitabile',
								array(
									'controller' => 'Pages',
									'action' => 'home'
								),
								array('class' => 'navbar-brand', 'target' => '_self')
							);
						?>
						</font>
					</div>
					<div id="navbar" class="collapse navbar-collapse">
						<?php if($this->request->session()->read('Auth.User')): ?>
						<ul class="nav navbar-nav navbar-left">
							<li><?= $this->Html->link('Início', '/pages/home') ?></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">	
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?= explode(" ", $this->request->session()->read('Auth.User.name'))[0] ?> <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><?= $this->Html->link('Visão geral', ['controller' => 'pages', 'action' => 'resume']); ?></li>
									<li><?= $this->Html->link('Minha conta', ['controller' => 'users', 'action' => 'account', $this->request->session()->read('Auth.User.id')]); ?></li>
									<li role="separator" class="divider"></li>
									<li><?= $this->Html->link('Logout', '#modalConfirmLogout', array('data-toggle' => 'modal')); ?></li>	
								</ul>
							</li>
						</ul>
						<?php else: ?>
						<ul class="nav navbar-nav navbar-left">
							<li><?= $this->Html->link('Início', '/pages/home') ?></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><?= $this->Html->link('Entrar', ['controller' => 'users', 'action' => 'login']); ?></li>
						</ul>
						<?php endif; ?>
					</div>
				</div>
			</nav>
			<!-- /.navbar -->

			<!-- modalConfirmLogout -->
			<div class="modal fade" id="modalConfirmLogout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Atenção</h4>
					</div>
					<div class="modal-body">
						Você tem certeza que deseja sair?
					</div>
					<div class="modal-footer">
						<?= $this->Form->postLink(
							'Logout',
								array(
									'controller' => 'Users',
									'action' => 'logout'
								),
								array('class' => 'btn btn-primary', 'target' => '_self')
							);
						?>
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					</div>
					</div>
				</div>
			</div>
			<!-- /.modalConfirmLogout -->

	<?php
		$this->end();
		echo $this->fetch('content');
	?>
	</div>


