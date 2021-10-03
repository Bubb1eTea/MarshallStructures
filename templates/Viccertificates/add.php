<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Viccertificate $viccertificate
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 * @var \Cake\Collection\CollectionInterface|string[] $companys
 * @var \Cake\Collection\CollectionInterface|string[] $documentscertifieds
 * @var \Cake\Collection\CollectionInterface|string[] $designstandards
 */
?>

<?php

$labels =  array();
for($i=1; $i <= 100; $i++){
$concat = "designstandards-ids-". $i;
array_push($labels, $concat);
}

?>

<style>
<?php
for($i=1; $i <= 100; $i++){ ?>
label[for=<?php echo $labels[$i-1] ?>]{
    font-size:small;
    margin: 0px;
    font-weight: normal;
}
<?php } ?>
</style>

<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'viccertificates.add');
debug($session->read('previous_url')); ?>
<style>
    select[multiple="multiple"] { height:30rem;}
    .error-message {color: #ff0000;}

    .control_left{float:left;width: 55%}
    .control_right{float:right; width: 45%}
    .control_left_long{float:left;width: 50%}
</style>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List VIC Certificates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="viccertificates form content">
            <?= $this->Form->create($viccertificate) ?>
            <fieldset>
                <legend><?= __('Add VIC Certificate') ?></legend>
                <?php    echo $this->Form->control('project_id', ['options' => $projects]);?>
                <div class="control_left">
                <?php    echo $this->Form->control('company_id', ['options' => $companys, 'empty' => true, 'label'=>'Surveyor: This certificate is issued to', 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                <?php
                    $building= ['a new building'=>'a new building',
                                'an extension'=>'an extension',
                                'an alteration'=>'an alteration',
                                'a change of use'=>'a change of use',
                                'a demolition'=>'a demonlition',
                                'a removal'=>'a removal',
                                'a re-erection of a building'=>'a re-erection of a building'];
                    echo $this->Form->control('buildingtype', ['options'=>$building, 'empty'=>true, 'label'=>'Construction of a']);
                ?>
                </div>
                <div class="control_left">
                <?php    echo $this->Form->control('numberofstorey', ['label'=>'Number of Storeys', 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                <?php    echo $this->Form->control('riseinstory', ['label'=>'Rise in Storeys']);?>
                </div>
                <?php    echo $this->Form->control('effectiveheight', ['label'=>'Effective Height', 'style'=>'width:45.1%']);
                    $buildingclass = [   'Class 1a'  => 'Class 1a  - A detached house / A group of two or more attached dwelling each separated by a fire-resisting wall',
                    'Class 1b'  => 'Class 1b  - A boarding house, guest house hostel with total area not exceeding 300m² and in which not more than 12 persons would ordinarily be resident / 3 or more single dwellings located in one allotment and used for short-term holiday accommodation',
                    'Class 2'   => 'Class 2   - A building containing 2 or more sole-occupancy units each being a separate dwelling',
                    'Class 3'   => 'Class 3   - A [boarding house, guest house, hostel, lodging house, backpackers accommodation] / Residential part of a hotel or motel / residertial part of a school / accommodation for the aged, children or people with disabilities / residential part of a health-care building which accommodates members of staff / residential part of a detention centre',
                    'Class 4'   => 'Class 4   - A dwelling in a building that is class 5, 6, 7, 8, or 9 if it is the only dwelling in the building',
                    'Class 5'   => 'Class 5   - An office building excluding those of class 6, 7, 8 or 9',
                    'Class 6'   => 'Class 6   - A shop or other building for sale of goods by retail lor the supply of services direct to the public',
                    'Class 7a'  => 'Class 7a  - A carpark',
                    'Class 7b'  => 'Class 7b  - A storage or form the display of good or produce for sale by wholesale',
                    'Class 8'   => 'Class 8   - A laboratory, or building in which` a handicraft or process for for the production assembling, altering, repairing, packing, finishing or cleaning of goods or produce is carried on for trade, sale or gain',
                    'Class 9a'  => 'Class 9a  - A healthcare building including those parts of the building set aside as a laboratory',
                    'Class 9b'  => 'Class 9b  - An assembly building including trade workshop, laoratory in a primary or secondary school',
                    'Class 9c'  => 'Class 9c  - An aged care building',
                    'Class 10'  => 'Class 10  - A non-habitable building being a private garage, carport, shed or the like',
                    'Class 10b' => 'Class 10b - A fence, mast, antenna, retaining or free-standing wall, swimming pool or the link',
                    'Class 10c' => 'Class 10c - A private bushfire shelter'];
                    echo $this->Form->control('buildingclass', ['label'=>'Class of Building (BCA)', 'options'=>$buildingclass]);
                    echo $this->Html->image("buildingtype.jpg");
                ?>
                <div class="control_left_long">
                <?php
                    $constructiontype=['N/A'=>'N/A', 'A'=>'A', 'B'=>'B', 'C'=>'C'];
                    echo $this->Form->control('constructiontype', ['label'=>'Type of Construction (BCA volume 1 §C1.1) eg. Type A fire-resisting construction', 'options'=>$constructiontype, 'style'=>'width:90.2%']);
                ?>
                </div>
                <div class="control_right">
                <?php    echo $this->Form->control('workrelatingto', ['label'=>'Design or part of the design of building work relating to']);?>
                </div>
                <?php
                    echo $this->Form->control('drawingsproducedby', ['label'=>'Drawings produced by', 'style'=>'width:45.1%']);
                    echo $this->Form->control('documentsproduced', ['label'=>'Drawings relating to the design that is certified by this certificate.?>
                    Use a ; to separate document number, date and revision, e.g. 1;10/05/2020;3']);
                    echo $this->Form->control('documentscertified', ['label'=>'Documents setting out the design that is certified by this certificate
                    Use a ; to separate document number, date, type of document, pages and who it is prepared by, e.g. 1;10/05/2020;drawings;17;Ben']);
                    echo $this->Form->control('performancereq', ['label'=>'Relevant performance requirement']);
                    echo $this->Form->control('performancesolution',['label'=>'Details of performance solution required by regulation 124']);
                    echo $this->Form->control('designstandards._ids', array('label' => "Design Basis (hold 'ctrl' when selecting more than one)", 'options' => $designstandards, 'multiple' => 'checkbox'));
                ?>
                <div class="control_left">
                <?php
                    $prepared = ['prepared'=>'prepared', 'did not prepare'=>'did not prepare'];
                    echo $this->Form->control('prepared', ['label'=>'I ______ the design', 'options'=>$prepared, 'style'=>'width:82%']);
                ?>
                </div>
                <div class="control_right">
                <?php    echo $this->Form->control('dateofissue', ['label'=>'Date of Issue']);?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
