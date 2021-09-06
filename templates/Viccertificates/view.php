<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Viccertificate $viccertificate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Viccertificate'), ['action' => 'edit', $viccertificate->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Viccertificate'), ['action' => 'delete', $viccertificate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $viccertificate->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Viccertificates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Viccertificate'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="viccertificates view content">
            <h3><?= h($viccertificate->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $viccertificate->has('project') ? $this->Html->link($viccertificate->project->projectname, ['controller' => 'Projects', 'action' => 'view', $viccertificate->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= $viccertificate->has('company') ? $this->Html->link($viccertificate->company->companyname, ['controller' => 'Companys', 'action' => 'view', $viccertificate->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Buildingtype') ?></th>
                    <td><?= h($viccertificate->buildingtype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Constructiontype') ?></th>
                    <td><?= h($viccertificate->constructiontype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Buildingclass') ?></th>
                    <td><?= h($viccertificate->buildingclass) ?></td>
                </tr>
                <tr>
                    <th><?= __('Workrelatingto') ?></th>
                    <td><?= h($viccertificate->workrelatingto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Drawingsproducedby') ?></th>
                    <td><?= h($viccertificate->drawingsproducedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Documentsproduced') ?></th>
                    <td><?= $viccertificate->has('documentsproduced') ? $this->Html->link($viccertificate->documentsproduced->id, ['controller' => 'Documentsproduceds', 'action' => 'view', $viccertificate->documentsproduced->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Documentscertified') ?></th>
                    <td><?= $viccertificate->has('documentscertified') ? $this->Html->link($viccertificate->documentscertified->id, ['controller' => 'Documentscertifieds', 'action' => 'view', $viccertificate->documentscertified->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Prepared') ?></th>
                    <td><?= h($viccertificate->prepared) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($viccertificate->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numberofstorey') ?></th>
                    <td><?= $this->Number->format($viccertificate->numberofstorey) ?></td>
                </tr>
                <tr>
                    <th><?= __('Riseinstory') ?></th>
                    <td><?= $this->Number->format($viccertificate->riseinstory) ?></td>
                </tr>
                <tr>
                    <th><?= __('Effectiveheight') ?></th>
                    <td><?= $this->Number->format($viccertificate->effectiveheight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateofissue') ?></th>
                    <td><?= h($viccertificate->dateofissue) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Performancereq') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($viccertificate->performancereq)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Performancesolution') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($viccertificate->performancesolution)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Designstandards') ?></h4>
                <?php if (!empty($viccertificate->designstandards)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Designcode') ?></th>
                            <th><?= __('Designdesc') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($viccertificate->designstandards as $designstandards) : ?>
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
