<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 * @var \Cake\Collection\CollectionInterface|string[] $associates
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projects form content">
            <?= $this->Form->create($project) ?>
            <fieldset>
                <legend><?= __('Add Project') ?></legend>
                <?php
                    echo $this->Form->control('msnumber');
                    echo $this->Form->control('projectname');
                    echo $this->Form->control('streetname');
                    echo $this->Form->control('suburb');
                    echo $this->Form->control('postcode');
                    echo $this->Form->control('state');
                    echo $this->Form->control('phase');
                    echo $this->Form->control('duedate', ['empty' => true]);
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('associates._ids', ['options' => $associates]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
