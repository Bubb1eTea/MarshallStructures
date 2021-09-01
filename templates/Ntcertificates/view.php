<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ntcertificate $ntcertificate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ntcertificate'), ['action' => 'edit', $ntcertificate->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ntcertificate'), ['action' => 'delete', $ntcertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ntcertificate->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ntcertificates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ntcertificate'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ntcertificates view content">
            <h3><?= h($ntcertificate->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $ntcertificate->has('project') ? $this->Html->link($ntcertificate->project->projectname, ['controller' => 'Projects', 'action' => 'view', $ntcertificate->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lotportionnum') ?></th>
                    <td><?= h($ntcertificate->lotportionnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($ntcertificate->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Townhundred') ?></th>
                    <td><?= h($ntcertificate->townhundred) ?></td>
                </tr>
                <tr>
                    <th><?= __('Buildingclass') ?></th>
                    <td><?= h($ntcertificate->buildingclass) ?></td>
                </tr>
                <tr>
                    <th><?= __('Constructiontype') ?></th>
                    <td><?= h($ntcertificate->constructiontype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Buildingimportancelevel') ?></th>
                    <td><?= h($ntcertificate->buildingimportancelevel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Windexceedance') ?></th>
                    <td><?= h($ntcertificate->windexceedance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Region') ?></th>
                    <td><?= h($ntcertificate->region) ?></td>
                </tr>
                <tr>
                    <th><?= __('Terraincat') ?></th>
                    <td><?= h($ntcertificate->terraincat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Intpressure') ?></th>
                    <td><?= h($ntcertificate->intpressure) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expressurewall') ?></th>
                    <td><?= h($ntcertificate->expressurewall) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expressureroof') ?></th>
                    <td><?= h($ntcertificate->expressureroof) ?></td>
                </tr>
                <tr>
                    <th><?= __('Netpressureroofwall') ?></th>
                    <td><?= h($ntcertificate->netpressureroofwall) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imposedloadfloorroof') ?></th>
                    <td><?= h($ntcertificate->imposedloadfloorroof) ?></td>
                </tr>
                <tr>
                    <th><?= __('Earthquakecat') ?></th>
                    <td><?= h($ntcertificate->earthquakecat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Earthexceedance') ?></th>
                    <td><?= h($ntcertificate->earthexceedance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importancelevel') ?></th>
                    <td><?= h($ntcertificate->importancelevel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hazardfactor') ?></th>
                    <td><?= h($ntcertificate->hazardfactor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subsoilclass') ?></th>
                    <td><?= h($ntcertificate->subsoilclass) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bearingcap') ?></th>
                    <td><?= h($ntcertificate->bearingcap) ?></td>
                </tr>
                <tr>
                    <th><?= __('Siteclass') ?></th>
                    <td><?= h($ntcertificate->siteclass) ?></td>
                </tr>
                <tr>
                    <th><?= __('Compname') ?></th>
                    <td><?= h($ntcertificate->compname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Compntregnum') ?></th>
                    <td><?= h($ntcertificate->compntregnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($ntcertificate->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ntregnum') ?></th>
                    <td><?= h($ntcertificate->ntregnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ntcertificate->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Windspeed') ?></th>
                    <td><?= $this->Number->format($ntcertificate->windspeed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referenceheight') ?></th>
                    <td><?= $this->Number->format($ntcertificate->referenceheight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mz') ?></th>
                    <td><?= $this->Number->format($ntcertificate->mz) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ms') ?></th>
                    <td><?= $this->Number->format($ntcertificate->ms) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mt') ?></th>
                    <td><?= $this->Number->format($ntcertificate->mt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Windspeedrefheight') ?></th>
                    <td><?= $this->Number->format($ntcertificate->windspeedrefheight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastmodified') ?></th>
                    <td><?= h($ntcertificate->lastmodified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($ntcertificate->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Workdesc') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ntcertificate->workdesc)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Drawingno') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ntcertificate->drawingno)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Other') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ntcertificate->other)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Exclusion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ntcertificate->exclusion)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ntcertificate->comment)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Designstandards') ?></h4>
                <?php if (!empty($ntcertificate->designstandards)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Designcode') ?></th>
                            <th><?= __('Designdesc') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ntcertificate->designstandards as $designstandards) : ?>
                        <tr>
                            <td><?= h($designstandards->id) ?></td>
                            <td><?= h($designstandards->designcode) ?></td>
                            <td><?= h($designstandards->designdesc) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Designstandards', 'action' => 'view', $designstandards->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Designstandards', 'action' => 'edit', $designstandards->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Designstandards', 'action' => 'delete', $designstandards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designstandards->id)]) ?>
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
