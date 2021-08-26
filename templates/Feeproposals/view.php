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
            <?= $this->Html->link(__('Edit Feeproposal'), ['action' => 'edit', $feeproposal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Feeproposal'), ['action' => 'delete', $feeproposal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feeproposal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Feeproposals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Feeproposal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feeproposals view content">
            <h3><?= h($feeproposal->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $feeproposal->has('project') ? $this->Html->link($feeproposal->project->projectname, ['controller' => 'Projects', 'action' => 'view', $feeproposal->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($feeproposal->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Id') ?></th>
                    <td><?= $this->Number->format($feeproposal->service_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Document Id') ?></th>
                    <td><?= $this->Number->format($feeproposal->document_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fee') ?></th>
                    <td><?= $this->Number->format($feeproposal->fee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hourlyrate') ?></th>
                    <td><?= $this->Number->format($feeproposal->hourlyrate) ?></td>
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
                    <th><?= __('TotalGST') ?></th>
                    <td><?= $this->Number->format($feeproposal->totalGST) ?></td>
                </tr>
                <tr>
                    <th><?= __('Grandtotal') ?></th>
                    <td><?= $this->Number->format($feeproposal->grandtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Feebrokendown Id') ?></th>
                    <td><?= $this->Number->format($feeproposal->feebrokendown_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paywithinday') ?></th>
                    <td><?= $this->Number->format($feeproposal->paywithinday) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datecreated') ?></th>
                    <td><?= h($feeproposal->datecreated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastmodified') ?></th>
                    <td><?= h($feeproposal->lastmodified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guarantor') ?></th>
                    <td><?= $feeproposal->guarantor ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
