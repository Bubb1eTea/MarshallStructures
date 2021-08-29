<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feeproposal $feeproposal
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'feeproposals.add');
debug($session->read('previous_url')); ?>
<style>
    .error-message {color:red;}
</style>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Fee Proposals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feeproposals form content">
            <?= $this->Form->create($feeproposal) ?>
            <fieldset>
                <legend><?= __('Add Fee Proposal') ?></legend>
                <?php
                    echo $this->Html->link(__('Add New Project'), ['action' => '../projects/add'], ['class' => 'button float-right']);
                    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]);
                    echo $this->Form->control('guarantor',['label' =>"Guarantor (leave blank if none)"]);
                    echo $this->Form->control('scopeofservice',['label' =>"Scope of Service (provide a list)"]);
                    echo $this->Form->control('documentsprovided',['label' =>"Documents Provided (provide a list)"]);
                    echo $this->Form->control('feebreakdown', ['label' =>"Fee Breakdown (provide a list)"]);
                    echo $this->Form->control('fixedfee', ['label' =>"Fixed Fee"]);
                    echo $this->Form->control('hourlyrate', ['label' =>"Hourly Rate"]);
                    echo $this->Form->control('disbursement',['label' =>"Disbursement"]);
                    echo $this->Form->control('total',['label' =>"Subtotal"]);
                    echo $this->Form->control('totalgst',['label' =>"Total GST"]);
                    echo $this->Form->control('grandtotal', ['label' =>"Grand Total"]);
                    $days = ['7'=>'7','30'=>'30'];
                    echo $this->Form->control('paywithinday', ['label' =>"Pay within how many days?",'options' => $days, 'empty' => false]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
