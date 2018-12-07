<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MarketPlace[]|\Cake\Collection\CollectionInterface $marketPlaces
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Market Place'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="marketPlaces index large-9 medium-8 columns content">
    <h3><?= __('Market Places') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($marketPlaces as $marketPlace): ?>
            <tr>
                <td><?= $this->Number->format($marketPlace->id) ?></td>
                <td><?= h($marketPlace->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $marketPlace->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $marketPlace->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marketPlace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marketPlace->id)]) ?>
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
