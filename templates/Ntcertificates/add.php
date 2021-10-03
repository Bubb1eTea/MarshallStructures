<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ntcertificate $ntcertificate
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 * @var \Cake\Collection\CollectionInterface|string[] $designstandards
 */

use PhpParser\Node\Stmt\Label;



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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>

<?php session_start();
$session = $this->request->getSession();
$session->write('previous_url', $session->read('url'));
$session->write('url', 'ntcertificates.add');
debug($session->read('previous_url')); ?>
<style>
    select[multiple="multiple"] { height:30rem;}
    .error-message {color: #ff0000;}

    .control_left{float:left;width: 55%}
    .control_right{float:right; width: 45%}
    .control_three{float:left; width: 30%;margin-inline: 15px}
    .control_left_long{float:left;width: 50%}
</style>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List NT Certificates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ntcertificates form content">
            <?= $this->Form->create($ntcertificate) ?>
            <fieldset>
                <legend><?= __('Add NT Certificate') ?></legend>
                <div class="control_left">
                    <?php    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true, 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php    echo $this->Form->control('lotportionnum', ['label' => "Lot/Portion Number"]);?>
                </div>
                <div class="control_left">
                    <?php    echo $this->Form->control('location', ['label' => "Location", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php    echo $this->Form->control('townhundred', ['label' => "Town/Hundred"]);?>
                </div>
                <?php
                    echo $this->Form->control('workdesc', ['label' => "Description of works"]);
                    echo $this->Form->control('drawingno', ['label' => "Drawing No."]);
                    echo $this->Form->control('other', ['label' => "Other"]);

                    echo $this->Form->control('designstandards._ids', array('label' => "Design Basis (hold 'ctrl' when selecting more than one)", 'options' => $designstandards, 'multiple' => 'checkbox'));
                    $building = [   'Class 1a'  => 'Class 1a  - A detached house / A group of two or more attached dwelling each separated by a fire-resisting wall',
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
                    echo $this->Form->control('buildingclass', ['label' => "Class of Building (BCA)", 'options' => $building]);
                    echo $this->Html->image("buildingtype.jpg");

                    $contructiontype = [    'N/A' => 'N/A',
                                            'A' => 'A',
                                            'B' => 'B',
                                            'C' => 'C'];
                    echo $this->Form->control('constructiontype', ['label' => "Type of Construction (BCA volume 1 §C1.1) eg. Type A fire-resisting construction", 'options' => $contructiontype]);

                    $buildingimportancelevel = [    '1' => '1 Minor structures (failure not likely to endanger human life)',
                                                    '2' => '2 Normal structures and structures not falling into other levels',
                                                    '3' => '3 Major structures (affecting crowds)',
                                                    '4' => '4 Post-disaster structures (post disaster functions or dangerous activities)',
                                                    '5' => '5 Exceptional structures'];
                    echo $this->Form->control('buildingimportancelevel', ['label' => "Building Importance Level (BCA Table B1.2a)", 'options' => $buildingimportancelevel]);

                    $windexceedance = [ '1' => '1',
                                        '5' => '5',
                                        '10' => '10',
                                        '20' => '20',
                                        '25' => '25',
                                        '50' => '50',
                                        '100' => '100',
                                        '200' => '200',
                                        '250' => '250',
                                        '500' => '500',
                                        '1000' => '1000',
                                        '2000' => '2000'];
                    echo $this->Form->control('windexceedance', ['label' => "Annual Probability of Exceedance for Wind (BCA Table 1.2b)", 'options' => $windexceedance]);

                    $region = [ 'A1' => 'A1 South of 30 latitude and not A2, A3, or A5',
                                'A2' => 'A2 South of 30 within 50km of eastern coast',
                                'A3' => 'A3 South of 30 between 50km and 200km eastern coast',
                                'A4' => 'A4 North of 30 latitude, inland',
                                'A5' => 'A5 Within 70km of Melb. GPO',
                                'B' => 'B refer fig 3.1 AS1170.2',
                                'C' => 'C refer fig 3.1 AS1170.2',
                                'W' => 'W refer fig 3.1 AS1170.2'];
                    echo $this->Form->control('region', ['label' => "Region", 'options' => $region]);
                    echo $this->Html->image("regionalwindspeed.jpg");
                ?>
                <div class="control_left">
                    <?php    echo $this->Form->control('windspeed', ['label' => "Regional ultimate wind speed Vʳ (m/s)", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php
                        $terraincat = [ '1aaa' => '1',
                                        '2' => '2',
                                        '2.5' => '2.5',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5'];
                        echo $this->Form->control('terraincat', ['label' => "Terrain Category", 'options' => $terraincat]);
                    ?>
                </div>
                <?php    echo $this->Form->control('referenceheight', ['label' => "Reference height (m)", 'style'=>'width:45.1%']);?>
                <div class="control_three">
                    <?php    echo $this->Form->control('mz', ['label' => "Mᶻ⸴ᶜᵃᵗ"]);?>
                </div>
                <div class="control_three">
                    <?php    echo $this->Form->control('ms', ['label' => "Mˢ"]);?>
                </div>
                <div class="control_three">
                    <?php    echo $this->Form->control('mt', ['label' => "Mᵗ", ]);?>
                </div>
                <div class="control_left">
                    <?php    echo $this->Form->control('windspeedrefheight', ['label' => "Vᵈᵉˢθ  Design Wind Speed at reference height (m/s)", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                    <?php    echo $this->Form->control('intpressure', ['label' => "Internal Pressure Coefficients (Cₚ,ᵢ)"]);?>
                </div>
                <div class="control_three">
                    <?php    echo $this->Form->control('expressurewall', ['label' => "External Pressure Coefficients (Cₚ,ₑ) Walls"]);?>
                </div>
                <div class="control_three">
                    <?php    echo $this->Form->control('expressureroof', ['label' => "External Pressure Coefficients (Cₚ,ₑ) Roof"]);?>
                </div>
                <div class="control_three">
                    <?php    echo $this->Form->control('netpressureroofwall', ['label' => "Net Pressure Coefficients (Cₚ,ₙ) Roof / Walls"]);?>
                </div>
                <?php    echo $this->Form->control('imposedloadfloorroof', ['label' => "Imposed Loads, kPa Floor / Roof", 'style'=>'width:45.1%']);?>
                <div class="control_left_long">
                <?php
                    $earthquakecat = [  'I' => 'I',
                                        'II' => 'II',
                                        'III' => 'III'];
                    echo $this->Form->control('earthquakecat', ['label' => "Earthquake Design Category, EDC (Table 2.1 of AS 1170.4)", 'options' => $earthquakecat, 'style'=>'width:90.2%']);
                ?>
                </div>
                <div class="control_right">
                <?php    echo $this->Form->control('earthexceedance', ['label' => "Annual Probability of Exceedance for Earthquake Actions (BCA Table 1.2b)"]);?>
                </div>
                <?php    echo $this->Form->control('importancelevel', ['label' => "Importance Level (BCA)", 'style'=>'width:45.1%']);?>
                <div class="control_left">
                <?php    echo $this->Form->control('hazardfactor', ['label' => "Hazard Factor, Z (Section 3)", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                <?php
                    $subsoilclass = [   'Ae' => 'Ae',
                                        'Be' => 'Be',
                                        'Ce' => 'Ce',
                                        'De' => 'De',
                                        'Ed' => 'Ed'];
                    echo $this->Form->control('subsoilclass', ['label' => "Class of Sub-Soil (Section 4)", 'options' => $subsoilclass]);
                ?>
                </div>
                <div class="control_left">
                <?php    echo $this->Form->control('bearingcap', ['label' => "Safe Foundation Bearing Capacity, kPa", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                <?php
                    $siteclass = [  'A' => 'A',
                                    'S' => 'S',
                                    'M' => 'M',
                                    'M-D' => 'M-D',
                                    'H1' => 'H1',
                                    'H1-D' => 'H1-D',
                                    'H2' => 'H2',
                                    'P' => 'P'];
                    echo $this->Form->control('siteclass', ['label' => "Site Classification (AS2870)", 'options' => $siteclass]);
                ?>
                </div>
                <?php
                    echo $this->Form->control('exclusion', ['label' => "The following items are excluded and shall be certified separately"]);
                    echo $this->Form->control('comment', ['label' => "Comments"]);
                ?>
                <div class="control_left">
                <?php    echo $this->Form->control('compname', ['label' => "Company Name", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                <?php    echo $this->Form->control('compntregnum', ['label' => "Company NT Registration Number"]);?>
                </div>
                <div class="control_left">
                <?php    echo $this->Form->control('name', ['label' => "Name", 'style'=>'width:82%']);?>
                </div>
                <div class="control_right">
                <?php    echo $this->Form->control('ntregnum', ['label' => "Nominee/Individual NT Registration Number"]);?>
                </div>
                <?php    echo $this->Form->control('date', ['label' => "Date of Issue", 'empty' => false, 'style'=>'width:45.1%']);?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>

                <script>
                    $(document).ready(function() {
                        $('input').keyup(function(ev) {
                                var windspeed = parseFloat($('#windspeed').val()) || 1;
                                var mz = parseFloat($('#mz').val())  || 1;
                                var ms = parseFloat($('#ms').val())  || 1;
                                var mt = parseFloat($('#mt').val()) || 1;

                                var windspeedrefheight = (parseFloat(windspeed)*parseFloat(mz)*parseFloat(ms)*parseFloat(mt)).toFixed(2);
                                var divobj = document.getElementById('windspeedrefheight');
                                divobj.value = windspeedrefheight;
                        });
                    });
                </script>
        </div>
    </div>
</div>
