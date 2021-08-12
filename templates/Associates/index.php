<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Associate[]|\Cake\Collection\CollectionInterface $associates
 */
?>
<div class="associates index content">
    <?= $this->Html->link(__('New Associate'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Associates') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('firstname') ?></th>
                    <th><?= $this->Paginator->sort('lastname') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phonenumber') ?></th>
                    <th><?= $this->Paginator->sort('position') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th><?= $this->Paginator->sort('company_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($associates as $associate): ?>
                <tr>
                    <td><?= $this->Number->format($associate->id) ?></td>
                    <td><?= h($associate->firstname) ?></td>
                    <td><?= h($associate->lastname) ?></td>
                    <td><?= h($associate->email) ?></td>
                    <td><?= h($associate->phonenumber) ?></td>
                    <td><?= h($associate->position) ?></td>
                    <td><?= h($associate->role) ?></td>
                    <td><?= $associate->has('company') ? $this->Html->link($associate->company->id, ['controller' => 'Companys', 'action' => 'view', $associate->company->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $associate->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $associate->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $associate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $associate->id)]) ?>
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
