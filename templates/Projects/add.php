<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 * @var \Cake\Collection\CollectionInterface|string[] $associates
 */
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>

<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'projects.add');
debug($session->read('previous_url')); ?>
<style>
    select[multiple="multiple"] { height:15rem;}
    .error-message {color: #ff0000;}
</style>


<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Project'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projects form content">
            <?= $this->Form->create($project) ?>
            <fieldset>
                <legend><?= __('Add Project') ?></legend>
                <?php
                    echo $this->Form->control('msnumber', ['label'=>"MS Code"]);
                    echo $this->Form->control('projectname', ['label'=>"Project Name"]);
                    echo $this->Form->control('streetname', ['label'=>"Street Name"]);
                    echo $this->Form->control('suburb', ['label'=>"Suburb"]);
                    echo $this->Form->control('postcode', ['label'=>"Postcode"]);
                    $states = ['VIC'=>'VIC','NSW'=>'NSW','QLD'=>'QLD','SA'=>'SA', 'TAS'=>'TAS','WA'=>'WA', 'NT'=>'NT'];
                    echo $this->Form->control('state', ['label'=>"State", 'options' => $states, 'empty' => false]);
                    $phases = ['Proposal'=>'Proposal','Conceptual'=>'Conceptual','Design'=>'Design', 'Construction'=>'Construction','Completion'=>'Completion'];
                    echo $this->Form->control('phase', ['label'=>"Phase", 'options' => $phases, 'empty' => false]);
                    echo $this->Form->control('duedate', ['label'=>"Due Date", 'empty' => true]);
                    echo $this->Form->control('projdesc', ['label'=>"Project Description"]);
                    //echo $this->Html->link(__('Add New Client'), ['action' => '../clients/add'], ['class' => 'button float-right']);
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    //echo $this->Html->link(__('Add New Associate'), ['action' => '../associates/add'], ['class' => 'button float-right']);
                    echo $this->Form->control('associates._ids', ['label'=>"Associate (hold 'ctrl' when selecting more than one)", 'options' => $associates, 'empty' => true]);
                    echo $this->Form->control('associate_id', ['label'=>"Associate (addressee of invoice)",'options' => $associates, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

