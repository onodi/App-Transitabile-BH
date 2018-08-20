<?php
	$this->extend('../Layout/front');
	$this->assign('title', 'Entrar - Transitabile Control');
?>

<h2 class="page-header">Entrar</h2>

<?= $this->Form->create(); ?>
	<?= $this->Form->input('email', array('label' => 'Seu e-mail', 'placeholder' => 'E-mail')); ?>
	<?= $this->Form->input('password', array('label' => 'Sua senha', 'placeholder' => 'Senha', 'type' => 'password')); ?>
	<hr />
	<button id="button-login" type="submit" class="btn btn-success">Entrar</button>
<?= $this->Form->end(); ?>

<hr />