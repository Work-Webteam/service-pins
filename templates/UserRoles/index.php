<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRole[]|\Cake\Collection\CollectionInterface $userRoles
 */
?>
<div class="userRoles index content">
    <?= $this->Html->link(__('New User Role'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Roles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idir') ?></th>
                    <th><?= $this->Paginator->sort('guid') ?></th>
                    <th><?= $this->Paginator->sort('role_id') ?></th>
                    <th><?= $this->Paginator->sort('ministry_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userRoles as $userRole): ?>
                <tr>
                    <td><?= $this->Number->format($userRole->id) ?></td>
                    <td><?= h($userRole->idir) ?></td>
                    <td><?= h($userRole->guid) ?></td>
                    <td><?= $userRole->has('role') ? $this->Html->link($userRole->role->name, ['controller' => 'Roles', 'action' => 'view', $userRole->role->id]) : '' ?></td>
                    <td><?= $userRole->has('ministry') ? $this->Html->link($userRole->ministry->name, ['controller' => 'Ministries', 'action' => 'view', $userRole->ministry->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userRole->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userRole->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRole->id)]) ?>
                    </td>
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
