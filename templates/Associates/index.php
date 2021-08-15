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
                    <th><?= $this->Paginator->sort('firstname', ['label'=>"First Name"]) ?></th>
                    <th><?= $this->Paginator->sort('lastname', ['label'=>"Last Name"]) ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phonenumber', ['label'=>"Phone Number"]) ?></th>
                    <th><?= $this->Paginator->sort('company_id', ['label'=>"Company"]) ?></th>
                    <th><?= $this->Paginator->sort('position', ['label'=>"Position"]) ?></th>
                    <th><?= $this->Paginator->sort('role', ['label'=>"Role"]) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($associates as $associate): ?>
                <tr>
                    <td><?= h($associate->firstname) ?></td>
                    <td><?= h($associate->lastname) ?></td>
                    <td><?= h($associate->email) ?></td>
                    <td><?= h($associate->phonenumber) ?></td>
                    <td><?= $associate->has('company') ? $this->Html->link($associate->company->companyname, ['controller' => 'Companys', 'action' => 'view', $associate->company->id]) : '' ?></td>
                    <td><?= h($associate->position) ?></td>
                    <td><?= h($associate->role) ?></td>
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
