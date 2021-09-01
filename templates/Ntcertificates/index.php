<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ntcertificate[]|\Cake\Collection\CollectionInterface $ntcertificates
 */
?>
<div class="ntcertificates index content">
    <?= $this->Html->link(__('New Ntcertificate'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ntcertificates') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('lastmodified') ?></th>
                    <th><?= $this->Paginator->sort('lotportionnum') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('townhundred') ?></th>
                    <th><?= $this->Paginator->sort('buildingclass') ?></th>
                    <th><?= $this->Paginator->sort('constructiontype') ?></th>
                    <th><?= $this->Paginator->sort('buildingimportancelevel') ?></th>
                    <th><?= $this->Paginator->sort('windexceedance') ?></th>
                    <th><?= $this->Paginator->sort('region') ?></th>
                    <th><?= $this->Paginator->sort('windspeed') ?></th>
                    <th><?= $this->Paginator->sort('terraincat') ?></th>
                    <th><?= $this->Paginator->sort('referenceheight') ?></th>
                    <th><?= $this->Paginator->sort('mz') ?></th>
                    <th><?= $this->Paginator->sort('ms') ?></th>
                    <th><?= $this->Paginator->sort('mt') ?></th>
                    <th><?= $this->Paginator->sort('windspeedrefheight') ?></th>
                    <th><?= $this->Paginator->sort('intpressure') ?></th>
                    <th><?= $this->Paginator->sort('expressurewall') ?></th>
                    <th><?= $this->Paginator->sort('expressureroof') ?></th>
                    <th><?= $this->Paginator->sort('netpressureroofwall') ?></th>
                    <th><?= $this->Paginator->sort('imposedloadfloorroof') ?></th>
                    <th><?= $this->Paginator->sort('earthquakecat') ?></th>
                    <th><?= $this->Paginator->sort('earthexceedance') ?></th>
                    <th><?= $this->Paginator->sort('importancelevel') ?></th>
                    <th><?= $this->Paginator->sort('hazardfactor') ?></th>
                    <th><?= $this->Paginator->sort('subsoilclass') ?></th>
                    <th><?= $this->Paginator->sort('bearingcap') ?></th>
                    <th><?= $this->Paginator->sort('siteclass') ?></th>
                    <th><?= $this->Paginator->sort('compname') ?></th>
                    <th><?= $this->Paginator->sort('compntregnum') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('ntregnum') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ntcertificates as $ntcertificate): ?>
                <tr>
                    <td><?= $this->Number->format($ntcertificate->id) ?></td>
                    <td><?= $ntcertificate->has('project') ? $this->Html->link($ntcertificate->project->projectname, ['controller' => 'Projects', 'action' => 'view', $ntcertificate->project->id]) : '' ?></td>
                    <td><?= h($ntcertificate->lastmodified) ?></td>
                    <td><?= h($ntcertificate->lotportionnum) ?></td>
                    <td><?= h($ntcertificate->location) ?></td>
                    <td><?= h($ntcertificate->townhundred) ?></td>
                    <td><?= h($ntcertificate->buildingclass) ?></td>
                    <td><?= h($ntcertificate->constructiontype) ?></td>
                    <td><?= h($ntcertificate->buildingimportancelevel) ?></td>
                    <td><?= h($ntcertificate->windexceedance) ?></td>
                    <td><?= h($ntcertificate->region) ?></td>
                    <td><?= $this->Number->format($ntcertificate->windspeed) ?></td>
                    <td><?= h($ntcertificate->terraincat) ?></td>
                    <td><?= $this->Number->format($ntcertificate->referenceheight) ?></td>
                    <td><?= $this->Number->format($ntcertificate->mz) ?></td>
                    <td><?= $this->Number->format($ntcertificate->ms) ?></td>
                    <td><?= $this->Number->format($ntcertificate->mt) ?></td>
                    <td><?= $this->Number->format($ntcertificate->windspeedrefheight) ?></td>
                    <td><?= h($ntcertificate->intpressure) ?></td>
                    <td><?= h($ntcertificate->expressurewall) ?></td>
                    <td><?= h($ntcertificate->expressureroof) ?></td>
                    <td><?= h($ntcertificate->netpressureroofwall) ?></td>
                    <td><?= h($ntcertificate->imposedloadfloorroof) ?></td>
                    <td><?= h($ntcertificate->earthquakecat) ?></td>
                    <td><?= h($ntcertificate->earthexceedance) ?></td>
                    <td><?= h($ntcertificate->importancelevel) ?></td>
                    <td><?= h($ntcertificate->hazardfactor) ?></td>
                    <td><?= h($ntcertificate->subsoilclass) ?></td>
                    <td><?= h($ntcertificate->bearingcap) ?></td>
                    <td><?= h($ntcertificate->siteclass) ?></td>
                    <td><?= h($ntcertificate->compname) ?></td>
                    <td><?= h($ntcertificate->compntregnum) ?></td>
                    <td><?= h($ntcertificate->name) ?></td>
                    <td><?= h($ntcertificate->ntregnum) ?></td>
                    <td><?= h($ntcertificate->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ntcertificate->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ntcertificate->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ntcertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ntcertificate->id)]) ?>
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
