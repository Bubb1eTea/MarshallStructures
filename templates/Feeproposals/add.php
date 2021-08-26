<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feeproposal $feeproposal
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Feeproposals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feeproposals form content">
            <?= $this->Form->create($feeproposal) ?>
            <fieldset>
                <legend><?= __('Add Feeproposal') ?></legend>
                <?php
                    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]);
                    echo $this->Form->control('guarantor');
                    echo $this->Form->control('service_id');
                    echo $this->Form->control('document_id');
                    echo $this->Form->control('fee');
                    echo $this->Form->control('hourlyrate');
                    echo $this->Form->control('disbursement');
                    echo $this->Form->control('total');
                    echo $this->Form->control('totalGST');
                    echo $this->Form->control('grandtotal');
                    echo $this->Form->control('feebrokendown_id');
                    echo $this->Form->control('paywithinday');
                    echo $this->Form->control('datecreated');
                    echo $this->Form->control('lastmodified');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
