<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feebrokendown[]|\Cake\Collection\CollectionInterface $feebrokendowns
 */
?>
<div class="feebrokendowns index content">
    <?= $this->Html->link(__('New Feebrokendown'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Feebrokendowns') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('desc') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($feebrokendowns as $feebrokendown): ?>
                <tr>
                    <td><?= $this->Number->format($feebrokendown->id) ?></td>
                    <td><?= $this->Number->format($feebrokendown->amount) ?></td>
                    <td><?= h($feebrokendown->desc) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $feebrokendown->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feebrokendown->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feebrokendown->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feebrokendown->id)]) ?>
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
