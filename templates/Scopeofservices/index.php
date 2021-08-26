<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Scopeofservice[]|\Cake\Collection\CollectionInterface $scopeofservices
 */
?>
<div class="scopeofservices index content">
    <?= $this->Html->link(__('New Scopeofservice'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Scopeofservices') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($scopeofservices as $scopeofservice): ?>
                <tr>
                    <td><?= $this->Number->format($scopeofservice->id) ?></td>
                    <td><?= h($scopeofservice->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $scopeofservice->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $scopeofservice->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $scopeofservice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scopeofservice->id)]) ?>
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
