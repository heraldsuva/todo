<?php $cakeDescription = 'AppSupport'; ?>
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
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php echo $this->Flash->render() ?>
                <div class="panel panel-default">                    
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Login</h4>
                        </div>                        
                    </div>
                    <?php
                        $myTemplate = ['inputContainer' => '<div class="form-group">{{content}}</div>'];
                        $this->Form->templates($myTemplate);                    
                        echo $this->Form->create(); 
                    ?>
                    <div class="panel-body">
                        <?= $this->Form->input('email', ['class' => 'form-control']) ?>
                        <?= $this->Form->input('password', ['class' => 'form-control']) ?>
                        <?= $this->Form->button('Login', ['class' => 'btn btn-primary']) ?>
                    </div>
                    
                    <?= $this->Form->end() ?>

                    <div class="panel-footer text-right">
                        <?php echo $this->Html->link(__('Register'), ['controller' => 'Users', 'action' => 'add']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->Html->script(['jquery-2.2.3.min','jquery-migrate-1.3.0.min','bootstrap.min']) ?>
    
</body>
</html>
