<div class="login">
    <?= $this->Flash->render() ?>
    
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    
    <h4><?= __('Please enter your email and password') ?></h4>
    
    <?php
        echo $this->Form->control('email', ['placeholder' => __('Email'), 'label' => false, 'required' => true, 'autocomplete'=> 'off']);
        echo $this->Form->control('password', ['placeholder' => __('Password'), 'label' => false, 'required' => true, 'autocomplete'=> 'off']);
    ?>
    
    <?= $this->Form->button(__('Login')) ?>
    
    <?= $this->Html->link(__('Register'), '/admin/users/register', ['class' => 'button']); ?>

    <?= $this->Form->end() ?>
</div>