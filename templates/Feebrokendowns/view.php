<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feebrokendown $feebrokendown
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Feebrokendown'), ['action' => 'edit', $feebrokendown->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Feebrokendown'), ['action' => 'delete', $feebrokendown->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feebrokendown->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Feebrokendowns'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Feebrokendown'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feebrokendowns view content">
            <h3><?= h($feebrokendown->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Feebrokendowndesc') ?></th>
                    <td><?= h($feebrokendown->feebrokendowndesc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($feebrokendown->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($feebrokendown->amount) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Feeproposals') ?></h4>
                <?php if (!empty($feebrokendown->feeproposals)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Guarantor') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('Document Id') ?></th>
                            <th><?= __('Fee') ?></th>
                            <th><?= __('Hourlyrate') ?></th>
                            <th><?= __('Disbursement') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('TotalGST') ?></th>
                            <th><?= __('Grandtotal') ?></th>
                            <th><?= __('Feebrokendown Id') ?></th>
                            <th><?= __('Paywithinday') ?></th>
                            <th><?= __('Datecreated') ?></th>
                            <th><?= __('Lastmodified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($feebrokendown->feeproposals as $feeproposals) : ?>
                        <tr>
                            <td><?= h($feeproposals->id) ?></td>
                            <td><?= h($feeproposals->project_id) ?></td>
                            <td><?= h($feeproposals->guarantor) ?></td>
                            <td><?= h($feeproposals->service_id) ?></td>
                            <td><?= h($feeproposals->document_id) ?></td>
                            <td><?= h($feeproposals->fee) ?></td>
                            <td><?= h($feeproposals->hourlyrate) ?></td>
                            <td><?= h($feeproposals->disbursement) ?></td>
                            <td><?= h($feeproposals->total) ?></td>
                            <td><?= h($feeproposals->totalGST) ?></td>
                            <td><?= h($feeproposals->grandtotal) ?></td>
                            <td><?= h($feeproposals->feebrokendown_id) ?></td>
                            <td><?= h($feeproposals->paywithinday) ?></td>
                            <td><?= h($feeproposals->datecreated) ?></td>
                            <td><?= h($feeproposals->lastmodified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Feeproposals', 'action' => 'view', $feeproposals->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Feeproposals', 'action' => 'edit', $feeproposals->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Feeproposals', 'action' => 'delete', $feeproposals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feeproposals->id)]) ?>
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
