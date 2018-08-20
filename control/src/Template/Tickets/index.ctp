<?php
	$this->extend('../Layout/back');
	$this->assign('title', "Tickets - Transitabile Control");
?>

<h1 class="page-header">Tickets</h1>

<div class="tickets index large-9 medium-8 columns content">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vehicle_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parklot_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
            <tr>
                <td><?= $this->Number->format($ticket->id) ?></td>
                <td><?= $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></td>
                <td><?= $ticket->has('vehicle') ? $this->Html->link($ticket->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $ticket->vehicle->id]) : '' ?></td>
                <td><?= $ticket->has('parklot') ? $this->Html->link($ticket->parklot->name, ['controller' => 'Parklots', 'action' => 'view', $ticket->parklot->id]) : '' ?></td>
                <td><?= h($ticket->type) ?></td>
                <td><?= $this->Number->format($ticket->value) ?></td>
                <td><?= $this->Number->format($ticket->total_value) ?></td>
                <td><?= h($ticket->status) ?></td>
                <td><?= h($ticket->created) ?></td>
                <td><?= h($ticket->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}.')]) ?></p>
    </div>
</div>
