<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Invoices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Invoice'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invoices view content">
            <h3><?= h($invoice->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($invoice->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Feeproposal Id') ?></th>
                    <td><?= $this->Number->format($invoice->feeproposal_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Completepercentage') ?></th>
                    <td><?= $this->Number->format($invoice->completepercentage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $this->Number->format($invoice->subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saletax') ?></th>
                    <td><?= $this->Number->format($invoice->saletax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalamount') ?></th>
                    <td><?= $this->Number->format($invoice->totalamount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paywithinday') ?></th>
                    <td><?= $this->Number->format($invoice->paywithinday) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datecreated') ?></th>
                    <td><?= h($invoice->datecreated) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Invdesc') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($invoice->invdesc)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
