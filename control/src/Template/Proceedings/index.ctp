<?php
	$this->extend('../Layout/back');
    $this->assign('title', "Autuações - Transitabile Control");
?>

<h1 class="page-header">Autuações</h1>

<div class="proceedings index large-9 medium-8 columns content">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('user_id', ['label' => 'Fiscal']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created', ['label' => 'Emitido em']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified', ['label' => 'Última alteração']) ?></th>
                    <th scope="col" class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proceedings as $proceedings): ?>
                <tr>
                    <td><?= $proceedings->has('user') ? $this->Html->link($proceedings->user->name, ['controller' => 'Users', 'action' => 'view', $proceedings->user->id]) : '' ?></td>
                    <td><?= h($proceedings->created) ?></td>
                    <td><?= h($proceedings->modified) ?></td>
                    <td class="col-md-2">
                        <?= $this->Html->link('', ['action' => 'view', $proceedings->id], ['title' => __('Ver'), 'class' => 'btn btn-success glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $proceedings->id], ['title' => __('Editar'), 'class' => 'btn btn-success glyphicon glyphicon-pencil']) ?>
                        <?= $this->Html->link('', '#modelDelete', array('title' => 'Excluir', 'data-toggle' => 'modal', 'class' => 'btn btn-danger glyphicon glyphicon-trash btn-delete', 'data-id' => $proceedings->id)); ?>
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

<!-- modelDelete -->
<div class="modal fade" id="modelDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Excluir</h4>
    </div>
    <div class="modal-body">
        Você tem certeza que deseja excluir?
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <?= $this->Form->postLink(
            'Confirmar',
            array(
                'action' => 'delete'
            ),
            array('class' => 'btn btn-danger', 'target' => '_self')
        );
        ?>
    </div>
    </div>
</div>
</div>
<script type="text/javascript">
$(".btn-delete").on("click", function (e) {
    var id = $(this).attr('data-id');
    $("form").each(function() {
       if (this.action.indexOf("delete") != -1) {
           $(this).attr('action', this.action + '/' + id);
       }
    });
});
</script>
<!-- /.modelDelete -->
