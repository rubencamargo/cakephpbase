<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <h3>
        <?= __('Users') ?>
        <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'btn btn-sm btn-success']) ?>
    </h3>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-secondary">
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('role_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('lastname') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                        <td><?= h($user->name) ?></td>
                        <td><?= h($user->lastname) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->phone) ?></td>
                        <td><?= h($user->country) ?></td>
                        <td>
                            <?php //echo h($user->active) ?>
                            <?php //h($user->active) ? __('Yes') : __('No'); ?>
                            <?= $this->Form->postLink(h($user->active) ? __('Yes') : __('No'), ['action' => 'changeStatus', $user->id, $user->active], ['title' => __('Change status'), 'confirm' => __('Are you sure you want to {0}?', h($user->active) ? __('Deactivate') : __('Activate'))]) ?>
                        </td>
                        <td><?= h($user->created) ?></td>
                        <td><?= h($user->modified) ?></td>
                        
                        <?= $this->element('actions', ['data' => $user]); ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <?= $this->element('paginator'); ?>
</div>