<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Associate $associate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Associate'), ['action' => 'edit', $associate->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Associate'), ['action' => 'delete', $associate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $associate->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Associates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Associate'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="associates view content">
            <h3><?= h($associate->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Firstname') ?></th>
                    <td><?= h($associate->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= h($associate->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($associate->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phonenumber') ?></th>
                    <td><?= h($associate->phonenumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= h($associate->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($associate->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= $associate->has('company') ? $this->Html->link($associate->company->id, ['controller' => 'Companys', 'action' => 'view', $associate->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($associate->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Projects') ?></h4>
                <?php if (!empty($associate->projects)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Msnumber') ?></th>
                            <th><?= __('Projectname') ?></th>
                            <th><?= __('Streetname') ?></th>
                            <th><?= __('Suburb') ?></th>
                            <th><?= __('Postcode') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Phase') ?></th>
                            <th><?= __('Duedate') ?></th>
                            <th><?= __('Projdesc') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($associate->projects as $projects) : ?>
                        <tr>
                            <td><?= h($projects->id) ?></td>
                            <td><?= h($projects->msnumber) ?></td>
                            <td><?= h($projects->projectname) ?></td>
                            <td><?= h($projects->streetname) ?></td>
                            <td><?= h($projects->suburb) ?></td>
                            <td><?= h($projects->postcode) ?></td>
                            <td><?= h($projects->state) ?></td>
                            <td><?= h($projects->phase) ?></td>
                            <td><?= h($projects->duedate) ?></td>
                            <td><?= h($projects->projdesc) ?></td>
                            <td><?= h($projects->client_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projects->id)]) ?>
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
