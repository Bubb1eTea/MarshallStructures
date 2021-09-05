<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ntcertificate[]|\Cake\Collection\CollectionInterface $ntcertificates
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'ntcertificates.index');
debug($session->read('previous_url')); ?>
<div class="ntcertificates index content">
    <?= $this->Html->link(__('New NT Certificate'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('NI Certificates') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ntcertificates as $ntcertificate): ?>
                <tr>
                    <td><?= $this->Number->format($ntcertificate->id) ?></td>
                    <td><?= $ntcertificate->has('project') ? $this->Html->link($ntcertificate->project->projectname, ['controller' => 'Projects', 'action' => 'view', $ntcertificate->project->id]) : '' ?></td>
                    <td><?= date('D d/m/y', strtotime($ntcertificate->date)) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ntcertificate->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ntcertificate->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ntcertificate->id], ['confirm' => __('Are you sure you want to delete NT Certificate #{0}?', $ntcertificate->id)]) ?>
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
