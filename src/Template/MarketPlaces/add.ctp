<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MarketPlace $marketPlace
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Market Places'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="marketPlaces form large-9 medium-8 columns content">
    <?= $this->Form->create($marketPlace) ?>
    <fieldset>
        <legend><?= __('Add Market Place') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('content');
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
