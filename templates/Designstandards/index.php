<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Designstandard[]|\Cake\Collection\CollectionInterface $designstandards
 */
?>
<div class="designstandards index content">
    <?= $this->Html->link(__('New Design Standard'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Designstandards') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', ['label'=>'ID']) ?></th>
                    <th><?= $this->Paginator->sort('designcode', ['label'=>'Design Code']) ?></th>
                    <th><?= $this->Paginator->sort('designdesc', ['label'=>'Design Description']) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($designstandards as $designstandard): ?>
                <tr>
                    <td><?= $this->Number->format($designstandard->id) ?></td>
                    <td><?= h($designstandard->designcode) ?></td>
                    <td><?= h($designstandard->designdesc) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $designstandard->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designstandard->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designstandard->id], ['confirm' => __('Are you sure you want to delete design code {0}?', $designstandard->designcode)]) ?>
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
