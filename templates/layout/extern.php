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

$cakeDescription = 'CakePHP: the rapid development php framework';
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

        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> -->

        <?php //echo $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
        
        <?= $this->Html->css(['bootstrap/bootstrap.min', 'styles']) ?>

        <?= $this->Html->script(['jquery-3.6.4.min', 'bootstrap/bootstrap.bundle.min', 'scripts'], ['block' => 'js']) ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>

    <body>
        <?= $this->element('navbar'); ?>

        <!--
        <nav class="top-nav">
            <div class="top-nav-title">
                <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
            </div>

            <div class="top-nav-links">
                <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a>
                <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a>
                
                <?php
                if ($this->request->getSession()->check('Auth')) {
                    echo $this->Html->link($this->request->getSession()->read('Auth.name') . ' ' . $this->request->getSession()->read('Auth.lastname'), ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'profile']);
                    echo $this->Html->link("Logout", ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'logout']);
                }
                ?>
            </div>
        </nav>
        -->

        <!-- Login and register layout. -->
        <main class="main">
            <div class="container-fluid">
                <?= $this->Flash->render() ?>    
                <?= $this->fetch('content') ?>
            </div>
        </main>

        <?= $this->element('footer'); ?>
        
        <?= $this->fetch('js') ?>
    </body>
</html>