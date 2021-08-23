<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'companys.view');
debug($session->read('previous_url')); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete company "{0}"?', $company->companyname), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Company'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Company'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companys view content">
            <h3><?= h($company->companyname) ?></h3>
            <table>
                <tr>
                    <th><?= __('Company Name') ?></th>
                    <td><?= h($company->companyname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($company->type) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Associates') ?></h4>
                <?php if (!empty($company->associates)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Position') ?></th>
                            <th><?= __('Role') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($company->associates as $associates) : ?>
                        <tr>
                            <td><?= h($associates->firstname) ? $this->Html->link($associates->firstname, ['controller' => 'associates', 'action' => 'view', $associates->id]) : '' ?></td>
                            <td><?= h($associates->lastname) ? $this->Html->link($associates->lastname, ['controller' => 'associates', 'action' => 'view', $associates->id]) : '' ?></td>
                            <td><?= h($associates->email) ?></td>
                            <td><?= h($associates->phonenumber) ?></td>
                            <td><?= h($associates->position) ?></td>
                            <td><?= h($associates->role) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Associates', 'action' => 'view', $associates->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Associates', 'action' => 'edit', $associates->id]) ?>
                                <?php // echo $this->Form->postLink(__('Delete'), ['controller' => 'Associates', 'action' => 'delete', $associates->id], ['confirm' => __('Are you sure you want to delete associate "{0}"?', $associates->full_name)]) ?>
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
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Position') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($company->clients as $clients) : ?>
                        <tr>
                            <td><?= h($clients->firstname) ? $this->Html->link($clients->firstname, ['controller' => 'clients', 'action' => 'view', $clients->id]) : '' ?></td>
                            <td><?= h($clients->lastname) ? $this->Html->link($clients->lastname, ['controller' => 'clients', 'action' => 'view', $clients->id]) : '' ?></td>
                            <td><?= h($clients->email) ?></td>
                            <td><?= h($clients->phonenumber) ?></td>
                            <td><?= h($clients->position) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Clients', 'action' => 'view', $clients->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Clients', 'action' => 'edit', $clients->id]) ?>
                                <?php // echo $this->Form->postLink(__('Delete'), ['controller' => 'Clients', 'action' => 'delete', $clients->id], ['confirm' => __('Are you sure you want to delete client "{0}"?', $clients->full_name)]) ?>
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
