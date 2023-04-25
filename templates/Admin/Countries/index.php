<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Country> $countries
 */
?>
<div class="countries index content">
    <h3>
        <?= __('Countries') ?>
        <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'btn btn-sm btn-success']) ?>
    </h3>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-secondary">
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('num_code') ?></th>
                    <th><?= $this->Paginator->sort('iso1_code') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('name_caps') ?></th>
                    <th><?= $this->Paginator->sort('iso3_code') ?></th>
                    <!--
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    -->
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($countries as $country): ?>
                <tr>
                    <td><?= $this->Number->format($country->id) ?></td>
                    <td><?= $this->Number->format($country->num_code) ?></td>
                    <td><?= h($country->iso1_code) ?></td>
                    <td><?= h($country->name) ?></td>
                    <td><?= h($country->name_caps) ?></td>
                    <td><?= h($country->iso3_code) ?></td>
                    <!--
                    <td><?= h($country->created) ?></td>
                    <td><?= h($country->modified) ?></td>
                    -->
                    <?= $this->element('actions', ['data' => $country]); ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
