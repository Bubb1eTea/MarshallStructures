<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentscertified[]|\Cake\Collection\CollectionInterface $documentscertifieds
 */
?>
<div class="documentscertifieds index content">
    <?= $this->Html->link(__('New Documentscertified'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Documentscertifieds') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('documentno') ?></th>
                    <th><?= $this->Paginator->sort('documentdate') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('numberofpage') ?></th>
                    <th><?= $this->Paginator->sort('preparedby') ?></th>
                    <th><?= $this->Paginator->sort('viccertificate_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($documentscertifieds as $documentscertified): ?>
                <tr>
                    <td><?= $this->Number->format($documentscertified->id) ?></td>
                    <td><?= $this->Number->format($documentscertified->documentno) ?></td>
                    <td><?= h($documentscertified->documentdate) ?></td>
                    <td><?= h($documentscertified->type) ?></td>
                    <td><?= $this->Number->format($documentscertified->numberofpage) ?></td>
                    <td><?= h($documentscertified->preparedby) ?></td>
                    <td><?= $documentscertified->has('viccertificate') ? $this->Html->link($documentscertified->viccertificate->id, ['controller' => 'Viccertificates', 'action' => 'view', $documentscertified->viccertificate->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $documentscertified->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $documentscertified->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $documentscertified->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentscertified->id)]) ?>
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
