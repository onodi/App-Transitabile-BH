<?php
	$this->extend('../Layout/back');
	$this->assign('title', "Cadastrar usuário - Transitabile Control");
?>

<h1 class="page-header">Cadastrar usuário</h1>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <div class="form-group select">
            <label class="control-label">Tipo</label>
            <?php
                $options = array('user' => 'Usuário', 'fiscal' => 'Fiscal', 'admin' => 'Administrador');
                echo $this->Form->select('type', $options, array('default' => 'user'));
            ?>
        </div>
        <?php
            echo $this->Form->control('name', ['label' => 'Nome']);
            echo $this->Form->control('email', ['label' => 'E-mail']);
            echo $this->Form->control('cpf', ['label' => 'CPF']);
            echo $this->Form->control('password', ['label' => 'Senha']);
            echo $this->Form->control('birthdate', ['label' => 'Data de aniversário']);
            echo $this->Form->control('phone', ['label' => 'Telefone']);
            echo $this->Form->control('balance', ['label' => 'Saldo']);
        ?>
    </fieldset>
    <hr />
    <?= $this->Form->button(__('Salvar'), array('class' => 'btn btn-success')) ?>
    <hr />
    <?= $this->Form->end() ?>
</div>
