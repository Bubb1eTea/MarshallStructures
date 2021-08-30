<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'invoices.view');
debug($session->read('previous_url')); ?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete invoice #{0}?', $invoice->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Invoices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Invoice'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invoices view content">
            <h3><?= 'Invoice #'.h($invoice->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Project Name') ?></th>
                    <td><?= $invoice->has('project') ? $this->Html->link($invoice->project->projectname, ['controller' => 'Projects', 'action' => 'view', $invoice->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fee Proposal ID') ?></th>
                    <td><?= $invoice->has('feeproposal') ? $this->Html->link($invoice->feeproposal->id, ['controller' => 'Feeproposals', 'action' => 'view', $invoice->feeproposal->id]) : '' ?></td>
                </tr>
            </table>
                <tr>
                    <div class="text">
                        <strong><?= __('Invoice Description') ?></strong>
                        <blockquote>
                            <?= $this->Text->autoParagraph(h($invoice->invdesc)); ?>
                        </blockquote>
                    </div>
                </tr>
            <table>
                <tr>
                    <th><?= __('Completed Percentage') ?></th>
                    <td>$<?= $this->Number->format($invoice->completedpercentage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td>$<?= $this->Number->format($invoice->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total GST') ?></th>
                    <td>$<?= $this->Number->format($invoice->totalgst) ?></td>
                </tr>
                <tr>
                    <th><?= __('Grand Total') ?></th>
                    <td>$<?= $this->Number->format($invoice->grandtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay within how many days?') ?></th>
                    <td><?= $this->Number->format($invoice->paywithinday) ?> days</td>
                </tr>
                <tr>
                    <th><?= __('Date Created') ?></th>
                    <td><?= date('D d/m/y h:m A',strtotime($invoice->datecreated)) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Due') ?></th>
                    <td><?= date('D d/m/y', strtotime($invoice->datecreated. ' + ' .$invoice->paywithinday.' days')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
