<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Client'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients view content">
            <h3><?= h($client->firstname) ?> <?= h($client->lastname) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($client->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($client->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($client->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($client->phonenumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Position') ?></th>
                    <td><?= h($client->position) ?></td>
                </tr>
                <tr>
                    <th><?= $this->Html->link('Company','/companys/index') ?></th>
                    <td><?= $client->has('company') ? $this->Html->link($client->company->companyname, ['controller' => 'Companys', 'action' => 'view', $client->company->id]) : '' ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= $this->Html->link('Related Projects','/projects/index') ?></h4>
                <?php if (!empty($client->projects)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('MS Number') ?></th>
                            <th><?= __('Projectname') ?></th>
                            <th><?= __('Streetname') ?></th>
                            <th><?= __('Suburb') ?></th>
                            <th><?= __('Postcode') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Phase') ?></th>
                            <th><?= __('Duedate') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->projects as $projects) : ?>
                        <tr>
                            <td><?= h($projects->msnumber) ? $this->Html->link($projects->msnumber, ['controller' => 'Projects', 'action' => 'view', $projects->id]) : '' ?></td>
                            <td><?= h($projects->projectname) ? $this->Html->link($projects->projectname, ['controller' => 'Projects', 'action' => 'view', $projects->id]) : '' ?></td>
                            <td><?= h($projects->streetname) ?></td>
                            <td><?= h($projects->suburb) ?></td>
                            <td><?= h($projects->postcode) ?></td>
                            <td><?= h($projects->state) ?></td>
                            <td><?= h($projects->phase) ?></td>
                            <td><?= h($projects->duedate) ?></td>
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
