<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feebrokendown $feebrokendown
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $feebrokendown->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $feebrokendown->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Feebrokendowns'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feebrokendowns form content">
            <?= $this->Form->create($feebrokendown) ?>
            <fieldset>
                <legend><?= __('Edit Feebrokendown') ?></legend>
                <?php
                    echo $this->Form->control('amount');
                    echo $this->Form->control('desc');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
