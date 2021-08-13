<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<div class="clients index content">
    <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clients') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('First name') ?></th>
                    <th><?= $this->Paginator->sort('Last name') ?></th>
                    <th><?= $this->Paginator->sort('E-mail') ?></th>
                    <th><?= $this->Paginator->sort('Phone number') ?></th>
                    <th><?= $this->Paginator->sort('Position') ?></th>
                    <th><?= $this->Paginator->sort('Client company') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= h($client->firstname) ?></td>
                    <td><?= h($client->lastname) ?></td>
                    <td><?= h($client->email) ?></td>
                    <td><?= h($client->phonenumber) ?></td>
                    <td><?= h($client->position) ?></td>
                    <td><?= $client->has('company') ? $this->Html->link($client->company->companyname, ['controller' => 'Companys', 'action' => 'view', $client->company->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
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
