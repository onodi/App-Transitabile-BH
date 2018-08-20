<?php
	$this->extend('../Layout/back');
    $this->assign('title', "Veículo - Transitabile Control");
?>

<h1 class="page-header">Veículo</h1>

<div class="vehicles view large-9 medium-8 columns content">
    <h3><?= h($vehicle->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proprietário') ?></th>
            <td><?= $vehicle->has('user') ? $this->Html->link($vehicle->user->name, ['controller' => 'Users', 'action' => 'view', $vehicle->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($vehicle->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($vehicle->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= h($vehicle->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($vehicle->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Placa') ?></th>
            <td><?= $this->Number->format($vehicle->plate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cadastrado em') ?></th>
            <td><?= h($vehicle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Última alteração') ?></th>
            <td><?= h($vehicle->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Logs relacionados') ?></h4>
        <?php if (!empty($vehicle->logs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Vehicle Id') ?></th>
                <th scope="col"><?= __('Parklot Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicle->logs as $logs): ?>
            <tr>
                <td><?= h($logs->id) ?></td>
                <td><?= h($logs->type) ?></td>
                <td><?= h($logs->user_id) ?></td>
                <td><?= h($logs->vehicle_id) ?></td>
                <td><?= h($logs->parklot_id) ?></td>
                <td><?= h($logs->name) ?></td>
                <td><?= h($logs->description) ?></td>
                <td><?= h($logs->created) ?></td>
                <td><?= h($logs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Logs', 'action' => 'view', $logs->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Tickets relacionados') ?></h4>
        <?php if (!empty($vehicle->tickets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Vehicle Id') ?></th>
                <th scope="col"><?= __('Parklot Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col"><?= __('Total Value') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicle->tickets as $tickets): ?>
            <tr>
                <td><?= h($tickets->id) ?></td>
                <td><?= h($tickets->user_id) ?></td>
                <td><?= h($tickets->vehicle_id) ?></td>
                <td><?= h($tickets->parklot_id) ?></td>
                <td><?= h($tickets->type) ?></td>
                <td><?= h($tickets->value) ?></td>
                <td><?= h($tickets->total_value) ?></td>
                <td><?= h($tickets->status) ?></td>
                <td><?= h($tickets->created) ?></td>
                <td><?= h($tickets->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
