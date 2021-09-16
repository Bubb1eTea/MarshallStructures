<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Marshall Structures';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake','drawer']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<body> <!-- beginning of body -->

    <div id="mySidenav" class="sidenav">
        <b href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</b>
            <table class="sideNavTable">
                <?php
                $session = $this->request->getSession();
                if($session->read('url') !== null && ($session->read('url') =='projects.add' ||
                    $session->read('url') =='projects.edit' || $session->read('url') =='projects.index' ||
                    $session->read('url') =='projects.view')) {?>
                    <tr><u><b><?= $this->Html->link('Project','/projects/index'); ?></b></u></tr>
                <?php } else {?>
                    <tr><?= $this->Html->link('Project','/projects/index'); ?></tr>
                <?php } if($session->read('url') !== null && ($session->read('url') =='associates.add' ||
                    $session->read('url') =='associates.edit' || $session->read('url') =='associates.index' ||
                    $session->read('url') =='associates.view')) { ?>
                    <tr><u><b><?= $this->Html->link('Associate','/associates/index'); ?></b></u></tr>
                <?php } else {?>
                    <tr><?= $this->Html->link('Associate','/associates/index'); ?></tr>
                <?php } if($session->read('url') !== null && ($session->read('url') =='clients.add' ||
                    $session->read('url') =='clients.edit' || $session->read('url') =='clients.index' ||
                    $session->read('url') =='clients.view')) { ?>
                <!--<a href="#"><i class="material-icons fa-fw"style="font-size:24px; vertical-align: middle;">person</i>Client</a> -->
                    <tr><u><b><?= $this->Html->link('Client','/clients/index'); ?></b></u></tr>
                <?php } else {?>
                    <tr><?= $this->Html->link('Client','/clients/index'); ?></tr>
                <?php } if($session->read('url') !== null && ($session->read('url') =='companys.add' ||
                    $session->read('url') =='companys.edit' || $session->read('url') =='companys.index' ||
                    $session->read('url') =='companys.view')) { ?>
                <!--<a href="#"><i class='far fa-building fa-fw' style="font-size:24px;vertical-align: middle;"></i>Company</a> -->
                    <tr><u><b><?= $this->Html->link('Company','/companys/index'); ?></b></u></tr>
                <?php } else {?>
                    <tr><?= $this->Html->link('Company','/companys/index'); ?></tr>
                <?php } if($session->read('url') !== null && ($session->read('url') =='feeproposals.add' ||
                    $session->read('url') =='feeproposals.edit' || $session->read('url') =='feeproposals.index' ||
                    $session->read('url') =='feeproposals.view')) { ?>
                <!--<a href="#"><i class="material-icons fa-fw" style="font-size:24px;vertical-align: middle;">group</i>Associates</a> -->
                <!--<a href="#">Invoices</a>-->
                    <tr><u><b><?= $this->Html->link('Fee Proposal','/feeproposals/index'); ?></b></u></tr>
                <?php } else {?>
                    <tr><?= $this->Html->link('Fee Proposal','/feeproposals/index'); ?></tr>
                <?php } if($session->read('url') !== null && ($session->read('url') =='invoices.add' ||
                    $session->read('url') =='invoices.edit' || $session->read('url') =='invoices.index' ||
                    $session->read('url') =='invoices.view')) { ?>
                    <tr><u><b><?= $this->Html->link('Invoice','/invoices/index'); ?></u></b></tr>
                <?php } else {?>
                    <tr><?= $this->Html->link('Invoice','/invoices/index'); ?></tr>
                <?php } if($session->read('url') !== null && ($session->read('url') =='ntcertificates.add' ||
                    $session->read('url') =='ntcertificates.edit' || $session->read('url') =='ntcertificates.index' ||
                    $session->read('url') =='ntcertificates.view')) { ?>
                    <tr><u><b><?= $this->Html->link('NT Certificates','/ntcertificates/index'); ?></b></u></tr>
                <?php } else {?>
                    <tr><?= $this->Html->link('NT Certificates','/ntcertificates/index'); ?></tr>
                <?php } if($session->read('url') !== null && ($session->read('url') =='viccertificates.add' ||
                    $session->read('url') =='viccertificates.edit' || $session->read('url') =='viccertificates.index' ||
                    $session->read('url') =='viccertificates.view')) { ?>
                    <tr><u><b><?= $this->Html->link('VIC Certificates','/viccertificates/index'); ?></b></u></tr>
                <?php } else {?>
                    <tr><?= $this->Html->link('VIC Certificates','/viccertificates/index'); ?></tr>
                <?php } if($session->read('url') !== null && ($session->read('url') =='designstandards.add' ||
                    $session->read('url') =='designstandards.edit' || $session->read('url') =='designstandards.index' ||
                    $session->read('url') =='designstandards.view')) { ?>
                    <tr><u><b><?= $this->Html->link('Design Basis','/designstandards/index'); ?></b></u></tr>
                <?php } else {?>
                    <tr><?= $this->Html->link('Design Basis','/designstandards/index'); ?></tr>
                <?php } ?>
            </table>
        <br>

    </div>
    <div class="toper"></div>
    <span style="color:black;font-size:30px;cursor:pointer; position:fixed; z-index:2; left: 10px;" onclick="openNav()">&#9776; </span>

    <script> //script for animating opening and closing
        function openNav() {
        document.getElementById("mySidenav").style.width = "12%";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }

    </script>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/projects/index') ?>"> <?= $this->Html->image("marshall.png");?> </a>
        </div>
        <div class="top-nav-links">
           <!-- <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a> -->
           <!-- <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a> -->
        </div>
    </nav>
</body>
    <main class="main" id='testing'>
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
