<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $associates
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $project->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $project->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projects form content">
            <?= $this->Form->create($project) ?>
            <fieldset>
                <legend><?= __('Edit Project') ?></legend>
                <?php
                    echo $this->Form->control('msnumber', ['label'=>"MS Number"]);
                    echo $this->Form->control('projectname', ['label'=>"Project Name"]);
                    echo $this->Form->control('streetname', ['label'=>"Street Name"]);
                    echo $this->Form->control('suburb', ['label'=>"Suburb"]);
                    echo $this->Form->control('postcode', ['label'=>"Post Code"]);
                    $choices = ['NSW'=>'NSW','QLD'=>'QLD','SA'=>'SA', 'TAS'=>'TAS','VIC	'=>'VIC	','WA'=>'WA'];
                    echo $this->Form->control('state', ['label'=>"State", 'options' => $choices, 'empty' => true]);
                    echo $this->Form->control('phase', ['label'=>"Phase"]);
                    echo $this->Form->control('projectdesc', ['label'=>"Project Description"]);
                    echo $this->Form->control('duedate', ['label'=>"Due Date", 'empty' => true]);
                    echo $this->Form->control('client_id', ['label'=>"Client", 'options' => $clients, 'empty' => true]);
                    echo $this->Form->control('associates._ids', ['options' => $associates]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
