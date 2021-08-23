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
            <?= $this->Html->link(__('List Invoice'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Invoice'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invoices view content">
            <h3><?= $invoice->has('project') ? $this->Html->link($invoice->project->projectname, ['controller' => 'Projects', 'action' => 'view', $invoice->project->id]) : '' ?></h3>
            <table>
                <tr>
                    <th><?= __('Invoice ID') ?></th>
                    <td><?= h($invoice->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project Name') ?></th>
                    <td><?= $invoice->has('project') ? $this->Html->link($invoice->project->projectname, ['controller' => 'Projects', 'action' => 'view', $invoice->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Paid Percentage') ?></th>
                    <td><?= $this->Number->format($invoice->completepercentage) ?>%</td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $this->Number->format($invoice->subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sales Tax') ?></th>
                    <td><?= $this->Number->format($invoice->saletax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Amount') ?></th>
                    <td><?= $this->Number->format($invoice->totalamount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Created') ?></th>
                    <td><?= h($invoice->datecreated) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Invoice Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($invoice->invdesc)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
