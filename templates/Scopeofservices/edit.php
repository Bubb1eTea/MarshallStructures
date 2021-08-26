<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Scopeofservice $scopeofservice
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $scopeofservice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $scopeofservice->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Scopeofservices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="scopeofservices form content">
            <?= $this->Form->create($scopeofservice) ?>
            <fieldset>
                <legend><?= __('Edit Scopeofservice') ?></legend>
                <?php
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
