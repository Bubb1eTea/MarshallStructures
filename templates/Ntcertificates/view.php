<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ntcertificate $ntcertificate
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'ntcertificates.view');
debug($session->read('previous_url')); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit NT Certificate'), ['action' => 'edit', $ntcertificate->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete NT Certificate'), ['action' => 'delete', $ntcertificate->id], ['confirm' => __('Are you sure you want to delete NT Certificate #{0}?', $ntcertificate->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List NT Certificates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New NT Certificate'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ntcertificates view content">
            <h3>NT Certificate #<?= h($ntcertificate->id) ?> for <?= h($ntcertificate->project->projectname)?></h3>
            <table>
                <tr>
                    <th><?= __('NT Certificate ID') ?></th>
                    <td><?= $this->Number->format($ntcertificate->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Modified') ?></th>
                    <td><?= date('D d/m/y h:m A',strtotime($ntcertificate->lastmodified)) ?></td>
                </tr>
                <tr>
                    <th><?= __('Project Name') ?></th>
                    <td><?= $ntcertificate->has('project') ? $this->Html->link($ntcertificate->project->projectname, ['controller' => 'Projects', 'action' => 'view', $ntcertificate->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lot/Portion Number') ?></th>
                    <td><?= h($ntcertificate->lotportionnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($ntcertificate->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Town') ?></th>
                    <td><?= h($ntcertificate->townhundred) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company Name') ?></th>
                    <td><?= h($ntcertificate->compname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company NT Registration Number') ?></th>
                    <td><?= h($ntcertificate->compntregnum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date of Issue') ?></th>
                    <td><?= date('D d/m/y',strtotime($ntcertificate->date)) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Design Standards') ?></h4>
                <?php if (!empty($ntcertificate->designstandards)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Design Code') ?></th>
                            <th><?= __('Design Description') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ntcertificate->designstandards as $designstandards) : ?>
                        <tr>
                            <td><?= h($designstandards->designcode) ?></td>
                            <td><?= h($designstandards->designdesc) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Designstandards', 'action' => 'view', $designstandards->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Designstandards', 'action' => 'edit', $designstandards->id]) ?>
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
