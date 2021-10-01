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
                    <th><?= __('Viccertificate') ?></th>
                    <td><?= $documentscertified->has('viccertificate') ? $this->Html->link($documentscertified->viccertificate->id, ['controller' => 'Viccertificates', 'action' => 'view', $documentscertified->viccertificate->id]) : '' ?></td>
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
        </div>
    </div>
</div>
