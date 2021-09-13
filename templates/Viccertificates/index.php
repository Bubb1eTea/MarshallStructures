<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Viccertificate[]|\Cake\Collection\CollectionInterface $viccertificates
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'viccertificates.index');
debug($session->read('previous_url')); ?>
<div class="viccertificates index content">
    <?= $this->Html->link(__('New VIC Certificate'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('VIC Certificates') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', ['label'=>'ID']) ?></th>
                    <th><?= $this->Paginator->sort('project_id', ['label'=>'MS Code']) ?></th>
                    <th><?= $this->Paginator->sort('project_id', ['label'=>'Project Name']) ?></th>
                    <th><?= $this->Paginator->sort('dateofissue', ['label'=>'Date of Issue']) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($viccertificates as $viccertificate): ?>
                <tr>
                    <td><?= $this->Number->format($viccertificate->id) ?></td>
                    <td><?= $viccertificate->has('project') ? $this->Html->link($viccertificate->project->msnumber, ['controller' => 'Projects', 'action' => 'view', $viccertificate->project->id]) : '' ?></td>
                    <td><?= $viccertificate->has('project') ? $this->Html->link($viccertificate->project->projectname, ['controller' => 'Projects', 'action' => 'view', $viccertificate->project->id]) : '' ?></td>
                    <td><?= date('D d/m/y', strtotime($viccertificate->dateofissue)) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $viccertificate->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $viccertificate->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $viccertificate->id], ['confirm' => __('Are you sure you want to delete VIC Certificate #{0}?', $viccertificate->id)]) ?>
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
