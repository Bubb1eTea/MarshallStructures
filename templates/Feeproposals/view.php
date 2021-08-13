<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feeproposal $feeproposal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Fee Proposal'), ['action' => 'edit', $feeproposal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Fee Proposal'), ['action' => 'delete', $feeproposal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feeproposal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Fee Proposal'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Fee Proposal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feeproposals view content">
            <h3><?= $feeproposal->has('project') ? $this->Html->link($feeproposal->project->projectname, ['controller' => 'Projects', 'action' => 'view', $feeproposal->project->id]) : '' ?></h3>
            <table>
                <tr>
                    <th><?= __('Project Name') ?></th>
                    <td><?= $feeproposal->has('project') ? $this->Html->link($feeproposal->project->projectname, ['controller' => 'Projects', 'action' => 'view', $feeproposal->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fee') ?></th>
                    <td><?= $this->Number->format($feeproposal->fee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Disbursement') ?></th>
                    <td><?= $this->Number->format($feeproposal->disbursement) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($feeproposal->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Created') ?></th>
                    <td><?= h($feeproposal->datecreated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Modified') ?></th>
                    <td><?= h($feeproposal->lastmodified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Proposal Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($feeproposal->proposaldesc)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
