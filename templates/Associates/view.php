<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Associate $associate
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'associates.view');
debug($session->read('previous_url')); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Associate'), ['action' => 'edit', $associate->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Associate'), ['action' => 'delete', $associate->id], ['confirm' => __('Are you sure you want to delete associate "{0}"?', $associate->full_name), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Associate'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Associate'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="associates view content">
            <h3><?= h($associate->firstname) ?>&nbsp<?= h($associate->lastname) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($associate->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($associate->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($associate->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($associate->phonenumber) ?></td>
                </tr>
                <tr>
                    <th><?= $this->Html->link('Company','/companys/index') ?></th>
                    <td><?= $associate->has('company') ? $this->Html->link($associate->company->companyname, ['controller' => 'Companys', 'action' => 'view', $associate->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= h($associate->position) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($associate->role) ?></td>
                </tr>
            </table>
            <div class="related">
                <?php if (!empty($associate->projects)) : ?>
                <h4><?= __('Related Projects') ?></h4>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('MS Code') ?></th>
                            <th><?= __('Project Name') ?></th>
                            <th><?= __('Street Name') ?></th>
                            <th><?= __('Suburb') ?></th>
                            <th><?= __('Postcode') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Phase') ?></th>
                            <th><?= __('Due Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($associate->projects as $projects) : ?>
                        <tr>
                            <td><?= h($projects->msnumber) ? $this->Html->link($projects->msnumber, ['controller' => 'Projects', 'action' => 'view', $projects->id]) : '' ?></td>
                            <td><?= h($projects->projectname) ? $this->Html->link($projects->projectname, ['controller' => 'Projects', 'action' => 'view', $projects->id]) : '' ?></td>
                            <td><?= h($projects->streetname) ?></td>
                            <td><?= h($projects->suburb) ?></td>
                            <td><?= h($projects->postcode) ?></td>
                            <td><?= h($projects->state) ?></td>
                            <td><?= h($projects->phase) ?></td>
                            <td><?= h($projects->duedate) ?></td>
                            <!--<td></*?= h($projects->client_id) ?*/></td>-->
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>
                                <?php // echo $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete project "{0}"?', $projects->project_display)]) ?>
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
