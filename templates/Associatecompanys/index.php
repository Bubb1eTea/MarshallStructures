<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Associatecompany[]|\Cake\Collection\CollectionInterface $associatecompanys
 */
?>
<div class="associatecompanys index content">
    <?= $this->Html->link(__('New Associatecompany'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Associatecompanys') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('companyname') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($associatecompanys as $associatecompany): ?>
                <tr>
                    <td><?= $this->Number->format($associatecompany->id) ?></td>
                    <td><?= h($associatecompany->companyname) ?></td>
                    <td><?= h($associatecompany->type) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $associatecompany->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $associatecompany->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $associatecompany->id], ['confirm' => __('Are you sure you want to delete # {0}?', $associatecompany->id)]) ?>
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
