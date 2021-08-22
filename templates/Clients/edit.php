<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 * @var string[]|\Cake\Collection\CollectionInterface $companys
 */
?>
<?php session_start();
$_SESSION['previous_url']=$_SESSION['url'];
$_SESSION['url']='clients.edit';
$_SESSION['clients_id']=$client->id;?>
<style>
    .error-message {color:red;}
</style>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $client->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Client'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Edit Client') ?></legend>
                <?php
                    echo $this->Form->control('firstname', ['label'=>"First Name"]);
                    echo $this->Form->control('lastname', ['label'=>"Last Name"]);
                    echo $this->Form->control('email', ['label'=>"Email"]);
                    echo $this->Form->control('phonenumber', ['label'=>"Phone Number"]);
                    echo $this->Form->control('position', ['label'=>"Position"]);
                    echo $this->Html->link(__('Add New Company'), ['action' => '../companys/add'], ['class' => 'button float-right']);
                    echo $this->Form->control('company_id', ['options' => $companys, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
