<?php
	$this->extend('../Layout/back');
    $this->assign('title', "Vaga - Transitabile Control");
?>

<h1 class="page-header">Vaga</h1>

<div class="parklots view large-9 medium-8 columns content">
    <h3><?= h($parklot->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($parklot->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($parklot->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($parklot->lat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($parklot->lng) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descrição') ?></th>
            <td><?= h($parklot->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempo máximo') ?></th>
            <td><?= h($parklot->max_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($parklot->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($parklot->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cadastrado em') ?></th>
            <td><?= h($parklot->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Última alteração') ?></th>
            <td><?= h($parklot->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Logs relacionados') ?></h4>
        <?php if (!empty($parklot->logs)): ?>
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
            <?php foreach ($parklot->logs as $logs): ?>
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
        <?php if (!empty($parklot->tickets)): ?>
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
            <?php foreach ($parklot->tickets as $tickets): ?>
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
