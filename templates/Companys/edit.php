<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<?php session_start();
$_SESSION['previous_url']=$_SESSION['url'];
$_SESSION['url']='companys.edit';?>
<style>
    .error-message {color:red;}
</style>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $company->id],
                ['confirm' => __('Are you sure you want to delete company "{0}"?', $company->companyname), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Company'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companys form content">
            <?= $this->Form->create($company) ?>
            <fieldset>
                <legend><?= __('Edit Company') ?></legend>
                <?php
                    echo $this->Form->control('companyname', ['label' =>"Company Name"]);
                    echo $this->Form->control('type', ['label' =>"Type"]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
