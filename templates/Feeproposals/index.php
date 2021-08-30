<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feeproposal[]|\Cake\Collection\CollectionInterface $feeproposals
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'feeproposals.index');
debug($session->read('previous_url')); ?>

<div class="feeproposals index content">
    <?= $this->Html->link(__('New Fee Proposal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Fee Proposals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', ['label' =>"Fee Proposal ID"]) ?></th>
                    <th><?= $this->Paginator->sort('project_id', ['label' =>"Project Name"]) ?></th>
                    <th><?= $this->Paginator->sort('guarantor', ['label' =>"Guarantor"]) ?></th>
                    <th><?= $this->Paginator->sort('grandtotal', ['label' =>"Grand Total"]) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($feeproposals as $feeproposal): ?>
                <tr>
                    <td><?= $this->Number->format($feeproposal->id) ?></td>
                    <td><?= $feeproposal->has('project') ? $this->Html->link($feeproposal->project->projectname, ['controller' => 'Projects', 'action' => 'view', $feeproposal->project->id]) : '' ?></td>
                    <td><?= h($feeproposal->guarantor) ?></td>
                    <td>$<?= $this->Number->format($feeproposal->grandtotal) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $feeproposal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feeproposal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feeproposal->id], ['confirm' => __('Are you sure you want to delete fee proposal #{0}?', $feeproposal->id)]) ?>
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
