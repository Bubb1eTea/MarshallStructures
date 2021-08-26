<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="services view content">
            <h3><?= h($service->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Desc') ?></th>
                    <td><?= h($service->desc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($service->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Feeproposals') ?></h4>
                <?php if (!empty($service->feeproposals)) : ?>
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
                        <?php foreach ($service->feeproposals as $feeproposals) : ?>
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
