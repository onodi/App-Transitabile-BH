<?php
	$this->extend('../Layout/back');
    $this->assign('title', "Minha conta - Transitabile Control");
?>

<h1 class="page-header">Minha conta</h1>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <?php
            echo $this->Form->control('type');
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('cpf');
            echo $this->Form->control('password');
            echo $this->Form->control('birthdate');
            echo $this->Form->control('phone');
            echo $this->Form->control('balance');
        ?>
    </fieldset>
    <hr />
    <?= $this->Form->button(__('Salvar'), array('class' => 'btn btn-success')) ?>
    <hr />
    <?= $this->Form->end() ?>
</div>
