<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $associates
 */
?>


<?php 

$labels =  array();
for($i=1; $i <= 100; $i++){
$concat = "associates-ids-". $i; 
array_push($labels, $concat);
}

?>

<style>
<?php 
for($i=1; $i <= 100; $i++){ ?>
label[for=<?php echo $labels[$i-1] ?>]{
    font-size:small;
    margin: 0px;
    font-weight: normal;
}
<?php } ?>
</style>



<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'projects.edit');
$session->write('projects_id',$project->id);
debug($session->read('previous_url'));?>
<style>
    select[multiple="multiple"] { height:15rem;}
    .error-message {color:red;}

    .control_left{float:left;width: 55%}
    .control_right{float:right; width: 45%}/* incase you have applied some styles related to width*/
</style>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $project->id],
                ['confirm' => __('Are you sure you want to delete project "{0}"?', $project->projectname), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Project'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projects form content">
            <?= $this->Form->create($project) ?>
            <fieldset>
                <legend><?= __('Edit Project') ?></legend>
                <?php
                    echo $this->Form->control('msnumber', ['label'=>"MS Code"]);
                    echo $this->Form->control('projectname', ['label'=>"Project Name"]);
                    echo $this->Form->control('streetname', ['label'=>"Street Name"]);
                ?>
                <div class="control_left">
                    <?php
                    echo $this->Form->control('postcode', array('label'=>"Postcode", 'style'=>'width:82%; '));
                    ?>
                </div>
                <div class="control_right">
                    <?php
                    $states = ['VIC'=>'VIC','NSW'=>'NSW','QLD'=>'QLD','SA'=>'SA', 'TAS'=>'TAS','WA'=>'WA', 'NT'=>'NT'];
                    echo $this->Form->control('state', array('label'=>"State", 'options' => $states, 'empty' => false, 'style'=>'width:100%; '));
                    ?>
                </div>
                <div class="control_left">
                    <?php
                    $phases = ['Proposal'=>'Proposal','Conceptual'=>'Conceptual','Design'=>'Design', 'Construction'=>'Construction','Completion'=>'Completion'];
                    echo $this->Form->control('phase', ['label'=>"Phase", 'options' => $phases, 'empty' => false, 'style'=>'width:82%']);
                    ?>
                </div>
                <div class="control_right">
                    <?php
                    echo $this->Form->control('duedate', ['label'=>"Due Date", 'empty' => true, 'style'=>'width:100%']);
                    ?>
                </div>
                <?php
                    echo $this->Form->control('projdesc', ['label'=>"Project Description"]);
                    //echo $this->Html->link(__('Add New Client'), ['action' => '../clients/add'], ['class' => 'button float-right']);
                    echo $this->Form->control('client_id', ['label'=>"Client", 'options' => $clients, 'empty' => true]);
                    //echo $this->Html->link(__('Add New Associate'), ['action' => '../associates/add'], ['class' => 'button float-right']);
                    echo $this->Form->control('associates._ids', ['label'=>"Associate (hold 'ctrl' when selecting more than one)", 'options' => $associates,'multiple'=>'checkbox']);

                    $invoiceclientnameoptions=[];
                      for($associate=0; $associate<count($project['associates']); $associate++) {
                        $associatefullname=$project['associates'][$associate]['firstname'].' '.$project['associates'][$associate]['lastname'];
                        $invoiceclientnameoptions+= array($associatefullname=>$associatefullname);
                      }

                      debug($invoiceclientnameoptions);
                    echo $this->Form->control('invoiceclientname', ['label'=>"Project Client Name: (For Invoicing Purpose)", 'options' => $invoiceclientnameoptions, 'empty' => true]);
                    ?>


            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
