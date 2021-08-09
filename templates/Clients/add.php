<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 * @var \Cake\Collection\CollectionInterface|string[] $clientcompanys
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Add Client') ?></legend>
                <?php
                    echo $this->Form->control('firstname');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phonenumber');
                    echo $this->Form->control('position');
                    echo $this->Form->control('clientcompany_id', ['options' => $clientcompanys, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
