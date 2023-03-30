<?= $this->Flash->render() ?>

<div class="row justify-content-center">
    <div class="col-3 text-center pt-5 pb-5">
        <?= $this->Form->create() ?>
        
        <?php echo $this->Html->image('cake-logo.png', ['class' => 'mb-4', 'alt' => 'CakePHP']); ?>
        <h3><?php echo __('Please sign in') ?></h3>
        
        <?php
        echo $this->Form->control('email', ['placeholder' => __('Email'), 'label' => false, 'class' => 'form-control form-floating-top', 'required' => true, 'autocomplete'=> 'off']);
        echo $this->Form->control('password', ['placeholder' => __('Password'), 'label' => false, 'class' => 'form-control form-floating-bottom', 'required' => true, 'autocomplete'=> 'off']);
        ?>
        
        <?php
        echo $this->Form->button(__('Login'), ['class' => 'btn btn-primary m-2 mt-4']);
        echo $this->Html->link(__('Register'), '/admin/users/register', ['class' => 'btn btn-secondary m-2 mt-4']);
        ?>

        <?= $this->Form->end() ?>
    </div>
</div>