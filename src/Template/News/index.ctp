<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New News'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="news index large-9 medium-8 columns content">
    <h3><?= __('News') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('content') ?></th>
                <th scope="col"><?= $this->Paginator->sort('create') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dir') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $news): ?>
            <tr>
                <td><?= $this->Number->format($news->id) ?></td>
                <td><?= h($news->name) ?></td>
                <td><?= h($news->description) ?></td>
                <td><?= h($news->content) ?></td>
                <td><?= h($news->create) ?></td>
                <td><?= h($news->image) ?></td>
                <td><?= h($news->dir) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $news->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $news->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?>
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