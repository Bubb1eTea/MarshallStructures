<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 * @var \Cake\Collection\CollectionInterface|string[] $feeproposals
 */
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>

<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'invoices.add');
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
            <?= $this->Html->link(__('List Invoices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invoices form content">
            <?= $this->Form->create($invoice) ?>
            <fieldset>
                <legend><?= __('Add Invoice') ?></legend>
                <div class="control_left">
                    <?php
                        //echo $this->Html->link(__('Add New Project'), ['action' => '../projects/add'], ['class' => 'button float-right']);
                        echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true, 'style'=>'width:82%']);
                    ?>
                </div>
                <div class="control_right">
                    <?php    echo $this->Html->link(__('View All Fee Proposals'), ['action' => '../feeproposals'], ['class' => 'button float-right', 'target' => '_blank']);?>
                    <?php    echo $this->Form->control('feeproposal_id', ['options' => $feeproposals, 'empty' => true, 'label'=>"Fee Proposal"]);?>
                </div>
                <?php
                    echo $this->Form->control('datecreated', ['label'=>"Date Created", 'style'=>'width:45.1%']);
                    echo $this->Form->control('invdesc', ['label'=>"Invoice Description"]);
                ?>
                <div class="control_left">
                    <?php    echo $this->Form->control('completedpercentage', ['label'=>"Completed Percentage", 'placeholder' => '%', 'type' => "number", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php    echo $this->Form->control('feeproposaltotal', ['label'=>"Fee Proposal Total"]);?>
                </div>
                <div class="control_left">
                    <?php    echo $this->Form->control('total', ['label'=>"Subtotal", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php    echo $this->Form->control('totalgst', ['label'=>"Total GST"]);?>
                </div>
                <div class="control_left">
                    <?php    echo $this->Form->control('grandtotal', ['label'=>"Grand Total", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php
                    $days = ['7'=>'7','30'=>'30'];
                    echo $this->Form->control('paywithinday',['label' =>"Pay within how many days?",'options' => $days, 'empty' => false]);
                    ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>

            <script>
                $(document).ready(function() {
                    $('input').keyup(function(ev) {
                        var completedpercentage = (parseFloat($('#completedpercentage').val())* 0.1) || 0;
                        var feeproposaltotal = (parseFloat($('#feeproposaltotal').val())* 0.1) || 0;
                        var total = (parseFloat(completedpercentage) * parseFloat(feeproposaltotal)).toFixed(2);

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
