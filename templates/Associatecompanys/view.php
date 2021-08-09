<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Associatecompany $associatecompany
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Associatecompany'), ['action' => 'edit', $associatecompany->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Associatecompany'), ['action' => 'delete', $associatecompany->id], ['confirm' => __('Are you sure you want to delete # {0}?', $associatecompany->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Associatecompanys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Associatecompany'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="associatecompanys view content">
            <h3><?= h($associatecompany->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Companyname') ?></th>
                    <td><?= h($associatecompany->companyname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($associatecompany->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($associatecompany->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Associates') ?></h4>
                <?php if (!empty($associatecompany->associates)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Firstname') ?></th>
                            <th><?= __('Lastname') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phonenumber') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Role') ?></th>
                            <th><?= __('Associatecompany Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($associatecompany->associates as $associates) : ?>
                        <tr>
                            <td><?= h($associates->id) ?></td>
                            <td><?= h($associates->firstname) ?></td>
                            <td><?= h($associates->lastname) ?></td>
                            <td><?= h($associates->email) ?></td>
                            <td><?= h($associates->phonenumber) ?></td>
                            <td><?= h($associates->position) ?></td>
                            <td><?= h($associates->role) ?></td>
                            <td><?= h($associates->associatecompany_id) ?></td>
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
        </div>
    </div>
</div>
