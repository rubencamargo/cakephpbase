<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('role_id', ['options' => $roles]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('password');
                    echo $this->Form->control('country');
                    echo $this->Form->control('active');
                ?>
            </fieldset>
            <?= $this->Form->submit(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
