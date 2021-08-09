<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientcompany $clientcompany
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Clientcompany'), ['action' => 'edit', $clientcompany->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Clientcompany'), ['action' => 'delete', $clientcompany->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientcompany->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clientcompanys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Clientcompany'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientcompanys view content">
            <h3><?= h($clientcompany->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Companyname') ?></th>
                    <td><?= h($clientcompany->companyname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($clientcompany->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($clientcompany->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Clients') ?></h4>
                <?php if (!empty($clientcompany->clients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Firstname') ?></th>
                            <th><?= __('Lastname') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phonenumber') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Clientcompany Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($clientcompany->clients as $clients) : ?>
                        <tr>
                            <td><?= h($clients->id) ?></td>
                            <td><?= h($clients->firstname) ?></td>
                            <td><?= h($clients->lastname) ?></td>
                            <td><?= h($clients->email) ?></td>
                            <td><?= h($clients->phonenumber) ?></td>
                            <td><?= h($clients->position) ?></td>
                            <td><?= h($clients->clientcompany_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Clients', 'action' => 'view', $clients->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Clients', 'action' => 'edit', $clients->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clients', 'action' => 'delete', $clients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clients->id)]) ?>
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
