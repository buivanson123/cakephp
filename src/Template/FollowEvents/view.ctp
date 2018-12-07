<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FollowEvent $followEvent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Follow Event'), ['action' => 'edit', $followEvent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Follow Event'), ['action' => 'delete', $followEvent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $followEvent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Follow Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Follow Event'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="followEvents view large-9 medium-8 columns content">
    <h3><?= h($followEvent->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($followEvent->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($followEvent->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($followEvent->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($followEvent->image)); ?>
    </div>
</div>
