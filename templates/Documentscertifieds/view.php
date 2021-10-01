<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentscertified $documentscertified
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Documentscertified'), ['action' => 'edit', $documentscertified->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Documentscertified'), ['action' => 'delete', $documentscertified->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentscertified->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Documentscertifieds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Documentscertified'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="documentscertifieds view content">
            <h3><?= h($documentscertified->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($documentscertified->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preparedby') ?></th>
                    <td><?= h($documentscertified->preparedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($documentscertified->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Documentno') ?></th>
                    <td><?= $this->Number->format($documentscertified->documentno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numberofpage') ?></th>
                    <td><?= $this->Number->format($documentscertified->numberofpage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Documentdate') ?></th>
                    <td><?= h($documentscertified->documentdate) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Viccertificates') ?></h4>
                <?php if (!empty($documentscertified->viccertificates)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Company Id') ?></th>
                            <th><?= __('Buildingtype') ?></th>
                            <th><?= __('Numberofstorey') ?></th>
                            <th><?= __('Riseinstory') ?></th>
                            <th><?= __('Effectiveheight') ?></th>
                            <th><?= __('Constructiontype') ?></th>
                            <th><?= __('Buildingclass') ?></th>
                            <th><?= __('Workrelatingto') ?></th>
                            <th><?= __('Drawingsproducedby') ?></th>
                            <th><?= __('Documentsproduced Id') ?></th>
                            <th><?= __('Documentscertified Id') ?></th>
                            <th><?= __('Performancereq') ?></th>
                            <th><?= __('Performancesolution') ?></th>
                            <th><?= __('Prepared') ?></th>
                            <th><?= __('Dateofissue') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($documentscertified->viccertificates as $viccertificates) : ?>
                        <tr>
                            <td><?= h($viccertificates->id) ?></td>
                            <td><?= h($viccertificates->project_id) ?></td>
                            <td><?= h($viccertificates->company_id) ?></td>
                            <td><?= h($viccertificates->buildingtype) ?></td>
                            <td><?= h($viccertificates->numberofstorey) ?></td>
                            <td><?= h($viccertificates->riseinstory) ?></td>
                            <td><?= h($viccertificates->effectiveheight) ?></td>
                            <td><?= h($viccertificates->constructiontype) ?></td>
                            <td><?= h($viccertificates->buildingclass) ?></td>
                            <td><?= h($viccertificates->workrelatingto) ?></td>
                            <td><?= h($viccertificates->drawingsproducedby) ?></td>
                            <td><?= h($viccertificates->documentsproduced_id) ?></td>
                            <td><?= h($viccertificates->documentscertified_id) ?></td>
                            <td><?= h($viccertificates->performancereq) ?></td>
                            <td><?= h($viccertificates->performancesolution) ?></td>
                            <td><?= h($viccertificates->prepared) ?></td>
                            <td><?= h($viccertificates->dateofissue) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Viccertificates', 'action' => 'view', $viccertificates->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Viccertificates', 'action' => 'edit', $viccertificates->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Viccertificates', 'action' => 'delete', $viccertificates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $viccertificates->id)]) ?>
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
