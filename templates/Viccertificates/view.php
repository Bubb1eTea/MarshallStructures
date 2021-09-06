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
                    <th><?= __('VIC Regulation ID') ?></th>
                    <td><?= $this->Number->format($viccertificate->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Modified') ?></th>
                    <td><?= date('D d/m/y h:m A',strtotime($viccertificate->lastmodified)) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project Name') ?></th>
                    <td><?= $viccertificate->has('project') ? $this->Html->link($viccertificate->project->projectname, ['controller' => 'Projects', 'action' => 'view', $viccertificate->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Company Name') ?></th>
                    <td><?= $viccertificate->has('company') ? $this->Html->link($viccertificate->company->companyname, ['controller' => 'Companys', 'action' => 'view', $viccertificate->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Building Type') ?></th>
                    <td><?= h($viccertificate->buildingtype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date of Issue') ?></th>
                    <td><?= date('D d/m/y h:m A', strtotime($viccertificate->dateofissue)) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Design Standards') ?></h4>
                <?php if (!empty($viccertificate->designstandards)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Design Code') ?></th>
                            <th><?= __('Design Description') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($viccertificate->designstandards as $designstandards) : ?>
                        <tr>
                            <td><?= h($designstandards->designcode) ?></td>
                            <td><?= h($designstandards->designdesc) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Designstandards', 'action' => 'view', $designstandards->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Designstandards', 'action' => 'edit', $designstandards->id]) ?>
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
