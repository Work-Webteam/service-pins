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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $registrationPeriod->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $registrationPeriod->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Registration Periods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrationPeriods form content">
            <?= $this->Form->create($registrationPeriod) ?>
            <fieldset>
                <legend><?= __('Edit Registration Period') ?></legend>
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
