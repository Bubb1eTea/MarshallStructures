<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Associate $associate
 * @var \Cake\Collection\CollectionInterface|string[] $associatecompanys
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Associates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="associates form content">
            <?= $this->Form->create($associate) ?>
            <fieldset>
                <legend><?= __('Add Associate') ?></legend>
                <?php
                    echo $this->Form->control('First Name');
                    echo $this->Form->control('Last Name');
                    echo $this->Form->control('Email');
                    echo $this->Form->control('Phone Number');
                    echo $this->Form->control('Position');
                    echo $this->Form->control('Role');
                    echo $this->Form->control('Associate Company', ['options' => $associatecompanys, 'empty' => false]);
                    echo $this->Form->control('projects._ids', ['options' => $projects]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
