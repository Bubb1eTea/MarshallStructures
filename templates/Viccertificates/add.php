<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Viccertificate $viccertificate
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 * @var \Cake\Collection\CollectionInterface|string[] $companys
 * @var \Cake\Collection\CollectionInterface|string[] $designstandards
 */
use Cake\Routing\Router;

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Viccertificates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="viccertificates form content">
            <?= $this->Form->create($viccertificate) ?>
            <fieldset>
                <legend><?= __('Add Viccertificate') ?></legend>
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
                    echo $this->Form->control('documentsproduceds.0.documentno');
                    echo $this->Form->control('documentsproduceds.0.documentdate');
                    echo $this->Form->control('documentsproduceds.0.revision');
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
