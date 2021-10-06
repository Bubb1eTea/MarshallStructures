<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feeproposal $feeproposal
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<?php debug($feeproposal);?>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>-->

<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'feeproposals.edit');
$session->write('feeproposals_id',$feeproposal->id);
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
            <?= $this->Form->postLink(__('Delete Fee Proposal'), ['action' => 'delete', $feeproposal->id], ['confirm' => __('Are you sure you want to delete fee proposal #{0} for project '.$feeproposal->project->msnumber.'?', $feeproposal->feeproposalnum)]) ?>
            <?= $this->Html->link(__('List Fee Proposals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feeproposals form content">
            <?= $this->Form->create($feeproposal) ?>
            <fieldset>
                <legend><?= __('Edit Fee Proposal #'.$feeproposal->feeproposalnum.' for project '.$feeproposal->project->msnumber) ?></legend>
                <!-- echo $this->Form->control('feeproposalnum', ['label'=>"Fee Proposal Number"]); -->
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
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>

            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
            <?php debug($projects)?>
            <script type="text/javascript">
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

                    document.getElementById('project-id').addEventListener('change', function(){
                        var projectid = $('#project-id').val();
                        var urlnew = "<?= $this->Url->build(['controller' => 'Feeproposals', 'action' => 'test']) ?>"+'/'+projectid;
                        var csrfToken = $('meta[name="csrfToken"]').attr('content');

                        $.ajax({
                            type: 'get',
                            url: urlnew,
                            datatype: 'json',
                            headers: {  'X-CSRF-TOKEN': csrfToken   },
                            success: function (result) {

                                var feeProposalNum=parseInt(result)+1;
                                console.log(feeProposalNum);
                                if(result)
                                {
                                    document.getElementById('feeproposalnum').value=feeProposalNum ;
                                }
                                else
                                {
                                    document.getElementById('feeproposalnum').value=1 ;
                                }

                            },
                            error: function (result) {
                                //  console.log(result);
                            }
                        });
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
