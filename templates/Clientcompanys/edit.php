<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientcompany $clientcompany
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientcompany->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientcompany->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Clientcompanys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientcompanys form content">
            <?= $this->Form->create($clientcompany) ?>
            <fieldset>
                <legend><?= __('Edit Clientcompany') ?></legend>
                <?php
                    echo $this->Form->control('companyname');
                    echo $this->Form->control('type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
