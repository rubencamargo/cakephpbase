<div class="register">
    <?= $this->Form->create($user) ?>
    
    <?php
        //echo $this->Form->control('role_id', ['options' => $roles]);
        echo $this->Form->control('name', ['placeholder' => __('Name'), 'label' => false, 'autocomplete' => 'off']);
        echo $this->Form->control('lastname', ['placeholder' => __('Lastname'), 'label' => false, 'autocomplete' => 'off']);
        echo $this->Form->control('email', ['placeholder' => __('Email'), 'label' => false, 'autocomplete' => 'off']);
        echo $this->Form->control('phone', ['placeholder' => __('Phone'), 'label' => false, 'autocomplete' => 'off']);
        echo $this->Form->control('password', ['type' => 'password', 'placeholder' => __('Password'), 'label' => false, 'autocomplete' => 'off']);
        echo $this->Form->control('retype_password', ['type' => 'password', 'placeholder' => __('Retype Password'), 'label' => false, 'autocomplete' => 'off']);
    ?>
    
    <?= $this->Form->button(__('Submit')) ?>

    <?php
    echo $this->Html->link(
        'Login',
        '/users/login',
        ['class' => 'button']
    );
    ?>
    <?= $this->Form->end() ?>
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