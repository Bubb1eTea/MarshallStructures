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
            <?= $this->Html->link(__('List Fee Proposal'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feeproposals form content">
            <?= $this->Form->create($feeproposal) ?>
            <fieldset>
                <legend><?= __('Edit Fee Proposal') ?></legend>
                <?php
                    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => false]);
                    echo $this->Form->control('fee', ['label' =>"Fee"]);
                    echo $this->Form->control('disbursement', ['label' =>"Disbursement"]);
                    echo $this->Form->control('total', ['label' =>"Total"]);
                    echo $this->Form->control('proposaldesc', ['label' =>"Proposal Description"]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
