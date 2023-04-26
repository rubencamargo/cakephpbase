<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="countries view content">
            <h3><?= h($country->name) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($country->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($country->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iso1 Code') ?></th>
                    <td><?= h($country->iso1_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Caps') ?></th>
                    <td><?= h($country->name_caps) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iso3 Code') ?></th>
                    <td><?= h($country->iso3_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Code') ?></th>
                    <td><?= $this->Number->format($country->num_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($country->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($country->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
