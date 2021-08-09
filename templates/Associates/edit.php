<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Associate $associate
 * @var string[]|\Cake\Collection\CollectionInterface $associatecompanys
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $associate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $associate->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Associates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="associates form content">
            <?= $this->Form->create($associate) ?>
            <fieldset>
                <legend><?= __('Edit Associate') ?></legend>
                <?php
                    echo $this->Form->control('firstname');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phonenumber');
                    echo $this->Form->control('position');
                    echo $this->Form->control('role');
                    echo $this->Form->control('associatecompany_id', ['options' => $associatecompanys, 'empty' => true]);
                    echo $this->Form->control('projects._ids', ['options' => $projects]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
