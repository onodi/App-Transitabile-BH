<?php
	$this->extend('../Layout/back');
	$this->assign('title', "Logs - Transitabile Control");
?>

<h1 class="page-header">Logs</h1>

<div class="logs index large-9 medium-8 columns content">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('type', ['label' => 'Tipo']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('user_id', ['label' => 'Usuário']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name', ['label' => 'Nome']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('description', ['label' => 'Descrição']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created', ['label' => 'Criado em']) ?></th>
                    <th scope="col" class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logs as $log): ?>
                <tr>
                    <td><?= h($log->type) ?></td>
                    <td><?= $log->has('user') ? $this->Html->link($log->user->name, ['controller' => 'Users', 'action' => 'view', $log->user->id]) : '' ?></td>
                    <td><?= h($log->name) ?></td>
                    <td><?= h($log->description) ?></td>
                    <td><?= h($log->created) ?></td>
                    <td class="col-md-2">
                        <?= $this->Html->link('', ['action' => 'view', $log->id], ['title' => __('Ver'), 'class' => 'btn btn-success glyphicon glyphicon-eye-open']) ?>
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
