<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientcompany[]|\Cake\Collection\CollectionInterface $clientcompanys
 */
?>
<div class="clientcompanys index content">
    <?= $this->Html->link(__('New Clientcompany'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clientcompanys') ?></h3>
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
                <?php foreach ($clientcompanys as $clientcompany): ?>
                <tr>
                    <td><?= $this->Number->format($clientcompany->id) ?></td>
                    <td><?= h($clientcompany->companyname) ?></td>
                    <td><?= h($clientcompany->type) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $clientcompany->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clientcompany->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clientcompany->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientcompany->id)]) ?>
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
