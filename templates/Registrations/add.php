<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registration $registration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Registrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrations form content">
            <?= $this->Form->create($registration) ?>
            <fieldset>
                <legend><?= __('Add Registration') ?></legend>
                <?php
                    echo $this->Form->control('user_idir');
                    echo $this->Form->control('user_guid');
                    echo $this->Form->control('employee_number');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('ministry_id', ['options' => $ministries, 'empty' => true]);
                    echo $this->Form->control('department');
                    echo $this->Form->control('milestone');
                    echo $this->Form->control('retro_years');
                    echo $this->Form->control('admin_notes');
                    echo $this->Form->control('office_careof');
                    echo $this->Form->control('office_address');
                    echo $this->Form->control('office_suite');
                    echo $this->Form->control('office_city_id');
                    echo $this->Form->control('office_province');
                    echo $this->Form->control('office_postal_code');
                    echo $this->Form->control('office_po_box');
                    echo $this->Form->control('work_phone');
                    echo $this->Form->control('work_extension');
                    echo $this->Form->control('preferred_email');
                    echo $this->Form->control('supervisor_first_name');
                    echo $this->Form->control('supervisor_last_name');
                    echo $this->Form->control('supervisor_careof');
                    echo $this->Form->control('supervisor_address');
                    echo $this->Form->control('supervisor_suite');
                    echo $this->Form->control('supervisor_city_id', ['options' => $cities, 'empty' => true]);
                    echo $this->Form->control('supervisor_province');
                    echo $this->Form->control('supervisor_postal_code');
                    echo $this->Form->control('supervisor_email');
                    echo $this->Form->control('supervisor_work_phone');
                    echo $this->Form->control('supervisor_work_extension');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
