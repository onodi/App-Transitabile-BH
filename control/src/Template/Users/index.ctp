<?php
	$this->extend('../Layout/back');
	$this->assign('title', "Usuários - Transitabile Control");
?>

<h1 class="page-header">Usuários</h1>

<?php
    echo $this->Html->link(
        'Cadastrar usuário',
        array(
            'controller' => 'Users',
            'action' => 'add'
        ),
        array('class' => 'btn btn-success', 'target' => '_self')
    );
?>

<hr />

<div class="users index large-9 medium-8 columns content">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('type', ['label' => 'Tipo']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name', ['label' => 'Nome']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email', ['label' => 'E-mail']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('cpf', ['label' => 'cpf']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('birthdate', ['label' => 'Data de nascimento']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('phone', ['label' => 'Telefone']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('balance', ['label' => 'Saldo']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created', ['label' => 'Criado em']) ?></th>
                    <th scope="col" class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= h($user->type) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->cpf) ?></td>
                    <td><?= h($user->birthdate) ?></td>
                    <td><?= $this->Number->format($user->phone) ?></td>
                    <td><?= $this->Number->format($user->balance) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td class="col-md-2">
                        <?= $this->Html->link('', ['action' => 'view', $user->id], ['title' => __('Ver'), 'class' => 'btn btn-success glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $user->id], ['title' => __('Editar'), 'class' => 'btn btn-success glyphicon glyphicon-pencil']) ?>
                        <?= $this->Html->link('', '#modelDelete', array('title' => 'Excluir', 'data-toggle' => 'modal', 'class' => 'btn btn-danger glyphicon glyphicon-trash btn-delete', 'data-id' => $user->id)); ?>
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