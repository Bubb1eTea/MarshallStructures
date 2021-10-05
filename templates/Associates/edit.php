<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Associate $associate
 * @var string[]|\Cake\Collection\CollectionInterface $associatecompanys
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>

<?php 

$labels =  array();
for($i=1; $i <= 100; $i++){
$concat = "projects-ids-". $i; 
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
$session->write('url', 'associates.edit');
$session->write('associates_id',$associate->id);
debug($session->read('previous_url'));?>
<style>
    select[multiple="multiple"] { height:15rem;}
    .error-message {color:red;}
</style>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $associate->id],
                ['confirm' => __('Are you sure you want to delete associate "{0}"?', $associate->full_name), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Associate'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="associates form content">
            <?= $this->Form->create($associate) ?>
            <fieldset>
                <legend><?= __('Edit Associate') ?></legend>
                <?php
                    echo $this->Form->control('firstname', ['label'=>"First Name"]);
                    echo $this->Form->control('lastname', ['label'=>"Last Name"]);
                    echo $this->Form->control('email', ['label'=>"Email"]);
                    echo $this->Form->control('phonenumber', ['label'=>"Phone Number"]);
                    //echo $this->Html->link(__('Add New Company'), ['action' => '../companys/add'], ['class' => 'button float-right']);
                    echo $this->Form->control('company_id', ['label'=>"Company", 'options' => $companys, 'empty' => true]);
                    echo $this->Form->control('position', ['label'=>"Position"]);
                    echo $this->Form->control('role', ['label'=>"Role"]);
                    //echo $this->Html->link(__('Add New Project'), ['action' => '../projects/add'], ['class' => 'button float-right']);
                    echo $this->Form->control('projects._ids', ['label'=>"Projects", 'options' => $projects,'multiple'=>'checkbox']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
