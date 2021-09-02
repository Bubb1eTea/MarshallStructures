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
                    echo $this->Form->control('lotportionnum', ['label' => "Lot/Portion Number"]);
                    echo $this->Form->control('location', ['label' => "Location"]);
                    echo $this->Form->control('townhundred', ['label' => "Town/Hundred"]);
                    echo $this->Form->control('workdesc', ['label' => "Description of works"]);
                    echo $this->Form->control('drawingno', ['label' => "Drawing No."]);
                    echo $this->Form->control('other', ['label' => "Other"]);

                    echo $this->Form->control('designstandards._ids', ['label' => "Design Basis", 'options' => $designstandards]);
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

                    $contructiontype = [    'N/A' => 'N/A',
                                            'A' => 'A',
                                            'B' => 'B',
                                            'C' => 'C'];
                    echo $this->Form->control('constructiontype', ['label' => "Type of Construction (BCA volume 1 §C1.1) eg. Type A fire-resisting construction)", 'options' => $contructiontype]);
                    
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

                    echo $this->Form->control('windspeed', ['label' => "Regional ultimate wind speed Vʳ (m/s)"]);

                    $terraincat = [ '1aaa' => '1',
                                    '2' => '2',
                                    '2.5' => '2.5',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5'];
                    echo $this->Form->control('terraincat', ['label' => "Terrain Category", 'options' => $terraincat]);
                
                    echo $this->Form->control('referenceheight', ['label' => "Reference height (m)"]);
                    echo $this->Form->control('mz', ['label' => "Mᶻ⸴ᶜᵃᵗ"]);
                    echo $this->Form->control('ms', ['label' => "Mˢ"]);
                    echo $this->Form->control('mt', ['label' => "Mᵗ"]);
                    echo $this->Form->control('windspeedrefheight', ['label' => "Vᵈᵉˢθ  Design Wind Speed at reference height (m/s)"]);
                    echo $this->Form->control('intpressure', ['label' => "Internal Pressure Coefficients (Cₚ,ᵢ)"]);
                    echo $this->Form->control('expressurewall', ['label' => "External Pressure Coefficients (Cₚ,ₑ) Walls"]);
                    echo $this->Form->control('expressureroof', ['label' => "External Pressure Coefficients (Cₚ,ₑ) Roof"]);
                    echo $this->Form->control('netpressureroofwall', ['label' => "Net Pressure Coefficients (Cₚ,ₙ) Roof / Walls"]);
                    echo $this->Form->control('imposedloadfloorroof', ['label' => "Imposed Loads, kPa Floor / Roof"]);

                    $earthquakecat = [  'I' => 'I',
                                        'II' => 'II',
                                        'III' => 'III'];
                    echo $this->Form->control('earthquakecat', ['label' => "Earthquake Design Category, EDC (Table 2.1 of AS 1170.4)", 'options' => $earthquakecat]);
                    echo $this->Form->control('earthexceedance', ['label' => "Annual Probability of Exceedance for Earthquake Actions (BCA Table 1.2b)"]);
                    echo $this->Form->control('importancelevel', ['label' => "Importance Level (BCA)"]);
                    echo $this->Form->control('hazardfactor', ['label' => "Hazard Factor, Z (Section 3)"]);

                    $subsoilclass = [   'Ae' => 'Ae',
                                        'Be' => 'Be',
                                        'Ce' => 'Ce',
                                        'De' => 'De',
                                        'Ed' => 'Ed'];                                  
                    echo $this->Form->control('subsoilclass', ['label' => "Class of Sub-Soil (Section 4)", 'options' => $subsoilclass]);

                    echo $this->Form->control('bearingcap', ['label' => "Safe Foundation Bearing Capacity, kPa"]);

                    $siteclass = [  'A' => 'A',
                                    'S' => 'S',
                                    'M' => 'M',
                                    'M-D' => 'M-D',
                                    'H1' => 'H1',
                                    'H1-D' => 'H1-D',
                                    'H2' => 'H2',
                                    'P' => 'P'];
                    echo $this->Form->control('siteclass', ['label' => "Site classification (AS2870)", 'options' => $siteclass]);
                    echo $this->Form->control('exclusion', ['label' => "The following items are excluded and shall be certified separately"]);
                    echo $this->Form->control('comment', ['label' => "Comments"]);
                    echo $this->Form->control('compname', ['label' => "Company Name"]);
                    echo $this->Form->control('compntregnum', ['label' => "Company NT Registration Number"]);
                    echo $this->Form->control('name', ['label' => "Name"]);
                    echo $this->Form->control('ntregnum', ['label' => "Nominee/Indicidual NT Registration Number"]);
                    echo $this->Form->control('date', ['label' => "Date", 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
