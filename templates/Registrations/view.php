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
            <?= $this->Html->link(__('Edit Registration'), ['action' => 'edit', $registration->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Registration'), ['action' => 'delete', $registration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registration->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Registrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Registration'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrations view content">
            <h3><?= h($registration->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User Idir') ?></th>
                    <td><?= h($registration->user_idir) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Guid') ?></th>
                    <td><?= h($registration->user_guid) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($registration->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($registration->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ministry') ?></th>
                    <td><?= $registration->has('ministry') ? $this->Html->link($registration->ministry->name, ['controller' => 'Ministries', 'action' => 'view', $registration->ministry->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= h($registration->department) ?></td>
                </tr>
                <tr>
                    <th><?= __('Office Careof') ?></th>
                    <td><?= h($registration->office_careof) ?></td>
                </tr>
                <tr>
                    <th><?= __('Office Address') ?></th>
                    <td><?= h($registration->office_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Office Suite') ?></th>
                    <td><?= h($registration->office_suite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Office Province') ?></th>
                    <td><?= h($registration->office_province) ?></td>
                </tr>
                <tr>
                    <th><?= __('Office Postal Code') ?></th>
                    <td><?= h($registration->office_postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Office Po Box') ?></th>
                    <td><?= h($registration->office_po_box) ?></td>
                </tr>
                <tr>
                    <th><?= __('Work Phone') ?></th>
                    <td><?= h($registration->work_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Work Extension') ?></th>
                    <td><?= h($registration->work_extension) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preferred Email') ?></th>
                    <td><?= h($registration->preferred_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supervisor First Name') ?></th>
                    <td><?= h($registration->supervisor_first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supervisor Last Name') ?></th>
                    <td><?= h($registration->supervisor_last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supervisor Careof') ?></th>
                    <td><?= h($registration->supervisor_careof) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supervisor Address') ?></th>
                    <td><?= h($registration->supervisor_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supervisor Suite') ?></th>
                    <td><?= h($registration->supervisor_suite) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= $registration->has('city') ? $this->Html->link($registration->city->name, ['controller' => 'Cities', 'action' => 'view', $registration->city->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Supervisor Province') ?></th>
                    <td><?= h($registration->supervisor_province) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supervisor Postal Code') ?></th>
                    <td><?= h($registration->supervisor_postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supervisor Email') ?></th>
                    <td><?= h($registration->supervisor_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supervisor Work Phone') ?></th>
                    <td><?= h($registration->supervisor_work_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supervisor Work Extension') ?></th>
                    <td><?= h($registration->supervisor_work_extension) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registration->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Employee Number') ?></th>
                    <td><?= $this->Number->format($registration->employee_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Milestone') ?></th>
                    <td><?= $this->Number->format($registration->milestone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Office City Id') ?></th>
                    <td><?= $this->Number->format($registration->office_city_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($registration->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($registration->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Retro Years') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($registration->retro_years)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Admin Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($registration->admin_notes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
