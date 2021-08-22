<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Associate $associate
 * @var string[]|\Cake\Collection\CollectionInterface $associatecompanys
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<?php session_start();
$_SESSION['previous_url']=$_SESSION['url'];
$_SESSION['url']='associates.edit';
$_SESSION['associates_id']=$associate->id; ?>
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
                ['confirm' => __('Are you sure you want to delete # {0}?', $associate->id), 'class' => 'side-nav-item']
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
                    echo $this->Html->link(__('Add New Company'), ['action' => '../companys/add'], ['class' => 'button float-right']);
                    echo $this->Form->control('company_id', ['label'=>"Company", 'options' => $companys, 'empty' => true]);
                    echo $this->Form->control('position', ['label'=>"Position"]);
                    echo $this->Form->control('role', ['label'=>"Role"]);
                    echo $this->Html->link(__('Add New Project'), ['action' => '../projects/add'], ['class' => 'button float-right']);
                    echo $this->Form->control('projects._ids', ['label'=>"Projects", 'options' => $projects]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
