<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'companys.add');
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
            <?= $this->Html->link(__('List Companies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companys form content">
            <?= $this->Form->create($company) ?>
            <fieldset>
                <legend><?= __('Add Company') ?></legend>
                <div class="control_left">
                    <?php echo $this->Form->control('companyname', ['label' =>"Company Name", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php echo $this->Form->control('type', ['label' =>"Type"]);?>
                </div>
                <div class="control_left">
                    <?php echo $this->Form->control('email', ['label' =>"Email", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php echo $this->Form->control('phonenumber', ['label' =>"Phone Number"]);?>
                </div>
                <div class="control_left">
                    <?php echo $this->Form->control('streetname', ['label' =>"Street Name", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                <?php echo $this->Form->control('suburb', ['label' =>"Suburb"]);?>
                </div>
                <div class="control_left">
                <?php echo $this->Form->control('postcode', ['label' =>"Postcode", 'style'=>'width:82%']); ?>
                </div>
                <div class="control_right">
                <?php
                    $states = ['VIC'=>'VIC','NSW'=>'NSW','QLD'=>'QLD','SA'=>'SA', 'TAS'=>'TAS','WA'=>'WA', 'NT'=>'NT'];
                    echo $this->Form->control('state', ['label'=>"State", 'options' => $states, 'empty' => false]);
                ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
