<?php
	$this->extend('../Layout/back');
    $this->assign('title', "Consulta - Transitabile Control");
?>

<h1 class="page-header">Consulta</h1>

<div class="queries view large-9 medium-8 columns content">
    <h3><?= h($query->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuário') ?></th>
            <td><?= $query->has('user') ? $this->Html->link($query->user->name, ['controller' => 'Users', 'action' => 'view', $query->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($query->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Executado em') ?></th>
            <td><?= h($query->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Última alteração') ?></th>
            <td><?= h($query->modified) ?></td>
        </tr>
    </table>
</div>
