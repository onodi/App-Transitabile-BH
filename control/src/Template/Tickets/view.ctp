<?php
	$this->extend('../Layout/back');
    $this->assign('title', "Ticket - Transitabile Control");
?>

<h1 class="page-header">Ticket</h1>

<div class="tickets view large-9 medium-8 columns content">
    <h3><?= h($ticket->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuário') ?></th>
            <td><?= $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Veículo') ?></th>
            <td><?= $ticket->has('vehicle') ? $this->Html->link($ticket->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $ticket->vehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vaga') ?></th>
            <td><?= $ticket->has('parklot') ? $this->Html->link($ticket->parklot->name, ['controller' => 'Parklots', 'action' => 'view', $ticket->parklot->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($ticket->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($ticket->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticket->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($ticket->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor total') ?></th>
            <td><?= $this->Number->format($ticket->total_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado em') ?></th>
            <td><?= h($ticket->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Última alteração') ?></th>
            <td><?= h($ticket->modified) ?></td>
        </tr>
    </table>
</div>
