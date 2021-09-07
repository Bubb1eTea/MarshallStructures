<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 * @var string[]|\Cake\Collection\CollectionInterface $feeproposals
 */
?>

<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'invoices.edit');
$session->write('invoices_id',$invoice->id);
debug($session->read('previous_url'));?>
<style>
    .error-message {color:red;}
</style>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $invoice->id],
                ['confirm' => __('Are you sure you want to delete invoice #{0}?', $invoice->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Invoices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invoices form content">
            <?= $this->Form->create($invoice) ?>
            <fieldset>
                <legend><?= __('Edit Invoice #'.$invoice->id) ?></legend>
                <?php
                debug($feeproposal->first());
                debug($feeproposal->first()['Feeproposals']['total']);
                debug($feeproposal->first()['Feeproposals']['totalgst']);
                debug($feeproposal->first()['Feeproposals']['grandtotal']);

                echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]);
                echo $this->Form->control('feeproposal_id', ['options' => $feeproposals, 'empty' => true, 'label'=>"Fee Proposal"]);
                echo $this->Form->control('datecreated', ['label'=>"Date Created"]);
                echo $this->Form->control('invdesc', ['label'=>"Invoice Description"]);
                echo $this->Form->control('completedpercentage', ['label'=>"Completed Percentage"]);
                echo $this->Form->control('total', ['label'=>"Subtotal", 'value' => $feeproposal->first()['Feeproposals']['total']]);
                echo $this->Form->control('totalgst', ['label'=>"Total GST", 'value' => $feeproposal->first()['Feeproposals']['totalgst']]);
                echo $this->Form->control('grandtotal', ['label'=>"Grand Total", 'value' => $feeproposal->first()['Feeproposals']['grandtotal']]);
                $days = ['7'=>'7','30'=>'30'];
                echo $this->Form->control('paywithinday',['label' =>"Pay within how many days?",'options' => $days, 'empty' => false]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
