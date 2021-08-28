<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feeproposal[]|\Cake\Collection\CollectionInterface $feeproposals
 */
?>
<div class="feeproposals index content">
    <?= $this->Html->link(__('New Feeproposal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Feeproposals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('guarantor') ?></th>
                    <th><?= $this->Paginator->sort('fixedfee') ?></th>
                    <th><?= $this->Paginator->sort('hourlyrate') ?></th>
                    <th><?= $this->Paginator->sort('disbursement') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('totalgst') ?></th>
                    <th><?= $this->Paginator->sort('grandtotal') ?></th>
                    <th><?= $this->Paginator->sort('paywithinday') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($feeproposals as $feeproposal): ?>
                <tr>
                    <td><?= $this->Number->format($feeproposal->id) ?></td>
                    <td><?= $feeproposal->has('project') ? $this->Html->link($feeproposal->project->projectname, ['controller' => 'Projects', 'action' => 'view', $feeproposal->project->id]) : '' ?></td>
                    <td><?= h($feeproposal->guarantor) ?></td>
                    <td><?= $this->Number->format($feeproposal->fixedfee) ?></td>
                    <td><?= $this->Number->format($feeproposal->hourlyrate) ?></td>
                    <td><?= $this->Number->format($feeproposal->disbursement) ?></td>
                    <td><?= $this->Number->format($feeproposal->total) ?></td>
                    <td><?= $this->Number->format($feeproposal->totalgst) ?></td>
                    <td><?= $this->Number->format($feeproposal->grandtotal) ?></td>
                    <td><?= $this->Number->format($feeproposal->paywithinday) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $feeproposal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feeproposal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feeproposal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feeproposal->id)]) ?>
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
