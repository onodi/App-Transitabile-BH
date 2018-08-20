<?php
	$this->extend('../Layout/back');
    $this->assign('title', "Autuação - Transitabile Control");
?>

<h1 class="page-header">Autuação</h1>

<div class="proceedings view large-9 medium-8 columns content">
    <h3><?= h($proceedings->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuário') ?></th>
            <td><?= $proceedings->has('user') ? $this->Html->link($proceedings->user->name, ['controller' => 'Users', 'action' => 'view', $proceedings->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proceedings->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emitido em') ?></th>
            <td><?= h($proceedings->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Última alteração') ?></th>
            <td><?= h($proceedings->modified) ?></td>
        </tr>
    </table>
</div>
