<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parklot $parklot
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $parklot->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $parklot->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Parklots'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Logs'), ['controller' => 'Logs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log'), ['controller' => 'Logs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parklots form large-9 medium-8 columns content">
    <?= $this->Form->create($parklot) ?>
    <fieldset>
        <legend><?= __('Edit Parklot') ?></legend>
        <?php
            echo $this->Form->control('type');
            echo $this->Form->control('name');
            echo $this->Form->control('lat');
            echo $this->Form->control('lng');
            echo $this->Form->control('description');
            echo $this->Form->control('value');
            echo $this->Form->control('max_time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
