<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Designstandard $designstandard
 * @var string[]|\Cake\Collection\CollectionInterface $ntcertificates
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $designstandard->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $designstandard->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Designstandards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="designstandards form content">
            <?= $this->Form->create($designstandard) ?>
            <fieldset>
                <legend><?= __('Edit Designstandard') ?></legend>
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
