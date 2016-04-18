<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'AppSupport';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title') ?>
    </title>
    <?php echo $this->Html->meta('icon') ?>

    <?php echo $this->Html->css(['bootstrap.min','style']) ?>
    
    <?php echo $this->fetch('meta') ?>
    <?php echo $this->fetch('css') ?>    
    <?php echo $this->fetch('script') ?>
</head>
<body>   
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo 'Todo' ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php $auth = $this->request->session()->read('Auth.User') ?>
            <li><a href="#">Hi, <?php echo $auth['first_name']  ?></a></li>
            <li><?php echo $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>            
          </ul>          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">          
            <li <?php echo  $this->request->controller == 'Users' && $this->request->action == 'dashboard' ? 'class="active"' : '' ?> >                   
                <?php echo $this->Html->link(__('Overview'), ['controller' => 'Users', 'action' => 'dashboard']) ?>                
            </li>
            <li <?php echo  $this->request->controller == 'Tasks' ? 'class="active"' : '' ?>>                
                <?php echo $this->Html->link(__('Todo'), ['controller' => 'Tasks', 'action' => 'index']); ?>
            </li>            
          </ul>
          <!-- <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul> -->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <!-- <h1 class="page-header">Dashboard</h1> -->
            <?= $this->fetch('content') ?>
        </div>
      </div>
    </div>
    <?php echo $this->Html->script(['jquery-2.2.3.min','jquery-migrate-1.3.0.min','bootstrap.min']) ?>
    
</body>
</html>
