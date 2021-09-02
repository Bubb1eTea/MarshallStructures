<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ntcertificate $ntcertificate
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 * @var \Cake\Collection\CollectionInterface|string[] $designstandards
 */

use PhpParser\Node\Stmt\Label;

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ntcertificates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ntcertificates form content">
            <?= $this->Form->create($ntcertificate) ?>
            <fieldset>
                <legend><?= __('Add Ntcertificate') ?></legend>
                <?php
                    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]);
                    echo $this->Form->control('lotportionnum', ['label' => "Lot/Portion Number"]);
                    echo $this->Form->control('location', ['label' => "Location"]);
                    echo $this->Form->control('townhundred', ['label' => "Town/Hundred"]);
                    echo $this->Form->control('workdesc', ['label' => "Description of works"]);
                    echo $this->Form->control('drawingno', ['label' => "Drawing No."]);
                    echo $this->Form->control('other', ['label' => "Other"]);
                    echo $this->Form->control('designstandards._ids', ['label' => "Design Basis", 'options' => $designstandards]);
                    $building = [   'Class 1a - A detached house / A group of two or more attached dwelling each separated by a fire-resisting wall' => 'Class 1a - A detached house / A group of two or more attached dwelling each separated by a fire-resisting wall',
                                    'Class 1b - A boarding house, guest house hostel with total area not exceeding 300m² and in which not more than 12 persons would ordinarily be resident / 3 or more single dwellings located in one allotment and used for short-term holiday accommodation',
                                    'Class 2  - A building containing 2 or more sole-occupancy units each being a separate dwelling',
                                    'Class 3  - A [boarding house, guest house, hostel, lodging house, backpackers accommodation] / Residential part of a hotel or motel / residertial part of a school / accommodation for the aged, children or people with disabilities / residential part of a health-care building which accommodates members of staff / residential part of a detention centre',
                                    'Class 4  - A dwelling in a building that is class 5, 6, 7, 8, or 9 if it is the only dwelling in the building',
                                    'Class 5  - An office building excluding those of class 6, 7, 8 or 9',
                                    'Class 6  - A shop or other building for sale of goods by retail lor the supply of services direct to the public.',
                                    'Class 7a - A carpark',
                                    'Class 7b - A storage or form the display of good or produce for sale by wholesale',
                                    'Class 8  - A laboratory, or building in which` a handicraft or process for for the production assembling, altering, repairing, packaing ']
                    echo $this->Form->control('buildingclass', ['label' => "Class of Building (BCA)"]);
                    echo $this->Form->control('constructiontype', ['label' => "Type of Construction (BCA volume 1 §C1.1) eg. Type A fire-resisting construction)"]);
                    echo $this->Form->control('buildingimportancelevel', ['label' => "Building Importance Level (BCA Table B1.2a)"]);
                    echo $this->Form->control('windexceedance', ['label' => "Annual Probability of Exceedance for Wind (BCA Table 1.2b)"]);
                    echo $this->Form->control('region', ['label' => "Region"]);
                    echo $this->Form->control('windspeed', ['label' => "Regional ultimate wind speed Vʳ (m/s)"]);
                    echo $this->Form->control('terraincat', ['label' => "Terrain Category"]);
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
                    echo $this->Form->control('earthquakecat', ['label' => "Earthquake Design Category, EDC (Table 2.1 of AS 1170.4)"]);
                    echo $this->Form->control('earthexceedance', ['label' => "Annual Probability of Exceedance for Earthquake Actions (BCA Table 1.2b)"]);
                    echo $this->Form->control('importancelevel', ['label' => "Importance Level (BCA)"]);
                    echo $this->Form->control('hazardfactor', ['label' => "Hazard Factor, Z (Section 3)"]);
                    echo $this->Form->control('subsoilclass', ['label' => "Class of Sub-Soil (Section 4)"]);
                    echo $this->Form->control('bearingcap', ['label' => "Safe Foundation Bearing Capacity, kPa"]);
                    echo $this->Form->control('siteclass', ['label' => "Site classification (AS2870)"]);
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
