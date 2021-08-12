<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feeproposal $feeproposal
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $feeproposal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $feeproposal->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Feeproposals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feeproposals form content">
            <?= $this->Form->create($feeproposal) ?>
            <fieldset>
                <legend><?= __('Edit Feeproposal') ?></legend>
                <?php
                    echo $this->Form->control('proposaldesc');
                    echo $this->Form->control('datecreated');
                    echo $this->Form->control('lastmodified');
                    echo $this->Form->control('fee');
                    echo $this->Form->control('disbursement');
                    echo $this->Form->control('total');
                    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
