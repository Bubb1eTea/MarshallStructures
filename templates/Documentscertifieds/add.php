<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentscertified $documentscertified
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Documentscertifieds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="documentscertifieds form content">
            <?= $this->Form->create($documentscertified) ?>
            <fieldset>
                <legend><?= __('Add Documentscertified') ?></legend>
                <?php
                    echo $this->Form->control('documentno');
                    echo $this->Form->control('documentdate');
                    echo $this->Form->control('type');
                    echo $this->Form->control('numberofpage');
                    echo $this->Form->control('preparedby');
                    echo $this->Form->control('viccertificate_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
