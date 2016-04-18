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
                        <div class="panel-title">Register</div>
                    </div>
                    <div class="panel-body">
                        <?php 
                            $this->Form->create($user);        
                            $myTemplate = ['inputContainer' => '<div class="form-group">{{content}}</div>'];
                            $this->Form->templates($myTemplate);
                            echo $this->Form->create($user,['novalidate' => true]);
                            echo $this->Form->input('first_name', ['class' => 'form-control']);
                            echo $this->Form->input('last_name', ['class' => 'form-control']);
                            echo $this->Form->input('email', ['class' => 'form-control']);
                            echo $this->Form->input('password', ['class' => 'form-control']);
                            echo $this->Form->input('confirm_password', ['class' => 'form-control', 'type' => 'password']);
                        
                            echo $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']);
                            echo '<br />';
                            echo $this->Form->end();
                        ?>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <?php echo $this->Html->script(['jquery-2.2.3.min','jquery-migrate-1.3.0.min','bootstrap.min']) ?>    
</body>
</html>

