<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationPeriod $registrationPeriod
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Registration Periods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrationPeriods form content">
            <?= $this->Form->create($registrationPeriod) ?>
            <fieldset>
                <legend><?= __('Add Registration Period') ?></legend>
                <?php
                    echo $this->Form->control('award_year');
                    echo $this->Form->control('open_registration', ['empty' => true]);
                    echo $this->Form->control('close_registration', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
