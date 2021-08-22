<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $invoice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Invoice'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invoices form content">
            <?= $this->Form->create($invoice) ?>
            <fieldset>
                <legend><?= __('Edit Invoice') ?></legend>
                <?php
                    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]);
                    echo $this->Form->control('completepercentage', ['label' =>"Paid Percentage"]);
                    echo $this->Form->control('subtotal', ['label' =>"Subtotal"]);
                    echo $this->Form->control('saletax', ['label' =>"Sales Tax"]);
                    echo $this->Form->control('totalamount', ['label' =>"Total Amount"]);
                    echo $this->Form->control('invdesc', ['label' =>"Invoice Description"]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>

            <script>
                $(document).ready(function() {
                    $('#subtotal').keyup(function(ev) {
                        var sub_total = parseFloat($('#subtotal').val());
                        var sale_tax = parseFloat(sub_total * 0.1).toFixed(2);
                        var divobj = document.getElementById('saletax');
                        divobj.value = sale_tax;
                        
                        var total_amount = (parseFloat(sub_total) + parseFloat(sale_tax)).toFixed(2);
                        var divobj = document.getElementById('totalamount');
                        divobj.value = total_amount;
                    });
                });
            </script>
        </div>
    </div>
</div>
