<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registration[]|\Cake\Collection\CollectionInterface $registrations
 */
?>
<div class="registrations index content">
    <?= $this->Html->link(__('New Registration'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registrations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_idir') ?></th>
                    <th><?= $this->Paginator->sort('user_guid') ?></th>
                    <th><?= $this->Paginator->sort('employee_number') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('ministry_id') ?></th>
                    <th><?= $this->Paginator->sort('department') ?></th>
                    <th><?= $this->Paginator->sort('milestone') ?></th>
                    <th><?= $this->Paginator->sort('office_careof') ?></th>
                    <th><?= $this->Paginator->sort('office_address') ?></th>
                    <th><?= $this->Paginator->sort('office_suite') ?></th>
                    <th><?= $this->Paginator->sort('office_city_id') ?></th>
                    <th><?= $this->Paginator->sort('office_province') ?></th>
                    <th><?= $this->Paginator->sort('office_postal_code') ?></th>
                    <th><?= $this->Paginator->sort('office_po_box') ?></th>
                    <th><?= $this->Paginator->sort('work_phone') ?></th>
                    <th><?= $this->Paginator->sort('work_extension') ?></th>
                    <th><?= $this->Paginator->sort('preferred_email') ?></th>
                    <th><?= $this->Paginator->sort('supervisor_first_name') ?></th>
                    <th><?= $this->Paginator->sort('supervisor_last_name') ?></th>
                    <th><?= $this->Paginator->sort('supervisor_careof') ?></th>
                    <th><?= $this->Paginator->sort('supervisor_address') ?></th>
                    <th><?= $this->Paginator->sort('supervisor_suite') ?></th>
                    <th><?= $this->Paginator->sort('supervisor_city_id') ?></th>
                    <th><?= $this->Paginator->sort('supervisor_province') ?></th>
                    <th><?= $this->Paginator->sort('supervisor_postal_code') ?></th>
                    <th><?= $this->Paginator->sort('supervisor_email') ?></th>
                    <th><?= $this->Paginator->sort('supervisor_work_phone') ?></th>
                    <th><?= $this->Paginator->sort('supervisor_work_extension') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrations as $registration): ?>
                <tr>
                    <td><?= $this->Number->format($registration->id) ?></td>
                    <td><?= h($registration->created) ?></td>
                    <td><?= h($registration->modified) ?></td>
                    <td><?= h($registration->user_idir) ?></td>
                    <td><?= h($registration->user_guid) ?></td>
                    <td><?= $this->Number->format($registration->employee_number) ?></td>
                    <td><?= h($registration->first_name) ?></td>
                    <td><?= h($registration->last_name) ?></td>
                    <td><?= $registration->has('ministry') ? $this->Html->link($registration->ministry->name, ['controller' => 'Ministries', 'action' => 'view', $registration->ministry->id]) : '' ?></td>
                    <td><?= h($registration->department) ?></td>
                    <td><?= $this->Number->format($registration->milestone) ?></td>
                    <td><?= h($registration->office_careof) ?></td>
                    <td><?= h($registration->office_address) ?></td>
                    <td><?= h($registration->office_suite) ?></td>
                    <td><?= $this->Number->format($registration->office_city_id) ?></td>
                    <td><?= h($registration->office_province) ?></td>
                    <td><?= h($registration->office_postal_code) ?></td>
                    <td><?= h($registration->office_po_box) ?></td>
                    <td><?= h($registration->work_phone) ?></td>
                    <td><?= h($registration->work_extension) ?></td>
                    <td><?= h($registration->preferred_email) ?></td>
                    <td><?= h($registration->supervisor_first_name) ?></td>
                    <td><?= h($registration->supervisor_last_name) ?></td>
                    <td><?= h($registration->supervisor_careof) ?></td>
                    <td><?= h($registration->supervisor_address) ?></td>
                    <td><?= h($registration->supervisor_suite) ?></td>
                    <td><?= $registration->has('city') ? $this->Html->link($registration->city->name, ['controller' => 'Cities', 'action' => 'view', $registration->city->id]) : '' ?></td>
                    <td><?= h($registration->supervisor_province) ?></td>
                    <td><?= h($registration->supervisor_postal_code) ?></td>
                    <td><?= h($registration->supervisor_email) ?></td>
                    <td><?= h($registration->supervisor_work_phone) ?></td>
                    <td><?= h($registration->supervisor_work_extension) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $registration->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registration->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registration->id)]) ?>
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
