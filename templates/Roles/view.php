<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Role'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roles view content">
            <h3><?= h($role->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($role->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($role->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related User Roles') ?></h4>
                <?php if (!empty($role->user_roles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Idir') ?></th>
                            <th><?= __('Guid') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Ministry Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($role->user_roles as $userRoles) : ?>
                        <tr>
                            <td><?= h($userRoles->id) ?></td>
                            <td><?= h($userRoles->idir) ?></td>
                            <td><?= h($userRoles->guid) ?></td>
                            <td><?= h($userRoles->role_id) ?></td>
                            <td><?= h($userRoles->ministry_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserRoles', 'action' => 'view', $userRoles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserRoles', 'action' => 'edit', $userRoles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserRoles', 'action' => 'delete', $userRoles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRoles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
