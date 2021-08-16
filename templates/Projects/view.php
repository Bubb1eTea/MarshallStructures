<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Project'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projects view content">
            <h3><?= h($project->projectname) ?></h3>
            <table>
                <tr>
                    <th><?= __('Project ID') ?></th>
                    <td><?= h($project->msnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project Name') ?></th>
                    <td><?= h($project->projectname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Name') ?></th>
                    <td><?= h($project->streetname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suburb') ?></th>
                    <td><?= h($project->suburb) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postcode') ?></th>
                    <td><?= h($project->postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($project->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phase') ?></th>
                    <td><?= h($project->phase) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $project->has('client') ? $this->Html->link($project->client->full_name, ['controller' => 'clients', 'action' => 'view', $project->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Due Date') ?></th>
                    <td><?= h($project->duedate) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Project Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($project->projdesc)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= $this->Html->link('Related Associates','/associates/index') ?></h4> 
                <?php if (!empty($project->associates)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Role') ?></th>
                            <th><?= __('Company') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->associates as $associates) : ?>
                        <tr>
                            <td><?= h($associates->firstname) ? $this->Html->link($associates->firstname, ['controller' => 'associates', 'action' => 'view', $associates->id]) : '' ?></td>
                            <td><?= h($associates->lastname) ? $this->Html->link($associates->lastname, ['controller' => 'associates', 'action' => 'view', $associates->id]) : '' ?></td>
                            <td><?= h($associates->email) ?></td>
                            <td><?= h($associates->phonenumber) ?></td>
                            <td><?= h($associates->position) ?></td>
                            <td><?= h($associates->role) ?></td>
                            <td><?= h($associates->company_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Associates', 'action' => 'view', $associates->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Associates', 'action' => 'edit', $associates->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Associates', 'action' => 'delete', $associates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $associates->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= $this->Html->link('Related Fee Proposals','/feeproposals/index') ?></h4>
                <?php if (!empty($project->feeproposals)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Date Created') ?></th>
                            <th><?= __('Last Modified') ?></th>
                            <th><?= __('Proposal ID') ?></th>
                            <th><?= __('Fee') ?></th>
                            <th><?= __('Disbursement') ?></th>
                            <th><?= __('Total Amount') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->feeproposals as $feeproposals) : ?>
                        <tr>
                            <td><?= h($feeproposals->datecreated) ?></td>
                            <td><?= h($feeproposals->lastmodified) ?></td>
                            <td><?= h($feeproposals->id) ? $this->Html->link($feeproposals->id, ['controller' => 'feeproposals', 'action' => 'view', $feeproposals->id]) : '' ?></td>
                            <td><?= h($feeproposals->fee) ?></td>
                            <td><?= h($feeproposals->disbursement) ?></td>
                            <td><?= h($feeproposals->total) ?></td>
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
            <div class="related">
                <h4><?= $this->Html->link('Related Invoices','/invoices/index') ?></h4>
                <?php if (!empty($project->invoices)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Date Created') ?></th>
                            <th><?= __('Invoice ID') ?></th>
                            <th><?= __('Paid Percentage') ?></th>
                            <th><?= __('Subtotal') ?></th>
                            <th><?= __('Sales Tax') ?></th>
                            <th><?= __('Total Amount') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->invoices as $invoices) : ?>
                        <tr>
                            <td><?= h($invoices->datecreated) ?></td>
                            <td><?= h($invoices->id) ? $this->Html->link($invoices->id, ['controller' => 'invoices', 'action' => 'view', $invoices->id]) : '' ?></td>
                            <td><?= h($invoices->completepercentage) ?></td>
                            <td><?= h($invoices->subtotal) ?></td>
                            <td><?= h($invoices->saletax) ?></td>
                            <td><?= h($invoices->totalamount) ?></td>
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
