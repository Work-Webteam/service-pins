<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRole $userRole
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List User Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userRoles form content">
            <?= $this->Form->create($userRole) ?>
            <fieldset>
                <legend><?= __('Add User Role') ?></legend>
                <?php
                    echo $this->Form->control('idir');
                    echo $this->Form->control('guid');
                    echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true]);
                    echo $this->Form->control('ministry_id', ['options' => $ministries, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
