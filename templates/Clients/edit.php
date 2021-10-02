<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 * @var string[]|\Cake\Collection\CollectionInterface $companys
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'clients.edit');
$session->write('clients_id',$client->id);
debug($session->read('previous_url'));?>
<style>
    .error-message {color:red;}

    .control_left{float:left;width: 55%}
    .control_right{float:right; width: 45%}
</style>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('Are you sure you want to delete client "{0}"?', $client->full_name), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Client'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Edit Client') ?></legend>
                <div class="control_left">
                    <?php echo $this->Form->control('firstname', ['label'=>"First Name", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php echo $this->Form->control('lastname', ['label'=>"Last Name"]);?>
                </div>
                <div class="control_left">
                    <?php echo $this->Form->control('email', ['label'=>"Email", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php echo $this->Form->control('phonenumber', ['label'=>"Phone Number"]);?>
                </div>
                <div class="control_left">
                    <?php
                        //echo $this->Html->link(__('Add New Company'), ['action' => '../companys/add'], ['class' => 'button float-right']);
                        echo $this->Form->control('company_id', ['options' => $companys, 'empty' => true, 'style'=>'width:82%']);
                    ?>
                </div>
                <div class="control_right">
                    <?php echo $this->Form->control('position', ['label'=>"Position"]);?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
