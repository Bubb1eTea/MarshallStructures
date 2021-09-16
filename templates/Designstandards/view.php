<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Designstandard $designstandard
 */
?>

<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'designstandards.view');
debug($session->read('previous_url')); ?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Design Standard'), ['action' => 'edit', $designstandard->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Design Standard'), ['action' => 'delete', $designstandard->id], ['confirm' => __('Are you sure you want to delete design standard {0}?', $designstandard->designcode), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Design Standards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Design Standard'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="designstandards view content">
            <h3><?= h($designstandard->designcode) ?></h3>
            <table>
                <tr>
                    <th><?= __('Design Code') ?></th>
                    <td><?= h($designstandard->designcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Design Description') ?></th>
                    <td><?= h($designstandard->designdesc) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related NT Certificates') ?></h4>
                <?php if (!empty($designstandard->ntcertificates)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('NT Certificate ID') ?></th>
                            <th><?= __('Project Name') ?></th>
                            <th><?= __('Date of Issue') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($designstandard->ntcertificates as $ntcertificates) : ?>
                        <tr>
                            <td><?= h($ntcertificates->id) ?></td>
                            <td><?= h($projectname->first()['Projects']['projectname']) ?></td>
                            <td><?= date('D d/m/y',strtotime($ntcertificates->date)) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ntcertificates', 'action' => 'view', $ntcertificates->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ntcertificates', 'action' => 'edit', $ntcertificates->id]) ?>
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
