<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Associatecompany $associatecompany
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Associatecompanys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="associatecompanys form content">
            <?= $this->Form->create($associatecompany) ?>
            <fieldset>
                <legend><?= __('Add Associatecompany') ?></legend>
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
