<?php
	$this->extend('../Layout/back');
    $this->assign('title', "Editar Autuação - Transitabile Control");
?>

<h1 class="page-header">Editar Autuação</h1>

<div class="proceedings form large-9 medium-8 columns content">
    <?= $this->Form->create($proceedings) ?>
    <fieldset>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
