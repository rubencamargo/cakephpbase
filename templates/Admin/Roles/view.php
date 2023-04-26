<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="roles view content">
            <h3><?= h($role->name) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($role->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($role->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($role->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($role->modified) ?></td>
                </tr>
            </table>

            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($role->users)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Lastname') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone') ?></th>
                            <!-- <th><?= __('Password') ?></th> -->
                            <th><?= __('Country') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                        </tr>
                        <?php foreach ($role->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->role_id) ?></td>
                            <td><?= h($users->name) ?></td>
                            <td><?= h($users->lastname) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->phone) ?></td>
                            <!-- <td><?= h($users->password) ?></td> -->
                            <td><?= h($users->country) ?></td>
                            <td><?= h($users->active) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
