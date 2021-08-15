<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 * @var \Cake\Collection\CollectionInterface|string[] $companys
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
                    echo $this->Form->control('firstname', ['label'=>"First name"]);
                    echo $this->Form->control('lastname', ['label'=>"Last name"]);
                    echo $this->Form->control('email', ['label'=>"E-mail"]);
                    echo $this->Form->control('phonenumber', ['label'=>"Phone number"]);
                    echo $this->Form->control('position', ['label'=>"Position"]);
                    echo $this->Form->control('clientcompany_id', ['options' => $companys, 'empty' => true], ['label'=>'Client Company']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
