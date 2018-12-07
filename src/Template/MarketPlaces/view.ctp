<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MarketPlace $marketPlace
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Market Place'), ['action' => 'edit', $marketPlace->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Market Place'), ['action' => 'delete', $marketPlace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marketPlace->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Market Places'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Market Place'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="marketPlaces view large-9 medium-8 columns content">
    <h3><?= h($marketPlace->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($marketPlace->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($marketPlace->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($marketPlace->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($marketPlace->content)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($marketPlace->image)); ?>
    </div>
</div>
