<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentsproduced $documentsproduced
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Documentsproduced'), ['action' => 'edit', $documentsproduced->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Documentsproduced'), ['action' => 'delete', $documentsproduced->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentsproduced->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Documentsproduceds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Documentsproduced'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="documentsproduceds view content">
            <h3><?= h($documentsproduced->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Viccertificate') ?></th>
                    <td><?= $documentsproduced->has('viccertificate') ? $this->Html->link($documentsproduced->viccertificate->id, ['controller' => 'Viccertificates', 'action' => 'view', $documentsproduced->viccertificate->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($documentsproduced->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Documentno') ?></th>
                    <td><?= $this->Number->format($documentsproduced->documentno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Revision') ?></th>
                    <td><?= $this->Number->format($documentsproduced->revision) ?></td>
                </tr>
                <tr>
                    <th><?= __('Documentdate') ?></th>
                    <td><?= h($documentsproduced->documentdate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
