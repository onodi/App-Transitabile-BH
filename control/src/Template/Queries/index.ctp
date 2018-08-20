<?php
	$this->extend('../Layout/back');
    $this->assign('title', "Consultas - Transitabile Control");
?>

<h1 class="page-header">Consultas</h1>

<div class="queries index large-9 medium-8 columns content">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('user_id', ['label' => 'Fiscal']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created', ['label' => 'Executado em']) ?></th>
                    <th scope="col" class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($queries as $query): ?>
                <tr>
                    <td><?= $query->has('user') ? $this->Html->link($query->user->name, ['controller' => 'Users', 'action' => 'view', $query->user->id]) : '' ?></td>
                    <td><?= h($query->created) ?></td>
                    <td class="col-md-2">
                        <?= $this->Html->link('', ['action' => 'view', $query->id], ['title' => __('Ver'), 'class' => 'btn btn-success glyphicon glyphicon-eye-open']) ?>
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
