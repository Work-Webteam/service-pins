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
            <?= $this->Html->link(__('Edit User Role'), ['action' => 'edit', $userRole->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Role'), ['action' => 'delete', $userRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRole->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Role'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userRoles view content">
            <h3><?= h($userRole->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Idir') ?></th>
                    <td><?= h($userRole->idir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guid') ?></th>
                    <td><?= h($userRole->guid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $userRole->has('role') ? $this->Html->link($userRole->role->name, ['controller' => 'Roles', 'action' => 'view', $userRole->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ministry') ?></th>
                    <td><?= $userRole->has('ministry') ? $this->Html->link($userRole->ministry->name, ['controller' => 'Ministries', 'action' => 'view', $userRole->ministry->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userRole->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
