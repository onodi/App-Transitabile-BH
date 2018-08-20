<?php
	$this->extend('../Layout/back');
	$this->assign('title', "Faturamento - Transitabile Control");
?>

<h1 class="page-header">Faturamento</h1>

<div class="orders index large-9 medium-8 columns content">
    <legend><?= __('Histórico de recargas') ?></legend>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('user_id', ['label' => 'Usuário']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('type', ['label' => 'Tipo']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('value', ['label' => 'Valor']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('status', ['label' => 'Estado']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created', ['label' => 'Data da recarga']) ?></th>
                    <th scope="col" class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $order->has('user') ? $this->Html->link($order->user->name, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                    <td><?= h($order->type) ?></td>
                    <td><?= h($order->value) ?></td>
                    <td><?= h($order->status) ?></td>
                    <td><?= h($order->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $order->id], ['title' => __('Ver'), 'class' => 'btn btn-success glyphicon glyphicon-eye-open']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
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
