<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Designstandard $designstandard
 * @var \Cake\Collection\CollectionInterface|string[] $ntcertificates
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Designstandards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="designstandards form content">
            <?= $this->Form->create($designstandard) ?>
            <fieldset>
                <legend><?= __('Add Designstandard') ?></legend>
                <?php
                    echo $this->Form->control('designcode');
                    echo $this->Form->control('designdesc');
                    echo $this->Form->control('ntcertificates._ids', ['options' => $ntcertificates]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
