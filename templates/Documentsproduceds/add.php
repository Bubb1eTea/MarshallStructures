<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentsproduced $documentsproduced
 * @var \Cake\Collection\CollectionInterface|string[] $viccertificates
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Documentsproduceds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="documentsproduceds form content">
            <?= $this->Form->create($documentsproduced) ?>
            <fieldset>
                <legend><?= __('Add Documentsproduced') ?></legend>
                <?php
                    echo $this->Form->control('documentno');
                    echo $this->Form->control('documentdate');
                    echo $this->Form->control('revision');
                    echo $this->Form->control('viccertificate_id', ['options' => $viccertificates]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
