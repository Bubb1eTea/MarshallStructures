<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $invoices
 */
?>
<?php session_start();
$_SESSION['previous_url']=$_SESSION['url'];
$_SESSION['url']='invoices.index';?>
<div class="invoices index content">
    <?= $this->Html->link(__('New Invoice'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Invoices') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', ['label' =>"Invoice ID"]) ?></th>
                    <th><?= $this->Paginator->sort('datecreated', ['label' =>"Date Created"]) ?></th>
                    <th><?= $this->Paginator->sort('project_id', ['label' =>"Project ID"]) ?></th>
                    <th><?= $this->Paginator->sort('project_projectname', ['label' =>"Project Name"]) ?></th>
                    <th><?= $this->Paginator->sort('completepercentage', ['label' =>"Paid Percentage"]) ?></th>
                    <th><?= $this->Paginator->sort('subtotal', ['label' =>"Subtotal"]) ?></th>
                    <th><?= $this->Paginator->sort('saletax', ['label' =>"Sales Tax"]) ?></th>
                    <th><?= $this->Paginator->sort('totalamount', ['label' =>"Total Amount"]) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($invoices as $invoice): ?>
                <tr>
                    <td><?= h($invoice->id) ?></td>
                    <td><?= h($invoice->datecreated) ?></td>
                    <td><?= $invoice->has('project') ? $this->Html->link($invoice->project->msnumber, ['controller' => 'Projects', 'action' => 'view', $invoice->project->id]) : '' ?></td>
                    <td><?= $invoice->has('project') ? $this->Html->link($invoice->project->projectname, ['controller' => 'Projects', 'action' => 'view', $invoice->project->id]) : '' ?></td>
                    <td><?= $this->Number->format($invoice->completepercentage) ?>%</td>
                    <td>$<?= $this->Number->format($invoice->subtotal) ?></td>
                    <td>$<?= $this->Number->format($invoice->saletax) ?></td>
                    <td>$<?= $this->Number->format($invoice->totalamount) ?></td>
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
