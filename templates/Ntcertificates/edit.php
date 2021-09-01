<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ntcertificate $ntcertificate
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 * @var string[]|\Cake\Collection\CollectionInterface $designstandards
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ntcertificate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ntcertificate->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ntcertificates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ntcertificates form content">
            <?= $this->Form->create($ntcertificate) ?>
            <fieldset>
                <legend><?= __('Edit Ntcertificate') ?></legend>
                <?php
                    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]);
                    echo $this->Form->control('lastmodified');
                    echo $this->Form->control('lotportionnum');
                    echo $this->Form->control('location');
                    echo $this->Form->control('townhundred');
                    echo $this->Form->control('workdesc');
                    echo $this->Form->control('drawingno');
                    echo $this->Form->control('other');
                    echo $this->Form->control('buildingclass');
                    echo $this->Form->control('constructiontype');
                    echo $this->Form->control('buildingimportancelevel');
                    echo $this->Form->control('windexceedance');
                    echo $this->Form->control('region');
                    echo $this->Form->control('windspeed');
                    echo $this->Form->control('terraincat');
                    echo $this->Form->control('referenceheight');
                    echo $this->Form->control('mz');
                    echo $this->Form->control('ms');
                    echo $this->Form->control('mt');
                    echo $this->Form->control('windspeedrefheight');
                    echo $this->Form->control('intpressure');
                    echo $this->Form->control('expressurewall');
                    echo $this->Form->control('expressureroof');
                    echo $this->Form->control('netpressureroofwall');
                    echo $this->Form->control('imposedloadfloorroof');
                    echo $this->Form->control('earthquakecat');
                    echo $this->Form->control('earthexceedance');
                    echo $this->Form->control('importancelevel');
                    echo $this->Form->control('hazardfactor');
                    echo $this->Form->control('subsoilclass');
                    echo $this->Form->control('bearingcap');
                    echo $this->Form->control('siteclass');
                    echo $this->Form->control('exclusion');
                    echo $this->Form->control('comment');
                    echo $this->Form->control('compname');
                    echo $this->Form->control('compntregnum');
                    echo $this->Form->control('name');
                    echo $this->Form->control('ntregnum');
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('designstandards._ids', ['options' => $designstandards]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
