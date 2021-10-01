<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documentsproduced $documentsproduced
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $documentsproduced->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $documentsproduced->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Documentsproduceds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="documentsproduceds form content">
            <?= $this->Form->create($documentsproduced) ?>
            <fieldset>
                <legend><?= __('Edit Documentsproduced') ?></legend>
                <?php
                    echo $this->Form->control('documentno');
                    echo $this->Form->control('documentdate');
                    echo $this->Form->control('revision');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
