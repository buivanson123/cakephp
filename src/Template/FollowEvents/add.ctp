<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FollowEvent $followEvent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Follow Events'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="followEvents form large-9 medium-8 columns content">
    <?= $this->Form->create($followEvent) ?>
    <fieldset>
        <legend><?= __('Add Follow Event') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
