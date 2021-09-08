<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $invoices
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'invoices.index');
debug($session->read('previous_url')); ?>

<div class="invoices index content">
    <?= $this->Html->link(__('New Invoice'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Invoices') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('datecreated',['label'=>'Date Created']) ?></th>
                    <th><?= $this->Paginator->sort('id', ['label'=>'Invoice ID']) ?></th>
                    <th><?= $this->Paginator->sort('project_id',['label'=>'MS Code']) ?></th>
                    <th><?= $this->Paginator->sort('project_id',['label'=>'Project Name']) ?></th>
                    <th><?= $this->Paginator->sort('feeproposal_id',['label'=>'Fee Proposal ID']) ?></th>
                    <th><?= $this->Paginator->sort('completedpercentage',['label'=>'Percentage']) ?></th>
                    <th><?= $this->Paginator->sort('grandtotal',['label'=>'Grand Total']) ?></th>
                    <th><?= $this->Paginator->sort('paywithinday',['label'=>'Date Due']) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($invoices as $invoice): ?>
                <tr>
                    <td><?= date('d/m/y',strtotime($invoice->datecreated)) ?></td>
                    <td><?= $this->Number->format($invoice->id) ?></td>
                    <td><?= $invoice->has('project') ? $this->Html->link($invoice->project->msnumber, ['controller' => 'Projects', 'action' => 'view', $invoice->project->id]) : '' ?></td>
                    <td><?= $invoice->has('project') ? $this->Html->link($invoice->project->projectname, ['controller' => 'Projects', 'action' => 'view', $invoice->project->id]) : '' ?></td>
                    <td><?= $invoice->has('feeproposal') ? $this->Html->link($invoice->feeproposal->id, ['controller' => 'Feeproposals', 'action' => 'view', $invoice->feeproposal->id]) : '' ?></td>
                    <td><?= $this->Number->format($invoice->completedpercentage, ['after' => '%']) ?></td>
                    <td><?= $this->Number->format($invoice->grandtotal, ['places' => 2, 'before' => '$']) ?></td>
                    <td><?= date('d/m/y', strtotime($invoice->datecreated. ' + ' .$invoice->paywithinday.' days')) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $invoice->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoice->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete invoice #{0}?', $invoice->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
