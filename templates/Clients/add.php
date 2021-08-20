<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 * @var \Cake\Collection\CollectionInterface|string[] $companys
 */
?>
<style>
    .error-message {color:red;}
</style>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Client'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Add Client') ?></legend>
                <?php
                    echo $this->Form->control('firstname', ['label'=>"First Name"]);
                    echo $this->Form->control('lastname', ['label'=>"Last Name"]);
                    echo $this->Form->control('email', ['label'=>"Email"]);
                    echo $this->Form->control('phonenumber', ['label'=>"Phone Number"]);
                    echo $this->Form->control('position', ['label'=>"Position"]);
                    echo $this->Html->link(__('Add New Company'), ['action' => '../companys/add'], ['class' => 'button float-right']);
                    echo $this->Form->control('company_id', ['options' => $companys, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
