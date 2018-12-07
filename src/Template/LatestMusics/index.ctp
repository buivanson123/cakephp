<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LatestMusic[]|\Cake\Collection\CollectionInterface $latestMusics
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Latest Music'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="latestMusics index large-9 medium-8 columns content">
    <h3><?= __('Latest Musics') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($latestMusics as $latestMusic): ?>
            <tr>
                <td><?= $this->Number->format($latestMusic->id) ?></td>
                <td><?= h($latestMusic->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $latestMusic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $latestMusic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $latestMusic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $latestMusic->id)]) ?>
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
