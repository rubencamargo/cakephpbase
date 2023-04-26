<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="countries form content">
            <?= $this->Form->create($country) ?>
            <fieldset>
                <legend><?= __('Edit Country') ?></legend>
                <?php
                    echo $this->Form->control('num_code');
                    echo $this->Form->control('iso1_code');
                    echo $this->Form->control('name');
                    echo $this->Form->control('name_caps');
                    echo $this->Form->control('iso3_code');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
