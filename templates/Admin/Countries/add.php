<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countries form content">
            <?= $this->Form->create($country) ?>
            <fieldset>
                <legend><?= __('Add Country') ?></legend>
                <?php
                    echo $this->Form->control('num_code');
                    echo $this->Form->control('iso1_code');
                    echo $this->Form->control('name');
                    echo $this->Form->control('name_caps');
                    echo $this->Form->control('iso3_code');
                ?>
            </fieldset>
            <?= $this->Form->submit(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>