<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feeproposal $feeproposal
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 */
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>

<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'feeproposals.add');
debug($session->read('previous_url')); ?>
<style>
    .error-message {color:red;}

    .control_left{float:left;width: 55%}
    .control_right{float:right; width: 45%}
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
                <div class="control_left">
                    <?php
                        //echo $this->Html->link(__('Add New Project'), ['action' => '../projects/add'], ['class' => 'button float-right']);
                        echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true, 'style'=>'width:82%']);
                    ?>
                </div>
                <div class="control_right">
                    <?php    echo $this->Form->control('guarantor',['label' =>"Guarantor (leave blank if none)"]);?>
                </div>
                <?php    echo $this->Form->control('scopeofservice',['label' =>"Scope of Service (provide a list)"]);?>
                <?php    echo $this->Form->control('documentsprovided',['label' =>"Documents Provided (provide a list)"]);?>
                <div class="control_left">
                    <?php    echo $this->Form->control('fixedfee', ['label' =>"Fixed Fee", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php    echo $this->Form->control('hourlyrate', ['label' =>"Hourly Rate"]);?>
                </div>
                <div class="control_left">
                    <?php    echo $this->Form->control('disbursement',['label' =>"Disbursement", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php    echo $this->Form->control('total',['label' =>"Subtotal", array('readonly' => 'readonly')]);?>
                </div>
                <div class="control_left">
                    <?php    echo $this->Form->control('totalgst',['label' =>"Total GST", array('readonly' => 'readonly'), 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php    echo $this->Form->control('grandtotal', ['label' =>"Grand Total", array('readonly' => 'readonly')]);?>
                </div>
                <div class="control_left">
                    <?php
                        $days = ['7'=>'7','30'=>'30'];
                        echo $this->Form->control('paywithinday', ['label' =>"Pay within how many days?",'options' => $days, 'empty' => false, 'style'=>'width:82%']);
                    ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>

            <script>
                $(document).ready(function() {
                    $('input').keyup(function(ev) {
                        var fixedfee = parseFloat($('#fixedfee').val()) || 0;
                        var hourlyrate = parseFloat($('#hourlyrate').val())  || 0;
                        var disbursement = parseFloat($('#disbursement').val())  || 0;
                        var total = (parseFloat(fixedfee) + parseFloat(hourlyrate) + parseFloat(disbursement)).toFixed(2);

                        var divobj = document.getElementById('total');
                        divobj.value = total;

                        var totalgst = parseFloat(total * 0.1).toFixed(2);
                        var divobj = document.getElementById('totalgst');
                        divobj.value = totalgst;

                        var grandtotal = (parseFloat(total) + parseFloat(totalgst)).toFixed(2);
                        var divobj = document.getElementById('grandtotal');
                        divobj.value = grandtotal;
                    });
                });
            </script>
        </div>
    </div>
</div>
