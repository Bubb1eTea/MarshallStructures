<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Viccertificate $viccertificate
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 * @var string[]|\Cake\Collection\CollectionInterface $companys
 * @var string[]|\Cake\Collection\CollectionInterface $designstandards
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $viccertificate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $viccertificate->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Viccertificates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="viccertificates form content">
            <?= $this->Form->create($viccertificate) ?>
            <fieldset>
                <legend><?= __('Edit Viccertificate') ?></legend>
                <?php
                    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]);
                    echo $this->Form->control('company_id', ['options' => $companys, 'empty' => true]);
                    echo $this->Form->control('lastmodified');
                    echo $this->Form->control('buildingtype');
                    echo $this->Form->control('numberofstorey');
                    echo $this->Form->control('riseinstory');
                    echo $this->Form->control('effectiveheight');
                    echo $this->Form->control('constructiontype');
                    echo $this->Form->control('buildingclass');
                    echo $this->Form->control('workrelatingto');
                    echo $this->Form->control('drawingsproducedby');
                    echo $this->Form->control('documentsproduced_id');
                    echo $this->Form->control('documentscertified_id');
                    echo $this->Form->control('performancereq');
                    echo $this->Form->control('performancesolution');
                    echo $this->Form->control('prepared');
                    echo $this->Form->control('dateofissue', ['empty' => true]);
                    echo $this->Form->control('designstandards._ids', ['options' => $designstandards]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
