
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
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <?= $this->Html->css('backend.css') ?>
    <?= $this->Html->css('backend.js') ?>

    <?= $this->fetch('meta') ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
   <div class="col-md-12">
       <nav class="navbar navbar-inverse">
           <div class="container-fluid">
               <div class="navbar-header">
                   <a class="navbar-brand" href="#">WebSiteName</a>
               </div>
               <ul class="nav navbar-nav">
                   <li class="active"><a href="#">Home</a></li>
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                           <li><a href="#">Page 1-1</a></li>
                           <li><a href="#">Page 1-2</a></li>
                           <li><a href="#">Page 1-3</a></li>
                       </ul>
                   </li>
                   <li><a href="#">Page 2</a></li>
                   <li><a href="#">Page 3</a></li>
               </ul>
           </div>
       </nav>
   </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </div>
</div>

</body>
</html>
