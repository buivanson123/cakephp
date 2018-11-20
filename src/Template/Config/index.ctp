<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Config[]|\Cake\Collection\CollectionInterface $config
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Config'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="config index large-9 medium-8 columns content">
    <h3><?= __('Config') ?></h3>
    <table class="table table-striped custab" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('displayname') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($config as $config): ?>
            <tr>
                <td><?= $this->Number->format($config->id) ?></td>
                <td><?= h($config->name) ?></td>
                <td><?= h($config->displayname) ?></td>
                <td class="actions">

                    <?= $this->Html->link('<span class="	glyphicon glyphicon-eye-open">
                        </span>', ['action' => 'view'],['escape' => false,'title' => __('View'), $config->id]) ?>

                    <?= $this->Html->link('<span class="glyphicon glyphicon-edit">
                        </span>', ['action' => 'edit'],['escape' => false,'title' => __('edit'), $config->id]) ?>

                    <?= $this->Html->link('<span class="glyphicon glyphicon-remove">
                        </span>', ['action' => 'delete'],['escape' => false,'title' => __('delete'), $config->id,'confirm' => __('Bạn có chắc muốn xóa.?', $config->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
