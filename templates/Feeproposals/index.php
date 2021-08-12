<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feeproposal[]|\Cake\Collection\CollectionInterface $feeproposals
 */
?>
<div class="feeproposals index content">
    <?= $this->Html->link(__('New Fee Proposal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Fee Proposals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('lastmodified', ['label' =>"Last Modified"]) ?></th>
                    <th><?= $this->Paginator->sort('datecreated', ['label' =>"Date Created"]) ?></th>
                    <th><?= $this->Paginator->sort('project_id', ['label' =>"Project ID"]) ?></th>
                    <th><?= $this->Paginator->sort('project_projectname', ['label' =>"Project Name"]) ?></th>
                    <th><?= $this->Paginator->sort('fee', ['label' =>"Fee"]) ?></th>
                    <th><?= $this->Paginator->sort('disbursement', ['label' =>"Disbursement"]) ?></th>
                    <th><?= $this->Paginator->sort('total', ['label' =>"Total"]) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($feeproposals as $feeproposal): ?>
                <tr>
                    <td><?= h($feeproposal->lastmodified) ?></td>
                    <td><?= h($feeproposal->datecreated) ?></td>
                    <td><?= $feeproposal->has('project') ? $this->Html->link($feeproposal->project->msnumber, ['controller' => 'Projects', 'action' => 'view', $feeproposal->project->id]) : '' ?></td>
                    <td><?= $feeproposal->has('project') ? $this->Html->link($feeproposal->project->projectname, ['controller' => 'Projects', 'action' => 'view', $feeproposal->project->id]) : '' ?></td>
                    <td><?= $this->Number->format($feeproposal->fee) ?></td>
                    <td><?= $this->Number->format($feeproposal->disbursement) ?></td>
                    <td><?= $this->Number->format($feeproposal->total) ?></td>
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
