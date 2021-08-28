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
                    <th><?= __('Guarantor') ?></th>
                    <td><?= h($feeproposal->guarantor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($feeproposal->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fixedfee') ?></th>
                    <td><?= $this->Number->format($feeproposal->fixedfee) ?></td>
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
                    <th><?= __('Totalgst') ?></th>
                    <td><?= $this->Number->format($feeproposal->totalgst) ?></td>
                </tr>
                <tr>
                    <th><?= __('Grandtotal') ?></th>
                    <td><?= $this->Number->format($feeproposal->grandtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paywithinday') ?></th>
                    <td><?= $this->Number->format($feeproposal->paywithinday) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Scopeofservice') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($feeproposal->scopeofservice)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Documentsprovided') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($feeproposal->documentsprovided)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Feebreakdown') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($feeproposal->feebreakdown)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Invoices') ?></h4>
                <?php if (!empty($feeproposal->invoices)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Feeproposal Id') ?></th>
                            <th><?= __('Datecreated') ?></th>
                            <th><?= __('Invdesc') ?></th>
                            <th><?= __('Completedpercentage') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Totalgst') ?></th>
                            <th><?= __('Grandtotal') ?></th>
                            <th><?= __('Paywithinday') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($feeproposal->invoices as $invoices) : ?>
                        <tr>
                            <td><?= h($invoices->id) ?></td>
                            <td><?= h($invoices->project_id) ?></td>
                            <td><?= h($invoices->feeproposal_id) ?></td>
                            <td><?= h($invoices->datecreated) ?></td>
                            <td><?= h($invoices->invdesc) ?></td>
                            <td><?= h($invoices->completedpercentage) ?></td>
                            <td><?= h($invoices->total) ?></td>
                            <td><?= h($invoices->totalgst) ?></td>
                            <td><?= h($invoices->grandtotal) ?></td>
                            <td><?= h($invoices->paywithinday) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Invoices', 'action' => 'view', $invoices->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invoices', 'action' => 'delete', $invoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoices->id)]) ?>
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
