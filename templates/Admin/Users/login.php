<div class="login">
    <?= $this->Flash->render() ?>
    
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    
    <h4><?= __('Please enter your email and password') ?></h4>
    
    <?php
        echo $this->Form->control('email', ['class' => 'form-control mb-3', 'required' => true, 'autocomplete'=> 'off']);
        echo $this->Form->control('password', ['class' => 'form-control mb-3', 'required' => true, 'autocomplete'=> 'off']);
    ?>
    
    <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary']) ?>
    
    <?php echo $this->Html->link('Register', '/users/register', ['class' => 'btn btn-secondary']); ?>
    <?= $this->Form->end() ?>
</div>