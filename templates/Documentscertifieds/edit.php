<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentscertified $documentscertified
 * @var string[]|\Cake\Collection\CollectionInterface $viccertificates
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $documentscertified->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $documentscertified->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Documentscertifieds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="documentscertifieds form content">
            <?= $this->Form->create($documentscertified) ?>
            <fieldset>
                <legend><?= __('Edit Documentscertified') ?></legend>
                <?php
                    echo $this->Form->control('documentno');
                    echo $this->Form->control('documentdate');
                    echo $this->Form->control('type');
                    echo $this->Form->control('numberofpage');
                    echo $this->Form->control('preparedby');
                    echo $this->Form->control('viccertificate_id', ['options' => $viccertificates]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
