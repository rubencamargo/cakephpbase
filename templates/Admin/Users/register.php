<?= $this->Flash->render() ?>

<div class="row justify-content-center">
    <div class="col-3 text-center pt-5 pb-5">
        <?= $this->Form->create($user) ?>
        
        <?php echo $this->Html->image('cake-logo.png', ['class' => 'mb-4', 'alt' => 'CakePHP']); ?>
        <h3><?php echo __('Please register') ?></h3>

        <?php
            //echo $this->Form->control('role_id', ['options' => $roles]);
            echo $this->Form->control('name', ['placeholder' => __('Name'), 'label' => false, 'class' => 'form-control form-floating-top', 'autocomplete' => 'off']);
            echo $this->Form->control('lastname', ['placeholder' => __('Lastname'), 'label' => false, 'class' => 'form-control form-floating', 'autocomplete' => 'off']);
            echo $this->Form->control('email', ['placeholder' => __('Email'), 'label' => false, 'class' => 'form-control form-floating', 'autocomplete' => 'off']);
            echo $this->Form->control('phone', ['placeholder' => __('Phone'), 'label' => false, 'class' => 'form-control form-floating', 'autocomplete' => 'off']);
            echo $this->Form->control('password', ['type' => 'password', 'placeholder' => __('Password'), 'label' => false, 'class' => 'form-control form-floating', 'autocomplete' => 'off']);
            echo $this->Form->control('retype_password', ['type' => 'password', 'placeholder' => __('Retype Password'), 'label' => false, 'class' => 'form-control form-floating-bottom', 'autocomplete' => 'off']);
        ?>
        
        <?= $this->Form->button(__('Register'), ['class' => 'btn btn-primary m-2 mt-4']) ?>
        <?= $this->Html->link(__('Login'), '/admin/users/login', ['class' => 'btn btn-secondary m-2 mt-4']); ?>

        <?= $this->Form->end() ?>
    </div>
</div>

<script>
/*$(document).ready(function() {
    $("button").click(function() {
        if ($('#password').val() != $('#retype-password').val()) {
            alert('No coinciden las contraseñas.');
            $('#password').focus();
            return false;
        }
    });
});*/
</script>