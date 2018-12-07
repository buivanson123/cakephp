<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LatestMusic $latestMusic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Latest Musics'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="latestMusics form large-9 medium-8 columns content">
    <?= $this->Form->create($latestMusic) ?>
    <fieldset>
        <legend><?= __('Add Latest Music') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
