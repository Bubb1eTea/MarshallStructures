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
                    <th><?= __('Project') ?></th>
                    <td><?= $invoice->has('project') ? $this->Html->link($invoice->project->projectname, ['controller' => 'Projects', 'action' => 'view', $invoice->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Feeproposal') ?></th>
                    <td><?= $invoice->has('feeproposal') ? $this->Html->link($invoice->feeproposal->id, ['controller' => 'Feeproposals', 'action' => 'view', $invoice->feeproposal->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($invoice->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Completedpercentage') ?></th>
                    <td><?= $this->Number->format($invoice->completedpercentage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($invoice->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalgst') ?></th>
                    <td><?= $this->Number->format($invoice->totalgst) ?></td>
                </tr>
                <tr>
                    <th><?= __('Grandtotal') ?></th>
                    <td><?= $this->Number->format($invoice->grandtotal) ?></td>
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
