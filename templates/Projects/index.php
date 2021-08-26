<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<?php session_start();
    $session = $this->request->getSession();
    $session->write('previous_url', $session->read('url'));
    $session->write('url', 'projects.index');
    debug($session->read('previous_url')); ?>

<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake','drawer','project']) ?>

<div class="projects index content">
    <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Projects') ?></h3>

    <!--     Search function-->
    <table> 
        <th class="searchbar"><h4 class="searchtitle"><?= ('Search') ?></h4></th>
        <th><?= $this->Form->create(null,['type'=>'get']) ?><?= $this->Form->control('key',['label'=>'','value'=>$this->request->getQuery('key')]) ?></th>
        <th class="submitbox"><?= $this->Form->submit() ?></th>
        <th class="clearbutton"><?= $this->Html->link(('Clear'), ['action' => 'index'], ['class' => 'button']) ?><?= $this->Form->end() ?></th>
    </table>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('msnumber', ['label'=>"MS Code"]) ?></th>
                    <th><?= $this->Paginator->sort('projectname', ['label'=>"Project Name"]) ?></th>
                    <th><?= $this->Paginator->sort('street', ['label'=>"Street"]) ?></th>
                    <th><?= $this->Paginator->sort('suburb', ['label'=>"Suburb"]) ?></th>
                    <th><?= $this->Paginator->sort('postcode', ['label'=>"Postcode"]) ?></th>
                    <th><?= $this->Paginator->sort('state', ['label'=>"State"]) ?></th>
                    <th><?= $this->Paginator->sort('phase', ['label'=>"Phase"]) ?></th>
                    <th><?= $this->Paginator->sort('duedate', ['label'=>"Due Date"]) ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?= $this->Html->link($project->msnumber, ['action' => 'view', $project->id]) ?></td>
                    <td><?= $this->Html->link($project->projectname, ['action' => 'view', $project->id]) ?></td>
                    <td><?= h($project->streetname) ?></td>
                    <td><?= h($project->suburb) ?></td>
                    <td><?= h($project->postcode) ?></td>
                    <td><?= h($project->state) ?></td>
                    <td><?= h($project->phase) ?></td>
                    <td><?= h($project->duedate) ?></td>
                    <td><?= $project->has('client') ? $this->Html->link($project->client->full_name, ['controller' => 'Clients', 'action' => 'view', $project->client->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete project "{0}"?', $project->projectname)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
