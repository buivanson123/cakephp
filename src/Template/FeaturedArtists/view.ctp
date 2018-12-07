<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FeaturedArtist $featuredArtist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Featured Artist'), ['action' => 'edit', $featuredArtist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Featured Artist'), ['action' => 'delete', $featuredArtist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $featuredArtist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Featured Artists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Featured Artist'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="featuredArtists view large-9 medium-8 columns content">
    <h3><?= h($featuredArtist->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($featuredArtist->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($featuredArtist->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($featuredArtist->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($featuredArtist->content)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($featuredArtist->image)); ?>
    </div>
</div>
