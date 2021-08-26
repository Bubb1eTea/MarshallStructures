<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Companys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Company'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companys view content">
            <h3><?= h($company->companyname) ?></h3>
            <table>
                <tr>
                    <th><?= __('Companyname') ?></th>
                    <td><?= h($company->companyname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($company->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($company->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Streetname') ?></th>
                    <td><?= h($company->streetname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suburb') ?></th>
                    <td><?= h($company->suburb) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postcode') ?></th>
                    <td><?= h($company->postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($company->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phonenumber') ?></th>
                    <td><?= h($company->phonenumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($company->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Associates') ?></h4>
                <?php if (!empty($company->associates)) : ?>
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
                            <th><?= __('Company Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($company->associates as $associates) : ?>
                        <tr>
                            <td><?= h($associates->id) ?></td>
                            <td><?= h($associates->firstname) ?></td>
                            <td><?= h($associates->lastname) ?></td>
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
                <h4><?= __('Related Clients') ?></h4>
                <?php if (!empty($company->clients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Firstname') ?></th>
                            <th><?= __('Lastname') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phonenumber') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Company Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($company->clients as $clients) : ?>
                        <tr>
                            <td><?= h($clients->id) ?></td>
                            <td><?= h($clients->firstname) ?></td>
                            <td><?= h($clients->lastname) ?></td>
                            <td><?= h($clients->email) ?></td>
                            <td><?= h($clients->phonenumber) ?></td>
                            <td><?= h($clients->position) ?></td>
                            <td><?= h($clients->company_id) ?></td>
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
