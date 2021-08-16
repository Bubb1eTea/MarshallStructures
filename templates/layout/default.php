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
    <div id="yeet" class="yeet"><a href="/team078-app_fit3048/"> <?= $this->Html->image("marshall.png");?></a></div> <hr>
    <b href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</b>
   
    <?= $this->Html->link('Associates','/associates/index'); ?>
    <!--<a href="#"><i class="material-icons fa-fw"style="font-size:24px; vertical-align: middle;">person</i>Client</a> -->
    <?= $this->Html->link('Client','/clients/index'); ?>
    <!--<a href="#"><i class='far fa-building fa-fw' style="font-size:24px;vertical-align: middle;"></i>Company</a> -->
 
    <?= $this->Html->link('Company','/companys/index'); ?>
    <!--<a href="#"><i class="material-icons fa-fw" style="font-size:24px;vertical-align: middle;">group</i>Associates</a> -->
    
    <!--<a href="#">Invoices</a>-->
    
    <?= $this->Html->link('Fee Proposals','/feeproposals/index'); ?>

    <?= $this->Html->link('Invoice','/invoices/index'); ?>
    <?= $this->Html->link('Projects','/projects/index'); ?>

    <br>
    
    </div>
    <span style="color:black;font-size:30px;cursor:pointer; position: fixed;" onclick="openNav()">&#9776; Open</span>

    <script> //script for animating opening and closing
        function openNav() {
        document.getElementById("mySidenav").style.width = "200px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"> <?= $this->Html->image("marshall.png");?> </a>
        </div>
        <div class="top-nav-links">
           <!-- <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a> -->
           <!-- <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a> -->
        </div>
    </nav>
</body>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
