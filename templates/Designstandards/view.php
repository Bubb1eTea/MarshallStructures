<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Designstandard $designstandard
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Designstandard'), ['action' => 'edit', $designstandard->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Designstandard'), ['action' => 'delete', $designstandard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designstandard->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Designstandards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Designstandard'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="designstandards view content">
            <h3><?= h($designstandard->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designcode') ?></th>
                    <td><?= h($designstandard->designcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Designdesc') ?></th>
                    <td><?= h($designstandard->designdesc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($designstandard->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Ntcertificates') ?></h4>
                <?php if (!empty($designstandard->ntcertificates)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Lastmodified') ?></th>
                            <th><?= __('Lotportionnum') ?></th>
                            <th><?= __('Location') ?></th>
                            <th><?= __('Townhundred') ?></th>
                            <th><?= __('Workdesc') ?></th>
                            <th><?= __('Drawingno') ?></th>
                            <th><?= __('Other') ?></th>
                            <th><?= __('Buildingclass') ?></th>
                            <th><?= __('Constructiontype') ?></th>
                            <th><?= __('Buildingimportancelevel') ?></th>
                            <th><?= __('Windexceedance') ?></th>
                            <th><?= __('Region') ?></th>
                            <th><?= __('Windspeed') ?></th>
                            <th><?= __('Terraincat') ?></th>
                            <th><?= __('Referenceheight') ?></th>
                            <th><?= __('Mz') ?></th>
                            <th><?= __('Ms') ?></th>
                            <th><?= __('Mt') ?></th>
                            <th><?= __('Windspeedrefheight') ?></th>
                            <th><?= __('Intpressure') ?></th>
                            <th><?= __('Expressurewall') ?></th>
                            <th><?= __('Expressureroof') ?></th>
                            <th><?= __('Netpressureroofwall') ?></th>
                            <th><?= __('Imposedloadfloorroof') ?></th>
                            <th><?= __('Earthquakecat') ?></th>
                            <th><?= __('Earthexceedance') ?></th>
                            <th><?= __('Importancelevel') ?></th>
                            <th><?= __('Hazardfactor') ?></th>
                            <th><?= __('Subsoilclass') ?></th>
                            <th><?= __('Bearingcap') ?></th>
                            <th><?= __('Siteclass') ?></th>
                            <th><?= __('Exclusion') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Compname') ?></th>
                            <th><?= __('Compntregnum') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Ntregnum') ?></th>
                            <th><?= __('Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($designstandard->ntcertificates as $ntcertificates) : ?>
                        <tr>
                            <td><?= h($ntcertificates->id) ?></td>
                            <td><?= h($ntcertificates->project_id) ?></td>
                            <td><?= h($ntcertificates->lastmodified) ?></td>
                            <td><?= h($ntcertificates->lotportionnum) ?></td>
                            <td><?= h($ntcertificates->location) ?></td>
                            <td><?= h($ntcertificates->townhundred) ?></td>
                            <td><?= h($ntcertificates->workdesc) ?></td>
                            <td><?= h($ntcertificates->drawingno) ?></td>
                            <td><?= h($ntcertificates->other) ?></td>
                            <td><?= h($ntcertificates->buildingclass) ?></td>
                            <td><?= h($ntcertificates->constructiontype) ?></td>
                            <td><?= h($ntcertificates->buildingimportancelevel) ?></td>
                            <td><?= h($ntcertificates->windexceedance) ?></td>
                            <td><?= h($ntcertificates->region) ?></td>
                            <td><?= h($ntcertificates->windspeed) ?></td>
                            <td><?= h($ntcertificates->terraincat) ?></td>
                            <td><?= h($ntcertificates->referenceheight) ?></td>
                            <td><?= h($ntcertificates->mz) ?></td>
                            <td><?= h($ntcertificates->ms) ?></td>
                            <td><?= h($ntcertificates->mt) ?></td>
                            <td><?= h($ntcertificates->windspeedrefheight) ?></td>
                            <td><?= h($ntcertificates->intpressure) ?></td>
                            <td><?= h($ntcertificates->expressurewall) ?></td>
                            <td><?= h($ntcertificates->expressureroof) ?></td>
                            <td><?= h($ntcertificates->netpressureroofwall) ?></td>
                            <td><?= h($ntcertificates->imposedloadfloorroof) ?></td>
                            <td><?= h($ntcertificates->earthquakecat) ?></td>
                            <td><?= h($ntcertificates->earthexceedance) ?></td>
                            <td><?= h($ntcertificates->importancelevel) ?></td>
                            <td><?= h($ntcertificates->hazardfactor) ?></td>
                            <td><?= h($ntcertificates->subsoilclass) ?></td>
                            <td><?= h($ntcertificates->bearingcap) ?></td>
                            <td><?= h($ntcertificates->siteclass) ?></td>
                            <td><?= h($ntcertificates->exclusion) ?></td>
                            <td><?= h($ntcertificates->comment) ?></td>
                            <td><?= h($ntcertificates->compname) ?></td>
                            <td><?= h($ntcertificates->compntregnum) ?></td>
                            <td><?= h($ntcertificates->name) ?></td>
                            <td><?= h($ntcertificates->ntregnum) ?></td>
                            <td><?= h($ntcertificates->date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ntcertificates', 'action' => 'view', $ntcertificates->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ntcertificates', 'action' => 'edit', $ntcertificates->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ntcertificates', 'action' => 'delete', $ntcertificates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ntcertificates->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
