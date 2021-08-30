<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feeproposal $feeproposal
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'feeproposals.view');
debug($session->read('previous_url')); ?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Fee Proposal'), ['action' => 'edit', $feeproposal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Fee Proposal'), ['action' => 'delete', $feeproposal->id], ['confirm' => __('Are you sure you want to delete fee proposal #{0}?', $feeproposal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Fee Proposals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Fee Proposal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feeproposals view content">
            <h3><?= 'Fee Proposal #'.($feeproposal->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('MS Code') ?></th>
                    <td><?=$feeproposal->has('project') ? $this->Html->link($feeproposal->project->msnumber, ['controller' => 'Projects', 'action' => 'view', $feeproposal->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Project Name') ?></th>
                    <td><?= $feeproposal->has('project') ? $this->Html->link($feeproposal->project->projectname, ['controller' => 'Projects', 'action' => 'view', $feeproposal->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Guarantor') ?></th>
                    <td><?= h($feeproposal->guarantor) ?></td>
                </tr>
            </table>
            <tr>
                <div class="text">
                    <strong><?= __('Scope of Service') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($feeproposal->scopeofservice)); ?>
                    </blockquote>
                </div>
            </tr>
            <tr>
                <div class="text">
                    <strong><?= __('Documents Provided') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($feeproposal->documentsprovided)); ?>
                    </blockquote>
                </div>
            </tr>
            <tr>
                <div class="text">
                    <strong><?= __('Fee Breakdown') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($feeproposal->feebreakdown)); ?>
                    </blockquote>
                </div>
            </tr>
            <table>
                </tr>
                <tr>
                    <th><?= __('Fixed Fee') ?></th>
                    <td><?= $this->Number->format($feeproposal->fixedfee, ['places' => 2, 'before' => '$']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hourly Rate') ?></th>
                    <td><?= $this->Number->format($feeproposal->hourlyrate, ['places' => 2, 'before' => '$']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Disbursement') ?></th>
                    <td><?= $this->Number->format($feeproposal->disbursement, ['places' => 2, 'before' => '$']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $this->Number->format($feeproposal->total, ['places' => 2, 'before' => '$']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total GST') ?></th>
                    <td><?= $this->Number->format($feeproposal->totalgst, ['places' => 2, 'before' => '$']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Grand Total') ?></th>
                    <td><?= $this->Number->format($feeproposal->grandtotal, ['places' => 2, 'before' => '$']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay within how many days?') ?></th>
                    <td><?= $this->Number->format($feeproposal->paywithinday) ?> days</td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Invoices') ?></h4>
                <?php if (!empty($feeproposal->invoices)) : ?>
                    <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Date Created') ?></th>
                            <th><?= __('Invoice ID') ?></th>
                            <th><?= __('Percentage') ?></th>
                            <th><?= __('Grand Total') ?></th>
                            <th><?= __('Date Due') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($feeproposal->invoices as $invoices) : ?>
                            <tr>
                                <td><?= h($invoices->datecreated) ?></td>
                                <td><?= h($invoices->id) ? $this->Html->link($invoices->id, ['controller' => 'invoices', 'action' => 'view', $invoices->id]) : '' ?></td>
                                <td><?= $this->Number->format($invoices->completedpercentage, ['after' => '%']) ?></td>
                                <td><?= $this->Number->format($invoices->grandtotal, ['places' => 2, 'before' => '$']) ?></td>
                                <td><?= date('d/m/y', strtotime($invoices->datecreated. ' + ' .$invoices->paywithinday.' days')) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Invoices', 'action' => 'view', $invoices->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->id]) ?>
                                    <?php // $this->Form->postLink(__('Delete'), ['controller' => 'Invoices', 'action' => 'delete', $invoices->id], ['confirm' => __('Are you sure you want to delete invoice #{0}?', $invoices->id)]) ?>
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
