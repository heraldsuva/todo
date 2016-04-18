<h1 class="page-header"><?php echo  __('My Tasks') ?></h1>
<div class="tasks index large-9 medium-8 columns content">
    <div class="row">
        <div class="col-md-5">
            <?php echo $this->Flash->render() ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><?php echo __('Add Task') ?></h4>                    
                </div>
                <div class="panel-body">
                    <?php
                        $myTemplate = ['inputContainer' => '<div class="form-group">{{content}}</div>'];
                        $this->Form->templates($myTemplate);
                    ?>
                    <?php echo $this->Form->create($task, ['novalidate' => true]) ?>                        
                        <?php echo $this->Form->input('description', ['class' => 'form-control', 'label' => 'Task', 'type' => 'text', 'div' => ['class' => 'form-group']]); ?>                        
                        <div class="form-group">                        
                            <?= $this->Form->button(__('Save'),['class' => 'btn btn-primary']) ?>    
                        </div>
                    <?php echo $this->Form->end() ?>
                </div>                
            </div>            
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><?php echo __('Todo lists') ?></h4>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('Task') ?></th>                                
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tasks as $task): ?>
                            <tr>                                
                                <td><?= h($task->description) ?></td>                                
                                <td class="actions" width="170">                                    
                                    <?= $this->Html->link(__('Edit'), ['action' => 'index', $task->id], ['class' => 'btn btn-warning btn-sm']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete this task?', $task->id), 'class' => 'btn btn-danger btn-sm']) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="paginator">
                        <ul class="pagination">
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                        </ul>
                        <p><?= $this->Paginator->counter() ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
