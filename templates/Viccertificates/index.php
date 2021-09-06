<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Viccertificate[]|\Cake\Collection\CollectionInterface $viccertificates
 */
?>
<div class="viccertificates index content">
    <?= $this->Html->link(__('New Viccertificate'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Viccertificates') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', ['label'=>'ID']) ?></th>
                    <th><?= $this->Paginator->sort('project_id', ['label'=>'Project ID']) ?></th>
                    <th><?= $this->Paginator->sort('dateofissue', ['label'=>'Date of Issue']) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($viccertificates as $viccertificate): ?>
                <tr>
                    <td><?= $this->Number->format($viccertificate->id) ?></td>
                    <td><?= $viccertificate->has('project') ? $this->Html->link($viccertificate->project->projectname, ['controller' => 'Projects', 'action' => 'view', $viccertificate->project->id]) : '' ?></td>
                    <td><?= h($viccertificate->dateofissue) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $viccertificate->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $viccertificate->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $viccertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $viccertificate->id)]) ?>
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
