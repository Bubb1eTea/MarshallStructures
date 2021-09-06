<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentsproduced[]|\Cake\Collection\CollectionInterface $documentsproduceds
 */
?>
<div class="documentsproduceds index content">
    <?= $this->Html->link(__('New Documentsproduced'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Documentsproduceds') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('documentno') ?></th>
                    <th><?= $this->Paginator->sort('documentdate') ?></th>
                    <th><?= $this->Paginator->sort('revision') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($documentsproduceds as $documentsproduced): ?>
                <tr>
                    <td><?= $this->Number->format($documentsproduced->id) ?></td>
                    <td><?= $this->Number->format($documentsproduced->documentno) ?></td>
                    <td><?= h($documentsproduced->documentdate) ?></td>
                    <td><?= $this->Number->format($documentsproduced->revision) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $documentsproduced->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $documentsproduced->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $documentsproduced->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentsproduced->id)]) ?>
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
