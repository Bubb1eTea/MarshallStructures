<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 * @var string[]|\Cake\Collection\CollectionInterface $feeproposals
 */
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'invoices.edit');
$session->write('invoices_id',$invoice->id);
debug($session->read('previous_url'));?>
<style>
    .error-message {color:red;}
</style>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete Invoice'),
                ['action' => 'delete', $invoice->id],
                ['confirm' => __('Are you sure you want to delete invoice #{0} for project '.$invoice->project->msnumber.'?', $invoice->invoicenum), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Invoices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="invoices form content">
            <?= $this->Form->create($invoice) ?>
            <fieldset>
                <legend><?= __('Add Invoice') ?></legend>
                <?php
                //echo $this->Html->link(__('Add New Project'), ['action' => '../projects/add'], ['class' => 'button float-right']);
                echo $this->Form->control('project_id', ['options' => $projects,'empty' =>['*'=>'SELECT...']]);
                echo $this->Form->control('invoicenum', ['label'=>'Invoice Number']);
                echo $this->Html->link(__('Add a Fee Proposal'), ['action' => '../feeproposals/add'], ['class' => 'button float-right', 'target' => '_blank']);
                echo $this->Form->control('feeproposal_id', ['options' => $feeproposals, 'label'=>"Fee Proposal", 'empty'=>true]);
                echo $this->Form->control('datecreated', ['label'=>"Date Created"]);
                echo $this->Form->control('invdesc', ['label'=>"Invoice Description"]);
                echo $this->Form->control('completedpercentage', ['label'=>"Completed Percentage", 'placeholder' => '%', 'type' => "number"]);
                echo $this->Form->control('feeproposaltotal', ['label'=>"Fee Proposal Total"]);
                echo $this->Form->control('total', ['label'=>"Subtotal"]);
                echo $this->Form->control('totalgst', ['label'=>"Total GST"]);
                echo $this->Form->control('grandtotal', ['label'=>"Grand Total"]);
                $days = ['7'=>'7 days','30'=>'30 days'];
                echo $this->Form->control('paywithinday',['label' =>"Pay within how many days?",'options' => $days, 'empty' => false]);
                ?>
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

                    document.getElementById('project-id').addEventListener('change', function(){
                        var projectid = $('#project-id').val();
                        var urlnew = "<?= $this->Url->build(['controller' => 'Invoices', 'action' => 'test']) ?>"+'/'+projectid;
                        var urlnew1 = "<?= $this->Url->build(['controller' => 'Invoices', 'action' => 'feeproposalnum']) ?>"+'/'+projectid;
                        var csrfToken = $('meta[name="csrfToken"]').attr('content');

                        if(projectid==='*'){
                            document.getElementById('invoicenum').value='' ;
                            document.getElementById('feeproposal-id').innerHTML = "";

                        }
                        else {
                            $.ajax({
                                type: 'get',
                                url: urlnew,
                                datatype: 'json',
                                headers: {'X-CSRF-TOKEN': csrfToken},
                                success: function (result) {

                                    var invoiceNum = parseInt(result) + 1;
                                    console.log(invoiceNum);
                                    if (result) {
                                        document.getElementById('invoicenum').value = invoiceNum;
                                    } else {
                                        document.getElementById('invoicenum').value = 1;
                                    }

                                },
                                error: function (result) {
                                    //  console.log(result);
                                }
                            });

                            $.ajax({
                                type: 'get',
                                url: urlnew1,
                                datatype: 'json',
                                headers: {'X-CSRF-TOKEN': csrfToken},
                                success: function (result) {

                                    if (result) {
                                        document.getElementById('feeproposal-id').innerHTML = "";
                                        $jsonresult = JSON.parse(result);
                                        var listItems = "";
                                        if ($jsonresult.length === 0) {
                                            listItems += '<option disabled selected value>' + "NO FEE PROPOSALS FOR THIS PROJECT." + '</option>';
                                        } else {
                                            listItems += '<option value=empty>' + "SELECT..." + '</option>';

                                            for (i = 0; i < $jsonresult.length; i++) {
                                                listItems += '<option value="' + $jsonresult[i]['id'] + '">' + $jsonresult[i]['feeproposalnum'] + '</option>';
                                            }
                                        }
                                        $('#feeproposal-id').html(listItems);
                                    }

                                },
                                error: function (result) {
                                    //  console.log(result);
                                }
                            });
                        }
                        /*
                       $.ajax({
                           type: 'get',
                           url: urlnew,
                           datatype: 'json',
                           headers:{'X-CSRF-Token':<?= json_encode($this->request->getParam('_csrfToken')) ?>},
                             success: function (result) {
                              console.log(json.parse(result));
                            }


                        });
                        */
                    });
                });
            </script>
        </div>
    </div>
</div>
